<?php

namespace App\Http\Middleware\casniti;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\casniti\casnitiakun as akun;

class casnitilogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $email = $request->session()->get('email');
        $akun = akun::where('email', $email)->first();
        if($akun == null){
            return redirect()->route('casniti.login');
        }
        return $next($request);
    }
}
