<?php

// Controller
use App\Http\Controllers\casniti\casnitiViewController;
// End Controller

// Facades
use Illuminate\Support\Facades\Route;
// End Facades

Route::get('/', [casnitiViewController::class, 'index']);
