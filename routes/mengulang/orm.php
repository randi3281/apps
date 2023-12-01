<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'orm\ormController@index')->name('index');
Route::get('/onetoone', 'orm\ormController@onetoone')->name('onetoone');
Route::get('/onetomany', 'orm\ormController@onetomany')->name('onetomany');
Route::get('/manytoone', 'orm\ormController@manytoone')->name('manytoone');
Route::get('/manytomany', 'orm\ormController@manytomany')->name('manytomany');