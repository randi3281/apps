<?php

namespace App\Http\Controllers\casniti;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class casnitiProsesController extends Controller
{
    public function redirectToGoogle(){
        return Socialite::driver('google')->redirect();
    }
    public function proseslogin(){
        return view('casniti.nonadmin.ujian1');
    }
}
