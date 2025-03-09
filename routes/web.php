<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PerpustakaanController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/perpustakaan', [PerpustakaanController::class, 'index']);
Route::get('/perpustakaan/tambah', [PerpustakaanController::class, 'create']);
Route::post('/perpustakaan/tambah/store', [PerpustakaanController::class, 'store']);
Route::get('/perpustakaan/edit/{id}', [PerpustakaanController::class, 'edit']);
Route::put('/perpustakaan/update/{id}', [PerpustakaanController::class, 'update']);
Route::get('/perpustakaan/hapus/{id}', [PerpustakaanController::class, 'destroy']);

// Kategori Route
Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/kategori/tambah', [KategoriController::class, 'create']);
Route::post('/kategori/tambah/store', [KategoriController::class, 'store']);
Route::get('/kategori/edit/{id}', [KategoriController::class, 'edit']);
Route::put('/kategori/update/{id}', [KategoriController::class, 'update']);
Route::get('/kategori/hapus/{id}', [KategoriController::class, 'destroy']);