<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', 'orm\ormController@index')->name('index');
Route::get('/', 'belajar\belajarLoginController@index')->name('belajarlogin');

Route::get('/auth/google', 'belajar\belajarLoginController@redirectToGoogle')->name('redirect.google');
Route::get('/auth/google/callback', 'belajar\belajarLoginController@handleGoogleCallback')->name('callback.google');