<?php

namespace App\Http\Middleware\casniti;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\casniti\casnitiakun as akun;

class casnitilogin
{
    protected function handle(Request $request, Closure $next): Response
    {
        // $email = $request->session()->get('email');
        // $akun = akun::where('email', $email)->first();
        // if($akun == null){
        //     return redirect()->route('casniti.login');
        // }
        // jika akun tidak sama dengan null
        // if($akun != null){
        //     return redirect()->route('casniti.ujian');
        // }
        dd('Middleware berhasil dijalankan');
        // return $next($request);
    }
}
