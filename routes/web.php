<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PerpustakaanController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/perpustakaan', [PerpustakaanController::class, 'index'])->name('buku.index');
Route::get('/perpustakaan/tambah', [PerpustakaanController::class, 'create'])->name('buku.create');
Route::post('/perpustakaan/tambah/store', [PerpustakaanController::class, 'store'])->name('buku.store');
Route::get('/perpustakaan/edit/{id}', [PerpustakaanController::class, 'edit'])->name('buku.edit');
Route::put('/perpustakaan/update/{id}', [PerpustakaanController::class, 'update'])->name('buku.update');
Route::get('/perpustakaan/hapus/{id}', [PerpustakaanController::class, 'destroy'])->name('buku.destroy');

// Kategori Route
Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori.index');
Route::get('/kategori/tambah', [KategoriController::class, 'create'])->name('kategori.create');
Route::post('/kategori/tambah/store', [KategoriController::class, 'store'])->name('kategori.store');
Route::get('/kategori/edit/{id}', [KategoriController::class, 'edit'])->name('kategori.edit');
Route::put('/kategori/update/{id}', [KategoriController::class, 'update'])->name('kategori.update');
Route::get('/kategori/hapus/{id}', [KategoriController::class, 'destroy'])->name('kategori.destroy');