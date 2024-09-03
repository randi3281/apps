<?php

namespace App\Http\Controllers\casniti;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\casniti\casnitiakun as akun;
use App\Models\casniti\casnitihistory as history;
use App\Models\casniti\casnitikategorisoal as kategorisoal;
use App\Models\casniti\casnitisubkategorisoal as subkategorisoal;
use App\Models\casniti\casnitisoal as soal;

class casnitiProsesController extends Controller
{
    public function redirectToGoogle(){
        return Socialite::driver('google')
        ->with(['prompt' => 'select_account'])
        ->redirect();
    }
    public function proseslogin(){
        $user = Socialite::driver('google')->user();
        // masukkan data ke casniti akun nama dan emailnya tanpa mengecek
        // cek dulu apakah email sudah ada di database
        if(akun::where('email', $user->email)->count() > 0){
            // jika sudah ada, maka langsung masuk ke ujian
            session(['email' => $user->email]);
            return redirect()->route('casniti.ujian');
        }else{
            // jika belum ada, maka masukkan data ke database
            $akun = new akun;
            $akun->nama = $user->name;
            $akun->email = $user->email;
            $akun->save();
            // masukkan data ke casniti session
            session(['email' => $user->email]);
            return redirect()->route('casniti.ujian');
        }
    }
}
