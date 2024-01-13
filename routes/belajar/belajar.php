<?php

use App\Http\Controllers\belajar\belajarController;
use Illuminate\Support\Facades\Route;

Route::get('/', 'belajar\belajarController@index');
Route::post('/siapa', 'belajar\belajarController@siapa');
