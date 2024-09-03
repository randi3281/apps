<?php

// Controller
use App\Http\Controllers\casniti\casnitiViewController;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\casniti\casnitiProsesController;
use Illuminate\Session\Middleware\casniti\casnitilogin;
// End Controller

// Facades
use Illuminate\Support\Facades\Route;
// End Facades

Route::get('/', [casnitiViewController::class, 'index'])->name('login')->middleware('casnitilogin');
// berikan cara lain untuk memanggil middleware selain itu
Route::middleware('casnitinonlogin')->group(function () {
    Route::get('/upload', [casnitiViewController::class, 'upload'])->name('upload');
    Route::get('/filter', [casnitiViewController::class, 'filter'])->name('filter');
    Route::get('/ujian', [casnitiViewController::class, 'ujian'])->name('ujian');
    Route::get('/ujian2', [casnitiViewController::class, 'ujian2'])->name('ujian2');
    Route::get('/ujian3', [casnitiViewController::class, 'ujian3'])->name('ujian3');
    Route::get('/history', [casnitiViewController::class, 'history'])->name('history');
});

// login ke google
Route::get('/proseslogingoogle', [casnitiProsesController::class, 'redirectToGoogle'])->name('proseslogingoogle');

// setelah login ke google, maka masuk ke sini
Route::get('/proseslogin', [casnitiProsesController::class, 'proseslogin'])->name('proseslogin');

// manggil bebas
Route::get('/dummy', [casnitiViewController::class, 'dummy']);

//block
Route::get('/{any}', [casnitiViewController::class, 'blockany'])->where('any', '.*');
