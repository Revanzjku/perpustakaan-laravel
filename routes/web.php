<?php

use App\Http\Controllers\PerpustakaanController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/perpustakaan', [PerpustakaanController::class, 'index']);
Route::get('/perpustakaan/tambah', [PerpustakaanController::class, 'create']);
Route::post('/perpustakaan/tambah/store', [PerpustakaanController::class, 'store']);