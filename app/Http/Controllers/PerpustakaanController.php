<?php

namespace App\Http\Controllers;

use App\Models\Aktivitas;
use App\Models\Buku;
use App\Models\Kategori;
use Illuminate\Http\Request;

class PerpustakaanController extends Controller
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
    public function store(Request $request)
    {
        //
        $buku = Buku::create($request->all());

        Aktivitas::create([
            'deskripsi' => "Buku baru $buku->judul_buku telah ditambahkan."
        ]);

        return redirect('/perpustakaan');
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
    public function update(Request $request, $id)
    {
        //
        $perpustakaan = Buku::findOrFail($id);
        $namaBuku = $perpustakaan->judul_buku;
        $perpustakaan->update($request->all());

        Aktivitas::create([
            'deskripsi' => "Data buku $namaBuku telah diubah."
        ]);

        return redirect('/perpustakaan');
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
            'deskripsi' => "Buku $perpustakaan->judul_buku telah dihapus."
        ]);

        return redirect('/perpustakaan');
    }
}
