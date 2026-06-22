<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\Admin\PetugasController;
use App\Http\Controllers\Admin\PasienController;
use App\Http\Controllers\Admin\KategoriLayananController;
use App\Http\Controllers\Admin\LayananController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\DokterController;
use App\Http\Controllers\Admin\PendaftaranController;
use App\Http\Controllers\Admin\DetailPendaftaranController;
use App\Http\Controllers\Admin\PembayaranController;

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::controller(BerandaController::class)->group(function () {
    Route::get('/', 'index')->name('beranda');
    Route::get('/tentang', 'tentang')->name('tentang');
    Route::get('/kontak', 'kontak')->name('kontak');
    Route::get('/layanan', 'layanan')->name('layanan');
    Route::get('/detail-layanan', 'detail_layanan')->name('detail_layanan');
    Route::get('/privacy', 'privacy')->name('privacy');
    Route::get('/terms', 'terms')->name('terms');
});

// Admin routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [LoginController::class, 'loginAdmin'])
        ->name('login');

    Route::post('/login', [LoginController::class, 'authenticateAdmin'])
        ->name('login');

    Route::post('/logout', [LoginController::class, 'logoutAdmin'])
        ->name('logout');

    Route::middleware(['petugas.auth'])->group(function () {
        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        })->name('dashboard');

        Route::resource('petugas', PetugasController::class);
        Route::resource('pasien', PasienController::class);
        Route::resource('kategori-layanan', KategoriLayananController::class);
        Route::resource('layanan', LayananController::class);
        Route::resource('dokter', DokterController::class);
        Route::resource('pembayaran', PembayaranController::class);

        // Pendaftaran
        Route::resource('pendaftaran', PendaftaranController::class);

        // Nota PDF
        Route::get(
            'pendaftaran/{pendaftaran}/nota',
            [PendaftaranController::class, 'downloadNotaPdf']
        )->name('pendaftaran.nota.download');

        Route::get(
            'pendaftaran/nota/export',
            [PendaftaranController::class, 'exportFilteredNotasPdf']
        )->name('pendaftaran.nota.export');

        // Detail Pendaftaran
        Route::get(
            'pendaftaran/{pendaftaran}/detail',
            [DetailPendaftaranController::class, 'index']
        )->name('detail-pendaftaran.index');

        Route::get(
            'pendaftaran/{pendaftaran}/detail/create',
            [DetailPendaftaranController::class, 'create']
        )->name('detail-pendaftaran.create');

        Route::post(
            'pendaftaran/{pendaftaran}/detail',
            [DetailPendaftaranController::class, 'store']
        )->name('detail-pendaftaran.store');

        Route::delete(
            'detail-pendaftaran/{detailPendaftaran}',
            [DetailPendaftaranController::class, 'destroy']
        )->name('detail-pendaftaran.destroy');
    });
});
