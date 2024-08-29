<?php

namespace App\Http\Controllers\lebakbarang;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class lebakbarangController extends Controller
{
    public function index()
    {
        return view('lebakbarangview.isi.index');
    }
}
