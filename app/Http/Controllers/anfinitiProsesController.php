<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
// DB::beginTransaction();

use App\Models\anfiniti_login;
use App\Models\anfiniti_session;
use App\Models\anfiniti_dataweb;

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
        session_start();
        if(isset($request->tombolMasuk)){
            $validatedData = $request->validate([
                'username' => 'required|string|max:255',
                'password' => 'required|string',
                'captcha' => 'required|string'
            ]);

            $anfinitiLogin = anfiniti_login::where("username", $validatedData['username'])->first();
            $idnya = $anfinitiLogin->id;
            if($anfinitiLogin){
                if($validatedData['captcha'] == $_SESSION['Captcha']){                
                    if(password_verify($validatedData['password'], $anfinitiLogin->password)){
                        // saya ingin membuat sebuah variabel yang berisi angka 100 digit tapi acak
                        $random = Str::random(100);
                        // enkripsi $random dan masukkan ke database anfiniti_session yang mana ada login_id dan sesi
                        $anfinitiSession = new anfiniti_session;
                        $anfinitiSession->login_id = $anfinitiLogin->id;
                        $anfinitiSession->sesi = $random;
                        $anfinitiSession->username = bcrypt($validatedData['username']);
                        $anfinitiSession->save();
                        // set cookie selama 360 hari
                        
                        $data = [
                            'tokennya' => $random,
                            'username' => $validatedData['username'],
                            'login_id' => $idnya
                        ];
                        
                        // Mengenkripsi data sebelum menyimpannya dalam cookie
                        $dataEncrypted = encrypt($data);
                        $cookie = cookie("anfiniti_sessionnya", $dataEncrypted, time() + (86400 * 360), "/");

                        // Mengirimkan cookie ke browser
                        return redirect()->route("anfiniti")->cookie($cookie);
                    }else{
                        return redirect("/anfiniti/login/1");
                    };
                }else{
                    return redirect("/anfiniti/login/2");
                };
            }else{
                return redirect("/anfiniti/login/3");
            };
        };

        if(isset($request->tombolDaftar)){
            return redirect()->route("daftarAnfiniti");
        };
    }

    public function keluar(){
        // menghapus cookie dan redirect ke login
        $cookie = cookie()->forget('anfiniti_sessionnya');
        return redirect()->route("loginAnfiniti")->cookie($cookie);
    }

    public function inputProses(Request $request){
        if(isset($request->tombolInput)){
            $validatedData = $request->validate([
                'namaWeb' => 'required|string|max:255',
                'link' => 'required|string|max:255',
                'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            ]);

            $logo = $validatedData['gambar'];
            $namaGambar = time().'.'.$logo->extension();
            $logo->move(public_path('anfinitiPublic/images'), $namaGambar);
            
            $dataEncryptednya = request()->cookie('anfiniti_sessionnya');
            $data = decrypt($dataEncryptednya);
            
            $dataUsername = $data['username'];
            $anfinitiLogin = anfiniti_login::where("username", $dataUsername)->first();

            // jika ada kata https:// di depan link maka hapus
            $validatedData['link'] = str_replace("https://", "", $validatedData['link']);

            $anfinitiDataweb = new anfiniti_dataweb;
            $anfinitiDataweb->login_id = $anfinitiLogin->id;
            $anfinitiDataweb->nama_web = $validatedData['namaWeb'];
            $anfinitiDataweb->link = $validatedData['link'];
            $anfinitiDataweb->gambar = $namaGambar;
            $anfinitiDataweb->save();
            
            return redirect()->route("anfiniti");
        };

        if(isset($request->tombolBatal)){
            return redirect()->route("anfiniti");
        };
    }

    public function lupasandicekproses(Request $request){
        if(isset($request->tombolMasuk)){
            $validatedData = $request->validate([
                'kodeUnik' => 'required|string|max:255',
                'captcha' => 'required|string'
            ]);

                session_start();
                if($validatedData['captcha'] == $_SESSION['Captcha']){
                    if($validatedData['kodeUnik'] == "Randi_328"){
                        session(['autentikasi' => 'terautentikasi']);
                        return redirect()->route("lupaSandiAnfiniti");
                    }else{
                        return redirect("/anfiniti/lupasandi/1");
                    };
                }else{
                    return redirect("/anfiniti/lupasandi/2");
                };
        };

        if(isset($request->tombolLogin)){
            return redirect()->route("loginAnfiniti");
        };
    }

    public function lupasandiproses(Request $request){
        if(isset($request->tombolMasuk)){
            $validatedData = $request->validate([
                'username' => 'required|string|max:255',
                'password' => 'required|string',
                'captcha' => 'required|string'
            ]);
            session_start();

            if($validatedData['captcha'] == $_SESSION['Captcha']){
                $anfinitiLogin = anfiniti_login::where("username", $validatedData['username'])->first();
                if($anfinitiLogin){
                    $anfinitiLogin->password = bcrypt($validatedData['password']);
                    $anfinitiLogin->save();
                    session()->forget('autentikasi');
                    return redirect()->route("loginAnfiniti");
                }else{
                    return redirect("/anfiniti/lupasandi/1");
                };
            }else{
                return redirect("/anfiniti/lupasandi/2");
            };
        };

        if(isset($request->tombolKembali)){
            session()->forget('autentikasi');
            return redirect()->route("loginAnfiniti");
        };
    }
}
