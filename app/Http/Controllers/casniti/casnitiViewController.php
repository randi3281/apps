<?php

namespace App\Http\Controllers\casniti;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
        return view('casniti.admin.filter');
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
        return view('casniti.nonadmin.history');
    }

    public function dummy()
    {
        return view('casniti.nonadmin.ujian1');
    }
}
