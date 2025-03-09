<?php

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