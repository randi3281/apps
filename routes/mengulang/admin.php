<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('mengulang.admin');
});

Route::get('/new', 'mengulang\adminController@new');
Route::get('dosen', 'mengulang\dosenController@index');
Route::get('dosen2', 'mengulang\dosenController@nama');
Route::get('/pegawai/{nama}', 'mengulang\pegawaiController@index');
Route::get('/formulir', 'mengulang\pegawaiController@formulir');
Route::post('/formulir/proses', 'mengulang\pegawaiController@proses');
Route::get('/blog', 'mengulang\blogController@home');
Route::get('/blog/tentang', 'mengulang\blogController@tentang');
Route::get('/blog/kontak', 'mengulang\blogController@kontak');
Route::get('/blog/tempat', 'mengulang\blogController@tempat');
?>
