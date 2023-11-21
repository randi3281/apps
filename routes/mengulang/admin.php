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
Route::get('/pegawai2', 'mengulang\pegawai2Controller@index')->name('pegawai2index');
Route::get('/pegawai2/tambah', 'mengulang\pegawai2Controller@tambah')->name('pegawai2tambah');
Route::post('/pegawai2/tambahproses', 'mengulang\pegawai2Controller@tambahproses');
Route::get('/pegawai2/edit/{id}', 'mengulang\pegawai2Controller@edit');
Route::post('/pegawai2/edit/editproses', 'mengulang\pegawai2Controller@editproses');
Route::get('/pegawai2/hapus/{id}', 'mengulang\pegawai2Controller@hapusproses');
Route::get('/pegawai2/cari', 'mengulang\pegawai2Controller@cari');
Route::get('/validation', 'mengulang\validationController@index');
Route::post('/validation/proses', 'mengulang\validationController@proses');
?>
