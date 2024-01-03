<?php

namespace App\Http\Controllers\mengulang;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class blogController extends Controller
{
    public function home(){
        return view('mengulang.blog.home');
    }

    public function tentang(){
        return view('mengulang.blog.tentang');
    }

    public function kontak(){
        return view('mengulang.blog.kontak');
    }

    public function tempat(){
        return view('mengulang.blog.tempat');
    }
}
