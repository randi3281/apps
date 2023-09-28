<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class timdevController extends Controller
{
    public function index()
    {
        return view('timdev.index');
    }
}
