<?php

use App\Http\Controllers\belajar\belajarController;
use App\Http\Controllers\belajar\belajarMiddlewareController;
use App\Http\Controllers\belajar\TesMiddlewareController;
use Illuminate\Support\Facades\Route;

// Ntahlah
Route::get('/', 'belajar\belajarController@index');
Route::post('/siapa', 'belajar\belajarController@siapa');
// End Ntahlah

// --- Belajar Middleware ---

// Learn 1
// Rute untuk login
Route::get('/middleware/login', [belajarMiddleWareController::class, 'showLoginForm'])->name('middleware.login');
Route::post('/middleware/login', [belajarMiddleWareController::class, 'login'])->name('middleware.loginpost');

// Rute yang bisa diakses oleh semua user yang sudah login
Route::middleware('auth')->group(function () {

    // Rute untuk dashboard mahasiswa
    Route::middleware('role:mahasiswa')->group(function () {
        Route::get('/middleware/mahasiswa', function () {
            return 'Selamat datang, Mahasiswa!';
        })->name('middleware.mahasiswa.dashboard');
    });

    // Rute untuk dashboard admin
    Route::middleware('role:admin')->group(function () {
        Route::get('/middleware/admin', function () {
            return 'Selamat datang, Admin!';
        })->name('middleware.admin.dashboard');
    });
});

// Rute logout
Route::post('/middleware/logout', [belajarMiddleWareController::class, 'logout'])->name('middleware.logout');
// End Learn 1

// Learn 2
Route::prefix('tesmiddleware')->middleware('tesmiddleware')->group(function () {
    Route::get('/about', [TesMiddlewareController::class, 'about'])->name('tesmiddleware.about');
    Route::get('/product', [TesMiddlewareController::class, 'product'])->name('tesmiddleware.product');
    Route::get('/cart', [TesMiddlewareController::class, 'cart'])->name('tesmiddleware.cart');
    Route::get('/order', [TesMiddlewareController::class, 'order'])->name('tesmiddleware.order');
});
// End Learn 2

// --- End Belajar Middleware ---


