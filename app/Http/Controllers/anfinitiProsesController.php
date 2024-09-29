<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
use Laravel\Socialite\Facades\Socialite;
use Google\Client as GoogleClient;
// DB::beginTransaction();

use App\Models\anfiniti_login;
use App\Models\anfiniti_session;
use App\Models\anfiniti_dataweb;
use App\Models\anfiniti_transaction;

class anfinitiProsesController extends Controller
{

    public function daftarproses(Request $request){
        session_start();
        if(isset($request->tombolDaftar)){
            $validatedData = $request->validate([
                'username' => 'required|string|max:255',
                'password' => 'required|string',
                'password2' => 'required|string',
                'captcha' => 'required|string'
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
                        $anfinitiLogin->posisi = "common";
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
            // cek apakah ada id

            if (isset($anfinitiLogin->id)) {
                $idnya = $anfinitiLogin->id;
            } else {
                route("loginAnfiniti");
            }
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
            // cek juga apakah user comoon data dataweb sama dengan 5
            $dataEncryptednya = request()->cookie('anfiniti_sessionnya');
            $data = decrypt($dataEncryptednya);
            $login_id = $data['login_id'];

            $anfinitiDataweb = anfiniti_dataweb::where("login_id", $login_id)->get();

            $posisi = anfiniti_login::where("id", $login_id)->first();

            if($posisi->posisi == "common" && $anfinitiDataweb->count() == 5){
                return redirect()->route("anfiniti");
            }else{
                $validatedData = $request->validate([
                    'namaWeb' => 'required|string|max:255',
                    'link' => 'required|string|max:255',
                    'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:64'
                ]);

                $logo = $validatedData['gambar'];
                $namaGambar = time().'.'.$logo->extension();
                $logo->move(public_path('../../cdn/anfiniti/images/'), $namaGambar);
                // $logo->move(public_path('anfinitiPublic/images'), $namaGambar);

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
            }
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

    public function trashProses(Request $request){
        // ambil data dari cookie dan deskripsikan
        $dataEncryptednya = request()->cookie('anfiniti_sessionnya');
        $data = decrypt($dataEncryptednya);
        $login_id = $data['login_id'];

        if(isset($request->tombolKembalikan)){
            anfiniti_dataweb::where("login_id", $login_id)->where("id", $request->idData)->restore();
            return redirect()->route("trashAnfiniti");
        };

        if(isset($request->tombolKembalikanSemua)){
            // restore semua yang mempunyai login_id yang sama dengan login_id yang sedang login
            anfiniti_dataweb::where("login_id", $login_id)->restore();
            return redirect()->route("trashAnfiniti");
        };

        if(isset($request->tombolHapusSelamanya)){
            // hapus selamanya yang mempunyai login_id yang sama dengan login_id yang sedang login dan idnya dalam onlytrashed
            $anfinitiDataweb = anfiniti_dataweb::onlyTrashed()->where("login_id", $login_id)->where("id", $request->idData)->first();
            $namaGambar = $anfinitiDataweb->gambar;
            // unlink(public_path('../../cdn/anfiniti/images/'.$namaGambar));
            anfiniti_dataweb::onlyTrashed()->where("login_id", $login_id)->where("id", $request->idData)->forceDelete();
            // hapus juga file gambar yang ada di folder public

            return redirect()->route("trashAnfiniti");
        };

        if(isset($request->tombolHapusSemuaSelamanya)){
            // hapus selamanya yang mempunyai login_id yang sama dengan login_id yang sedang login dan idnya dalam onlytrashed
            $anfinitiDataweb = anfiniti_dataweb::onlyTrashed()->where("login_id", $login_id)->get();
            foreach($anfinitiDataweb as $data){
                $namaGambar = $data->gambar;
                // unlink(public_path('../../cdn/anfiniti/images/'.$namaGambar));
            };
            anfiniti_dataweb::onlyTrashed()->where("login_id", $login_id)->forceDelete();
            return redirect()->route("trashAnfiniti");
        };

        if(isset($request->tombolKembali)){
            return redirect()->route("anfiniti");
        };
    }

    public function editProses(Request $request){
        session_start();
        $sesiedit = $_SESSION['idEdit'];
        if($sesiedit != null){
            if(isset($request->tombolEdit)){
                $validatedData = $request->validate([
                    'namaWeb' => 'required|string|max:255',
                    'link' => 'required|string|max:255',
                    'gambar' => 'max:64'
                ]);

                $dataEncryptednya = request()->cookie('anfiniti_sessionnya');
                $data = decrypt($dataEncryptednya);
                $login_id = $data['login_id'];

                $anfinitiDataweb = anfiniti_dataweb::where("login_id", $login_id)->where("id", $sesiedit)->first();
                $anfinitiDataweb->nama_web = $validatedData['namaWeb'];
                $anfinitiDataweb->link = $validatedData['link'];
                if($request->gambar != null){
                    $namaGambar1 = $request->gambarnya;
                    // unlink(public_path('../../cdn/anfiniti/images/'.$namaGambar1));
                    $logo = $validatedData['gambar'];
                    $namaGambar = time().'.'.$logo->extension();
                    $logo->move(public_path('../../cdn/anfiniti/images/'), $namaGambar);
                    $anfinitiDataweb->gambar = $namaGambar;
                }
                // hapus juga file yang diganti
                $anfinitiDataweb->save();
                return redirect()->route("anfiniti");
            };

            if(isset($request->tombolKembali)){
                return redirect()->route("anfiniti");
            };

        }else{
            return redirect()->route("anfiniti");
        }
    }

    public function redirectgoogle(){
        $client = new GoogleClient();
        $client->setClientId(env('GOOGLE_CLIENT_ID_ANFINITI'));
        $client->setClientSecret(env('GOOGLE_CLIENT_SECRET_ANFINITI'));
        $client->setRedirectUri(env('GOOGLE_REDIRECT_URI_ANFINITI'));
        $client->addScope('email');
        $client->addScope('profile');

        $authUrl = $client->createAuthUrl();
        return redirect($authUrl);
    }

    public function setelahlogingoogle(){
        $client = new GoogleClient();
        $client->setClientId(env('GOOGLE_CLIENT_ID_ANFINITI'));
        $client->setClientSecret(env('GOOGLE_CLIENT_SECRET_ANFINITI'));
        $client->setRedirectUri(env('GOOGLE_REDIRECT_URI_ANFINITI'));

        if (request()->get('code')) {
            $token = $client->fetchAccessTokenWithAuthCode(request()->get('code'));
            $client->setAccessToken($token);

            $oauth = new \Google\Service\Oauth2($client);
            $googleUser = $oauth->userinfo->get();

            // Proses data pengguna Google sesuai kebutuhan
        }
        return redirect()->route("anfiniti");
    }
}
