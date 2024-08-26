<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TesMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(date('d') != 5){
            return response('Maaf, Anda tidak bisa mengakses halaman ini sebelum jam 20:00');
        }else{
            dd('Middleware berhasil dijalankan');
            return $next($request);
        }
    }
}
