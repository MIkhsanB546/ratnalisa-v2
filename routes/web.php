<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::get('/', [BerandaController::class, 'index'])->name('beranda');
Route::get('/tentang', [BerandaController::class, 'tentang'])->name('tentang');
Route::get('/kontak', [BerandaController::class, 'kontak'])->name('kontak');
Route::get('/layanan', [BerandaController::class, 'layanan'])->name('layanan');
Route::get('/detail-layanan', [BerandaController::class, 'detail_layanan'])->name('detail_layanan');
Route::get('/privacy', [BerandaController::class, 'privacy'])->name('privacy');
Route::get('/terms', [BerandaController::class, 'terms'])->name('terms');
