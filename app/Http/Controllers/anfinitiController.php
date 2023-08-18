<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\anfiniti_login;
class anfinitiController extends Controller
{
    public function index(){
        $mode = 1;

        return view("anfinitiView.index");
    }

    public function anfiniti(){
        return view("anfinitiView.anfiniti");
    }

    public function login(){
        $mode = 1;

        return view("anfinitiView.start", ["mode" => $mode]);
    }
    
    public function daftar(){
        $mode = 2;

        return view("anfinitiView.start", ["mode" => $mode]);
    }

    
    public function input(){
        $mode = 1;

        return view("anfinitiView.menu", ["mode" => $mode]);
    }

    public function edit(){
        $mode = 2;

        return view("anfinitiView.menu", ["mode" => $mode]);
    }

    public function trash(){
        $mode = 3;

        return view("anfinitiView.menu", ["mode" => $mode]);
    }
}
