<?php

// Controller
use App\Http\Controllers\casniti\casnitiViewController;
// End Controller

// Facades
use Illuminate\Support\Facades\Route;
// End Facades

Route::get('/', [casnitiViewController::class, 'index']);
Route::get('/upload', [casnitiViewController::class, 'upload']);
Route::get('/filter', [casnitiViewController::class, 'filter']);
Route::get('/ujian', [casnitiViewController::class, 'ujian']);
Route::get('/history', [casnitiViewController::class, 'history']);

// manggil bebas
Route::get('/dummy', [casnitiViewController::class, 'dummy']);
