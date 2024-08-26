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

    // public function login(Request $request)
    // {
    //     $credentials = $request->only('email', 'password');
    //     $userType = $request->input('user_type'); // Misalnya, 'member' atau 'admin'

    //     $guard = 'userbelajarmiddleware';

    // if (Auth::guard($guard)->attempt($credentials)) {
    //     // Authentication passed
    //     return redirect()->route('dashboard');
    // }

    // return back()->withErrors([
    //     'email' => 'The provided credentials do not match our records.',
    // ]);
    // }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login');
    }
}
