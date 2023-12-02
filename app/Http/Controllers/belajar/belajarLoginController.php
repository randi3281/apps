<?php

namespace App\Http\Controllers\belajar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use Laravel\Socialite\Facades\Socialite;

class belajarLoginController extends Controller
{
    public function index()
    {
        return view('belajar.belajarlogin');
    }

    // public function redirectToGoogle()
    // {
    //     return Socialite::driver('google')->redirect();
    // }

    // public function handleGoogleCallback(Request $request)
    // {
    //     $user = Socialite::driver('google')->user();
    //     dd($user);
    // }
}
