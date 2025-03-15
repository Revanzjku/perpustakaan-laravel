<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

// Buku Route
Route::get('/buku', [BukuController::class, 'index'])->name('buku.index');
Route::get('/buku/tambah', [BukuController::class, 'create'])->name('buku.create');
Route::post('/buku/tambah/store', [BukuController::class, 'store'])->name('buku.store');
Route::get('/buku/edit/{id}', [BukuController::class, 'edit'])->name('buku.edit');
Route::put('/buku/update/{id}', [BukuController::class, 'update'])->name('buku.update');
Route::get('/buku/hapus/{id}', [BukuController::class, 'destroy'])->name('buku.destroy');
Route::get('/buku/trash', [BukuController::class, 'trash'])->name('buku.trash');
Route::get('/buku/restore/{id}', [BukuController::class, 'restore'])->name('buku.restore');
Route::delete('/buku/forceDelete/{id}', [BukuController::class, 'forceDelete'])->name('buku.forceDelete');

// Kategori Route
Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori.index');
Route::get('/kategori/tambah', [KategoriController::class, 'create'])->name('kategori.create');
Route::post('/kategori/tambah/store', [KategoriController::class, 'store'])->name('kategori.store');
Route::get('/kategori/edit/{id}', [KategoriController::class, 'edit'])->name('kategori.edit');
Route::put('/kategori/update/{id}', [KategoriController::class, 'update'])->name('kategori.update');
Route::get('/kategori/hapus/{id}', [KategoriController::class, 'destroy'])->name('kategori.destroy');
Route::get('/kategori/trash', [KategoriController::class, 'trash'])->name('kategori.trash');
Route::get('/kategori/restore/{id}', [KategoriController::class, 'restore'])->name('kategori.restore');
Route::delete('/kategori/forceDelete/{id}', [KategoriController::class, 'forceDelete'])->name('kategori.forceDelete');