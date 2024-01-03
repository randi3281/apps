<?php

namespace App\Http\Controllers\mengulang;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function new(){
        return view('mengulang.new');
    }
}
