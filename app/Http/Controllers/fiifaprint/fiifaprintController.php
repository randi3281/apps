<?php

namespace App\Http\Controllers\fiifaprint;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class fiifaprintController extends Controller
{
    public function index()
    {
        return view('fiifaprint.index');
    }
}
