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

    // public function upload()
    // {
    //     return view('casniti.upload');
    // }

    // public function filter()
    // {
    //     return view('casniti.filter');
    // }

    // public function ujian()
    // {
    //     return view('casniti.ujian');
    // }

    // public function history()
    // {
    //     return view('casniti.history');
    // }

    public function dummy()
    {
        return view('casniti.admin.uploadsoal');
    }
}
