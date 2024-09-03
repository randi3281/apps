<?php

namespace App\Http\Controllers\belajar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class belajarMiddleWareController extends Controller
{
    public function showLoginForm()
    {
        return view('belajar.middlewarelogin');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login');
    }
}
