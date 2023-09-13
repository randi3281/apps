<?php

namespace App\Http\Controllers\ukt;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class uktController extends Controller
{
    public function index()
    {
        return view('ukt.index');
    }
}
