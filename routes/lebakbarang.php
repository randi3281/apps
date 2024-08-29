<?php

// Controller
use App\Http\Controllers\lebakbarang\lebakbarangController;
// End Controller

// Facades
use Illuminate\Support\Facades\Route;
// End Facades

Route::get('/', [lebakbarangController::class, 'index'])->name('beranda');
