<?php

namespace App\Http\Controllers;

use App\Models\Aktivitas;
use App\Models\Buku;
use App\Models\Kategori;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $totalBuku = Buku::count();
        $totalKategori = Kategori::count();
        $totalStokBuku = Buku::sum('stok_buku');
        $aktivitasTerbaru = Aktivitas::latest()->take(3)->get();

        return view('dashboard', compact('totalBuku', 'totalKategori', 'totalStokBuku', 'aktivitasTerbaru'));
    }
}
