<?php

namespace App\Http\Controllers\fiifaprint;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class fiifaprintController extends Controller
{
    public function index()
    {
        return view('fiifaprint.index');
    }

    public function homeadmin()
    {
        return view('fiifaprint.homeadmin');
    }

    public function daftar()
    {
        return view('fiifaprint.daftar');
    }


    public function ve()
    {
        return view('fiifaprint.verifikasiemail');
    }

    public function lp()
    {
        return view('fiifaprint.lupapassword');
    }

    public function lp2()
    {
        return view('fiifaprint.lupapassword2');
    }

    public function lp3()
    {
        return view('fiifaprint.lupapassword3');
    }

    public function homeclient()
    {
        return view('fiifaprint.homeclient');
    }

    public function pesananselesai()
    {
        return view('fiifaprint.pesananselesai');
    }

    public function pesananterhapus()
    {
        return view('fiifaprint.pesananterhapus');
    }

    public function editpesanan()
    {
        return view('fiifaprint.editpesanan');
    }

    public function pesananbuktiselesai()
    {
        return view('fiifaprint.pesananbuktiselesai');
    }

    public function buatpesanan()
    {
        return view('fiifaprint.buatpesanan');
    }

    public function bayar()
    {
        return view('fiifaprint.bayar');
    }
}
