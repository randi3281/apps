<?php

namespace App\Http\Controllers\mengulang;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class dosenController extends Controller
{
    public function index(){
        return "Halo ini adalah method index, dalam controller DosenController";
    }

    public function nama(){
        $nama = "Randi Afif";
        $matakuliah = ['Algoritma & Pemrograman', 'Kalkulus', 'Pemrograman Web'];
        $buah = ['Jeruk', 'Mangga', 'Pisang'];
        $nomor = 1;

        return view('mengulang.dosen', ['nama' => $nama, 'matkul' => $matakuliah, 'buah' => $buah, 'nomor' => $nomor]);
    }
}
