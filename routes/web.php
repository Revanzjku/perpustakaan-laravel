<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/perpustakaan', [BukuController::class, 'index'])->name('buku.index');
Route::get('/perpustakaan/tambah', [BukuController::class, 'create'])->name('buku.create');
Route::post('/perpustakaan/tambah/store', [BukuController::class, 'store'])->name('buku.store');
Route::get('/perpustakaan/edit/{id}', [BukuController::class, 'edit'])->name('buku.edit');
Route::put('/perpustakaan/update/{id}', [BukuController::class, 'update'])->name('buku.update');
Route::get('/perpustakaan/hapus/{id}', [BukuController::class, 'destroy'])->name('buku.destroy');

// Kategori Route
Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori.index');
Route::get('/kategori/tambah', [KategoriController::class, 'create'])->name('kategori.create');
Route::post('/kategori/tambah/store', [KategoriController::class, 'store'])->name('kategori.store');
Route::get('/kategori/edit/{id}', [KategoriController::class, 'edit'])->name('kategori.edit');
Route::put('/kategori/update/{id}', [KategoriController::class, 'update'])->name('kategori.update');
Route::get('/kategori/hapus/{id}', [KategoriController::class, 'destroy'])->name('kategori.destroy');