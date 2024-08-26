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
}
