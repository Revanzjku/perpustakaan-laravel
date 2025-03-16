<?php

namespace App\Http\Controllers;

use App\Http\Requests\BukuRequest;
use App\Models\Aktivitas;
use App\Models\Buku;
use App\Models\Kategori;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $perpustakaan = Buku::with('kategori')->paginate(10);

        return view('buku.index', compact('perpustakaan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $kategori = Kategori::all();

        return view('buku.tambah', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BukuRequest $request)
    {
        //
        $input = $request->all();

        if ($request->hasFile('cover')) {
            $cover = $request->file('cover');
            $namaCover = time() . '.' . $cover->getClientOriginalExtension();
            $cover->move(public_path('images'), $namaCover);
            $input['cover'] = $namaCover;
        }

        $buku = Buku::create($input);

        Aktivitas::create([
            'deskripsi' => "Buku baru $buku->judul_buku telah ditambahkan."
        ]);

        return redirect()->route('buku.index')->with('success', 'Data buku berhasil ditambahkan.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $perpustakaan = Buku::findOrFail($id);
        $kategori = Kategori::all();

        return view('buku.edit', compact('perpustakaan', 'kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BukuRequest $request, $id)
    {
        //
        $perpustakaan = Buku::findOrFail($id);
        $namaBuku = $perpustakaan->judul_buku;

        $input = $request->all();
        if ($request->hasFile('cover')) {
            $cover = $request->file('cover');
            $namaCover = time() . '.' . $cover->getClientOriginalExtension();
            $cover->move(public_path('images'), $namaCover);
            $input['cover'] = $namaCover;
        } else {
            $input['cover'] = $perpustakaan->cover;
        }

        $perpustakaan->update($input);

        Aktivitas::create([
            'deskripsi' => "Data buku $namaBuku telah diubah."
        ]);

        return redirect()->route('buku.index')->with('success', 'Data buku berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $perpustakaan = Buku::findOrFail($id);
        $perpustakaan->delete();

        Aktivitas::create([
            'deskripsi' => "Buku $perpustakaan->judul_buku telah masuk ke tempat sampah."
        ]);

        return redirect()->route('buku.index')->with('success', 'Data buku berhasil dihapus, ke tempat sampah.');
    }

    public function trash()
    {
        $perpustakaan = Buku::onlyTrashed()->paginate(10);

        return view('buku.trash', compact('perpustakaan'));
    }

    public function restore($id)
    {
        $buku = Buku::withTrashed()->findOrFail($id);
        $buku->restore();

        Aktivitas::create([
            'deskripsi' => "Buku $buku->judul_buku telah dikembalikan."
        ]);

        return redirect()->route('buku.index')->with('success', 'Buku berhasil dikembalikan.');
    }

    public function forceDelete($id)
    {
        $buku = Buku::withTrashed()->findOrFail($id);
        $buku->forceDelete();

        Aktivitas::create([
            'deskripsi' => "Buku $buku->judul_buku telah dihapus permanen."
        ]);

        return redirect()->route('buku.index')->with('success', 'Buku berhasil dihapus secara permanen.');
    }
}
