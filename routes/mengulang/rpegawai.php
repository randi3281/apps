<?php
use Illuminate\Support\Facades\Route;

Route::get('/', 'mengulang\rpegawaiController@index')->name('index');
Route::get('/tambah', 'mengulang\rpegawaiController@tambah')->name('tambah');
Route::post('/tambah/proses', 'mengulang\rpegawaiController@proses');
Route::get('/hapus/{id}', 'mengulang\rpegawaiController@hapus')->name('hapus');
Route::get('/edit/{id}', 'mengulang\rpegawaiController@edit')->name('edit');
Route::post('/update', 'mengulang\rpegawaiController@update');
Route::get('/history', 'mengulang\rpegawaiController@history')->name('history');
Route::get('/restore/{id}', 'mengulang\rpegawaiController@restore')->name('restore');
Route::get('/hapuspermanen/{id}', 'mengulang\rpegawaiController@hapuspermanen')->name('hapuspermanen');
Route::get('/restoresemua', 'mengulang\rpegawaiController@restoresemua')->name('restoresemua');
Route::get('/hapuspermanensemua', 'mengulang\rpegawaiController@hapuspermanensemua')->name('hapuspermanensemua');
