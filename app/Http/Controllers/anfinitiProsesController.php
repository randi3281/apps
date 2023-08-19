<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
// DB::beginTransaction();

use App\Models\anfiniti_login;

class anfinitiProsesController extends Controller
{
   
    public function daftarproses(Request $request){
        session_start();
        if(isset($request->tombolDaftar)){
            $validatedData = $request->validate([
                'username' => 'required|string|max:255',
                'password' => 'required|string',
                'password2' => 'required|string',
                'captcha' => 'required|string',
            ]);

            if($validatedData['password'] == $validatedData['password2']){
                if($validatedData['captcha'] == $_SESSION['Captcha']){

                    $normalizedUsername = Str::lower($validatedData['username']);
                    if (anfiniti_login::where(DB::raw('LOWER(username)'), $normalizedUsername)->exists()) {
                        return redirect("/anfiniti/daftar/3");
                    } else {
                        $anfinitiLogin = new anfiniti_login;
                        $anfinitiLogin->username = $validatedData['username'];
                        $anfinitiLogin->password = bcrypt($validatedData['password']);
                        $anfinitiLogin->save();
                        return redirect()->route("loginAnfiniti");
                    }

                }else{
                    return redirect("/anfiniti/daftar/2");
                };                
            }else{
                return redirect("/anfiniti/daftar/1");
            };
        };

        
        if(isset($request->tombolMasuk)){
            return redirect()->route("loginAnfiniti");
        };
    }

    public function loginproses(Request $request){
        if(isset($request->tombolMasuk)){
            $validatedData = $request->validate([
                'username' => 'required|string|max:255',
                'password' => 'required|string',
            ]);

            $anfinitiLogin = anfiniti_login::where("username", $validatedData['username'])->first();
            if($anfinitiLogin){                
                if(password_verify($validatedData['password'], $anfinitiLogin->password)){
                    return redirect()->route("anfiniti");
                }else{
                    return redirect("/anfiniti/login/1");
                }
            }else{
                return redirect("/anfiniti/login/1");
            }
        };

        if(isset($request->tombolDaftar)){
            return redirect()->route("daftarAnfiniti");
        };
    }

}
