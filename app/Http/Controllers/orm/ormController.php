<?php

namespace App\Http\Controllers\orm;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\orm\onetoone\pengguna;
use App\Models\orm\onetomany\article;
use App\Models\orm\onetomany\tag;
use App\Models\orm\manytomany\anggota;

class ormController extends Controller
{
    public function index(){
        $pengguna = pengguna::all();
        return view('orm.onetoone', ['pengguna' => $pengguna]);
    }
    
    public function onetoone(){
        return redirect()->route('orm.index');
    }

    public function onetomany(){
        $artikel = article::all();
        return view('orm.onetomany', ['artikel' => $artikel]);
    }

    public function manytoone(){
        $tag = tag::all();
        return view('orm.manytoone', ['tag' => $tag]);
    }

    public function manytomany(){
        $anggota = anggota::all();
        return view('orm.manytomany', ['anggota' => $anggota]);
    }
}
