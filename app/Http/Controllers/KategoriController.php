<?php

namespace App\Http\Controllers;

use App\Http\Requests\KategoriRequest;
use App\Models\Aktivitas;
use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $kategori = Kategori::paginate(5);

        return view('kategori.index', compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('kategori.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(KategoriRequest $request)
    {
        //
        $kategori = Kategori::create($request->all());

        Aktivitas::create([
            'deskripsi' => "Kategori $kategori->nama_kategori telah ditambah."
        ]);

        return redirect()->route('kategori.index')->with('success', 'Data kategori berhasil ditambahkan.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $kategori = Kategori::findOrFail($id);
        $kategori->all();

        return view('kategori.edit', compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(KategoriRequest $request, $id)
    {
        //
        $kategori = Kategori::findOrFail($id);
        $namaKategori = $kategori->nama_kategori;
        $kategori->update($request->all());

        Aktivitas::create([
            'deskripsi' => "Data kategori $namaKategori telah diubah."
        ]);

        return redirect()->route('kategori.index')->with('success', 'Data kategori berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $kategori = Kategori::findOrFail($id);
        $kategori->delete();

        Aktivitas::create([
            'deskripsi' => "Kategori $kategori->nama_kategori dimasukkan ke tempat sampah."
        ]);

        return redirect()->route('kategori.index')->with('success', 'Data kategori berhasil dihapus, masuk ke tempat sampah.');
    }

    public function trash()
    {
        $kategori = Kategori::onlyTrashed()->paginate(10);

        return view('kategori.trash', compact('kategori'));
    }

    public function restore($id)
    {
        $kategori = Kategori::withTrashed()->findOrFail($id);
        $kategori->restore();

        Aktivitas::create([
            'deskripsi' => "Kategori $kategori->nama_kategori telah dikembalikan."
        ]);

        return redirect()->route('kategori.index')->with('success', 'Kategori berhasil dikembalikan.');
    }

    public function forceDelete($id)
    {
        $kategori = Kategori::withTrashed()->findOrFail($id);
        $kategori->forceDelete();

        Aktivitas::create([
            'deskripsi' => "Kategori $kategori->nama_kategori telah dihapus permanen."
        ]);

        return redirect()->route('kategori.index')->with('success', 'Kategori berhasil dihapus secara permanen.');
    }
}
