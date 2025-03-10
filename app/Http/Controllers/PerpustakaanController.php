<?php

namespace App\Http\Controllers;

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
        Buku::create($request->all());

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
        $perpustakaan->update($request->all());

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

        return redirect('/perpustakaan');
    }
}
