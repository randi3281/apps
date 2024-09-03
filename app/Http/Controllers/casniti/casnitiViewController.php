<?php

namespace App\Http\Controllers\casniti;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\casniti\casnitisoal as soal;
use App\Models\casniti\casnitisubkategorisoal as subkategorisoal;
use App\Models\casniti\casnitikategorisoal as kategorisoal;
use App\Models\casniti\casnitiakun as akun;
use App\Models\casniti\casnitihistory as history;

class casnitiViewController extends Controller
{
    public function index()
    {
        return view('casniti.login');
    }

    public function upload()
    {
        return view('casniti.admin.uploadsoal');
    }

    public function filter()
    {
        $kategorisoal = kategorisoal::all();
        return view('casniti.admin.filter', compact('kategorisoal'));
    }

    public function ujian()
    {
        return view('casniti.nonadmin.ujian1');
    }

    public function ujian2()
    {
        return view('casniti.nonadmin.ujian2');
    }

    public function ujian3()
    {
        return view('casniti.nonadmin.ujian3');
    }

    public function history()
    {
        $akun = akun::all();
        return view('casniti.nonadmin.history', compact('akun'));
    }

    public function dummy()
    {
        return view('casniti.nonadmin.ujian1');
    }

    public function blockany()
    {
        return redirect()->route('casniti.login');
    }
}
