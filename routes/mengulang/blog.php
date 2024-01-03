<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function (){
    return view('mengulang.blogg.home');
})->name('index');

Route::get('/home', 'mengulang\bloggController@home');
Route::get('/tentang', 'mengulang\bloggController@tentang');
Route::get('/kontak', 'mengulang\bloggController@kontak');
