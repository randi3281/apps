<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('mengulang.admin');
});

Route::get('/new', 'mengulang\adminController@new');
Route::get('dosen', 'mengulang\dosenController@index');
Route::get('dosen2', 'mengulang\dosenController@nama');
Route::get('/pegawai/{nama}', 'mengulang\pegawaiController@index');
Route::get('/formulir', 'PegawaiController@formulir');
?>
