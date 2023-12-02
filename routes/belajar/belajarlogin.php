<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\Belajar\BelajarLoginController::class, 'index'])->name('belajarlogin');

Route::get('/auth/google', [App\Http\Controllers\Belajar\BelajarLoginController::class, 'redirectToGoogle'])->name('redirect.google');
Route::get('/auth/google/callback', [App\Http\Controllers\Belajar\BelajarLoginController::class, 'handleGoogleCallback'])->name('callback.google');