<?php

namespace App\Http\Controllers\hkkhd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class tampilController extends Controller
{
    public function index(){
        return view('hkkhdview.index');
    }
}
