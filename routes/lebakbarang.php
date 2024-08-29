<?php

// Controller
use App\Http\Controllers\lebakbarang\lebakbarangController;
// End Controller

// Facades
use Illuminate\Support\Facades\Route;
// End Facades

Route::get('/', [lebakbarangController::class, 'index'])->name('beranda');

Route::get('/sejarah-desa', [lebakbarangController::class, 'sejarahDesa'])->name('sejarah-desa');
Route::get('/visi-misi', [lebakbarangController::class, 'visiMisi'])->name('visi-misi');
Route::get('/demografi', [lebakbarangController::class, 'demografi'])->name('demografi');
Route::get('/keadaan-sosial', [lebakbarangController::class, 'keadaanSosial'])->name('keadaan-sosial');
Route::get('/keadaan-ekonomi', [lebakbarangController::class, 'keadaanEkonomi'])->name('keadaan-ekonomi');
Route::get('/lembaga-pemerintahan', [lebakbarangController::class, 'lembagaPemerintahan'])->name('lembaga-pemerintahan');
Route::get('/lembaga-kemasyarakatan', [lebakbarangController::class, 'lembagaKemasyarakatan'])->name('lembaga-kemasyarakatan');
Route::get('/pembagian-wilayah', [lebakbarangController::class, 'pembagianWilayah'])->name('pembagian-wilayah');
Route::get('/struktur-organisasi', [lebakbarangController::class, 'strukturOrganisasi'])->name('struktur-organisasi');
Route::get('/pengaduan', [lebakbarangController::class, 'pengaduan'])->name('pengaduan');
