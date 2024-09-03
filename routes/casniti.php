<?php

// Controller
use App\Http\Controllers\casniti\casnitiViewController;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\casniti\casnitiProsesController;
// End Controller

// Facades
use Illuminate\Support\Facades\Route;
// End Facades

Route::get('/', [casnitiViewController::class, 'index'])->name('casniti.login')->middleware('casnitilogin');
Route::get('/upload', [casnitiViewController::class, 'upload']);
Route::get('/filter', [casnitiViewController::class, 'filter']);
Route::get('/ujian', [casnitiViewController::class, 'ujian']);
Route::get('/ujian2', [casnitiViewController::class, 'ujian2']);
Route::get('/ujian3', [casnitiViewController::class, 'ujian3']);
Route::get('/history', [casnitiViewController::class, 'history']);
Route::get('/proseslogingoogle', [casnitiProsesController::class, 'redirectToGoogle'])->name('proseslogingoogle');
Route::get('/proseslogin', [casnitiProsesController::class, 'proseslogin'])->name('proseslogin');

// manggil bebas
Route::get('/dummy', [casnitiViewController::class, 'dummy']);
