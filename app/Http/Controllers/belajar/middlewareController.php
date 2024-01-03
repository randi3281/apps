<?php

namespace App\Http\Controllers\belajar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class middlewareController extends Controller
{
    public function index(){
        return view('belajar.middleware');
    }

    public function loginproses(Request $request){
        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard');
        }

        return back()->with('error', 'Username atau Password salah');
    }

    public function outmiddleware(){
        return view('belajar.outmiddleware');
    }
}
