<?php

namespace App\Http\Controllers\mengulang;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class bloggController extends Controller
{
    public function home(){
        return redirect()->route('blogg.index');
    }

    public function tentang(){
        return view('mengulang.blogg.tentang');
    }

    public function kontak(){
        return view('mengulang.blogg.kontak');
    }
}
