<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PegawaiController;
use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('welcome');
});

// Buat route kabar dengan view kondisi
Route::get('/kabar', function () {
    return view('kondisi');
});

// Buat route nilai dengan view nilai
Route::get('/nilai', function () {
    return view('nilai');
});

Route::prefix('pegawai')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('pegawai.dashboard');
    // Tambahkan route lain yang diperlukan di sini
});


Route::get('/admin', [AdminController::class, 'index']);
Route::get('/pegawai', [PegawaiController::class, 'index']);

