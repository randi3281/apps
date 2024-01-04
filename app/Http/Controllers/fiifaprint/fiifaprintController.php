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

    public function vp()
    {
        return view('fiifaprint.vp');
    }

    public function ve()
    {
        return view('fiifaprint.ve');
    }

    public function lp()
    {
        return view('fiifaprint.lp');
    }

    public function homeclient()
    {
        return view('fiifaprint.homeadmin');
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

}
