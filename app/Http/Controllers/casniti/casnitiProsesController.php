<?php

namespace App\Http\Controllers\casniti;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class casnitiProsesController extends Controller
{
    public function proseslogin(){
        return view('casniti.nonadmin.ujian1');
    }
}
