<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\anfinitiProsesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Anfiniti
Route::get('/', 'anfinitiController@index')->name('index');
Route::get('anfiniti', 'anfinitiController@anfiniti')->name('anfiniti');
Route::get('anfiniti/login', 'anfinitiController@login')->name('loginAnfiniti');
Route::get('anfiniti/daftar', 'anfinitiController@daftar')->name('daftarAnfiniti');
Route::get('anfiniti/daftardenganemail', 'anfinitiController@daftardenganemail')->name('daftardenganemal');
Route::get('anfiniti/input', 'anfinitiController@input')->name('inputAnfiniti');
Route::get('anfiniti/edit/{id}', 'anfinitiController@edit')->name('editAnfiniti');
Route::get('anfiniti/trash', 'anfinitiController@trash')->name('trashAnfiniti');
Route::get('anfiniti/lupasandi', 'anfinitiController@lupasandi')->name('lupaSandiAnfiniti');
Route::get('anfiniti/hapus/{id}', 'anfinitiController@hapus')->name('hapusAnfiniti');
Route::get('anfiniti/transaksi' , 'anfinitiTransaksiController@index')->name('transaksiAnfiniti');
Route::get('anfiniti/tampiltransaksi' , 'anfinitiController@transaction')->name('tampilTransaksiAnfiniti');
Route::get('anfiniti/transactionsuccess' , 'anfinitiTransaksiController@transactionSuccess')->name('transactionSuccess');
// login ke google
Route::get('anfiniti/redirectgoogle', [anfinitiProsesController::class, 'redirectgoogle'])->name('redirectgoogle');

// setelah login ke google, maka masuk ke sini
Route::get('anfiniti/setelahlogingoogle', [anfinitiProsesController::class, 'setelahlogingoogle'])->name('setelahlogingoogle');


Route::get('anfiniti/keluar', 'anfinitiProsesController@keluar')->name('keluarAnfiniti');
Route::post('anfiniti/daftarproses', 'anfinitiProsesController@daftarproses');
Route::post('anfiniti/loginproses', 'anfinitiProsesController@loginproses');
Route::post('anfiniti/inputproses', 'anfinitiProsesController@inputproses');
Route::post('anfiniti/editproses', 'anfinitiProsesController@editproses');
Route::post('anfiniti/lupasandicekproses', 'anfinitiProsesController@lupasandicekproses');
Route::post('anfiniti/lupasandiproses', 'anfinitiProsesController@lupasandiproses');
Route::post('anfiniti/trashproses', 'anfinitiProsesController@trashproses');

Route::get('anfiniti/daftar/{ket}', 'anfinitiLemparController@daftarKet');
Route::get('anfiniti/login/{ket}', 'anfinitiLemparController@loginKet');
Route::get('anfiniti/lupasandi/{ket}', 'anfinitiLemparController@lupaSandiKet');

// End Anfiniti

// Belajar
Route::get('/semangat', 'SemangatController@index');
Route::get('/belajar4', 'SemangatController@belajar4');
Route::get('/belajar42', 'SemangatController@belajar42');
Route::get('/belajar5/{nama}', 'SemangatController@belajar5');
Route::get('/inputan', 'SemangatController@inputan');
Route::post('/inputan/hasil', 'SemangatController@hasil');
Route::get('/daftarpegawai', 'SemangatController@daftar');
// End Belajar

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Siswa
Route::get('siswa', 'SiswaController@index');
Route::get('siswa/hapus/{nim}', 'SiswaController@hapus');
Route::get('siswa/update/{nim}', 'SiswaController@update');
Route::post('siswa/input', 'SiswaController@input');
Route::post('siswa/update/updatingdata', 'SiswaController@updating');
// End Siswa

// Anficititate
Route::get('anficititate', 'ACController@index');
Route::get('anficititate/back', 'ACController@back');
Route::get('anficititate/ket/{ucapan}', 'ACController@ucapan');
Route::get('anficititate/daftar', 'ACController@daftar');
Route::get('anficititate/login', 'ACController@login');
Route::post('anficititate/login', 'ACController@login');
Route::post('anficititate/daftarakun', 'ACController@daftarakun');
Route::get('anficititate/lupa_sandi', 'ACController@lupa_sandi');
Route::get('anficititate/lupa_sandi/{error}', 'ACController@lupa_sandi_error');
Route::post('anficititate/lupa_kata_sandi', 'ACController@lupa_kata_sandi');
Route::get('anficititate/lupa_pin', 'ACController@lupa_pin');
Route::get('anficititate/lupa_pin/{error}', 'ACController@lupa_pin_error');
Route::post('anficititate/lupa_pin_nya', 'ACController@lupa_pin_nya');
Route::post('anficititate/slc_repo', 'ACController@slc_repop');
Route::get('anficititate/slc_repo', 'ACController@slc_repo');
Route::get('anficititate/slc_repo_err/{error}', 'ACController@slc_repo_error');
Route::get('anficititate/del_repo', 'ACController@del_repo');
Route::get('anficititate/upd_repo', 'ACController@upd_repo');
Route::get('anficititate/new_repo_home', 'ACController@new_repo_home');
Route::get('anficititate/new_repo_home/{ket}', 'ACController@new_repo_home_ket');
Route::post('anficititate/new_repo', 'ACController@new_repo');
Route::post('anficititate/delete_repo', 'ACController@delete_repo');
Route::get('anficititate/del_repo/{ket}', 'ACController@del_repo_ket');
Route::post('anficititate/upd_repo', 'ACController@update_repo');
Route::get('anficititate/upd_repo/{ket}', 'ACController@upd_repo_ket');
Route::post('anficititate/home', 'ACController@home');
Route::get('anficititate/repo_core', 'FootnoteController@index');
Route::get('anficititate/repo_core/{jumlahpenulis}', 'FootnoteController@indexpenulis');
Route::get('anficititate/core_repo_edit/{ft}', 'FootnoteController@core_repo_edit');
Route::get('anficititate/core_repo_hapus/{ft}', 'FootnoteController@core_repo_hapus');
Route::post('anficititate/kelola', 'FootnoteController@kelola');
// End Anficititate

// Belajar Mulai dari eps 20 malasngoding.com
Route::get('eloquent', 'Belajar20Controller@eloquent');
Route::get('belajareloquent', 'Belajar20Controller@belajareloquent');
Route::get('kepegawaian', 'Belajar20Controller@kepegawaian');
Route::get('kepegawaian/tambah', 'Belajar20Controller@kepegawaianTambah');
Route::post('kepegawaian/store', 'Belajar20Controller@Store');
// End Belajar Mulai dari eps 20 malasngoding.com

Route::get('kota', 'kotaController@index');

// Perpustakaan SDN 1 Planjan
Route::get('perpussd1planjan', 'perpusSd1PlanjanController@index');
// End Perpustakaan SDN 1 Planjan
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// HMI KOM KHD
// Route::get('hkkhd', 'hkkhd\tampilController@index')->name('index');
// End HMI KOM KHD

// UKT
Route::get('ukt/sistem', 'ukt\uktController@index')->name('sistem');

Route::post('ukt/sistem/loginproses', 'ukt\uktProsesController@login')->name('loginProses');
// End UKT

Route::get('timdev', 'timdevController@index')->name('indexdev');

Route::get('belajarmiddleware', 'belajar\middlewareController@index')->name('belajarmiddleware');
Route::get('outbelajarmiddleware', 'belajar\middlewareController@indexout')->name('outbelajarmiddleware');
Route::post('belajarmiddleware/proseslogin', 'belajar\middlewareController@loginproses');
