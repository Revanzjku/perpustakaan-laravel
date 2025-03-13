<?php

namespace App\Http\Controllers;

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
    public function store(Request $request)
    {
        //
        $kategori = Kategori::create($request->all());

        Aktivitas::create([
            'deskripsi' => "Kategori $kategori->nama_kategori telah ditambah."
        ]);

        return redirect('/kategori');
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
    public function update(Request $request, $id)
    {
        //
        $kategori = Kategori::findOrFail($id);
        $kategori->update($request->all());

        Aktivitas::create([
            'deskripsi' => "Data kategori $kategori->nama_kategori telah diubah."
        ]);

        return redirect('/kategori');
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
            'deskripsi' => "Kategori $kategori->nama_kategori telah dihapus."
        ]);

        return redirect('/kategori');
    }
}
