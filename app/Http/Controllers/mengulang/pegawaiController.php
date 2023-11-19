<?php

namespace App\Http\Controllers\mengulang;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class pegawaiController extends Controller
{
    public function index($nama){
        return $nama;
    }
}
