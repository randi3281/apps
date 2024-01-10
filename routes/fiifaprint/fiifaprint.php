<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'fiifaprint\fiifaprintController@index');
Route::get('/homeadmin', 'fiifaprint\fiifaprintController@homeadmin');
Route::get('/daftar', 'fiifaprint\fiifaprintController@daftar');
Route::get('/vp', 'fiifaprint\fiifaprintController@vp');
Route::get('/ve', 'fiifaprint\fiifaprintController@ve');
Route::get('/lp', 'fiifaprint\fiifaprintController@lp');
Route::get('/lp2', 'fiifaprint\fiifaprintController@lp2');
Route::get('/lp3', 'fiifaprint\fiifaprintController@lp3');
Route::get('/homeclient', 'fiifaprint\fiifaprintController@homeclient');
Route::get('/pesananselesai', 'fiifaprint\fiifaprintController@pesananselesai');
Route::get('/pesananterhapus', 'fiifaprint\fiifaprintController@pesananterhapus');
Route::get('/editpesanan', 'fiifaprint\fiifaprintController@editpesanan');
Route::get('/pesananbuktiselesai', 'fiifaprint\fiifaprintController@pesananbuktiselesai');
Route::get('/buatpesanan', 'fiifaprint\fiifaprintController@buatpesanan');
Route::get('/bayar', 'fiifaprint\fiifaprintController@bayar');
Route::get('/detailpesanan', 'fiifaprint\fiifaprintController@detailpesanan');
Route::get('/profil', 'fiifaprint\fiifaprintController@profil');
