<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
// DB::beginTransaction();

use App\Models\anfiniti_login;
use App\Models\anfiniti_session;

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
                    // saya ingin membuat sebuah variabel yang berisi angka 10 digit tapi acak
                    $random = rand(1000000000, 9999999999);
                    // enkripsi $random dan masukkan ke database anfiniti_session yang mana ada login_id dan sesi
                    $anfinitiSession = new anfiniti_session;
                    $anfinitiSession->login_id = $anfinitiLogin->id;
                    $anfinitiSession->sesi = bcrypt($random);
                    $anfinitiSession->save();
                    // set cookie selama 360 hari
                    
                    $data = [
                        'nama_pengguna' => $request->input('nama_pengguna'),
                        'email' => $request->input('email'),
                        'tokennya' => $random
                    ];
                    
                    // Mengenkripsi data sebelum menyimpannya dalam cookie
                    $dataEncrypted = encrypt($data);
                    setcookie("anfiniti_session", $dataEncrypted, time() + (86400 * 360), "/");

                    // Membuat cookie dengan nama 'data_user' dan nilai $dataEncrypted


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
