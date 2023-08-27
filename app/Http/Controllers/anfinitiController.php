<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\anfiniti_login;
use App\Models\anfiniti_session;
use App\Models\anfiniti_dataweb;

class anfinitiController extends Controller
{
    public function index(){
        // Mendapatkan data dari cookie        
        $dataEncryptednya = request()->cookie('anfiniti_sessionnya');
    
        if ($dataEncryptednya) {
            // Mendekripsi data
            $data = decrypt($dataEncryptednya);
    
            $tokennya = $data['tokennya'];
            $username = $data['username'];

            $anfinitiSession = anfiniti_session::where("sesi", $tokennya)->first();
            if($anfinitiSession){
                if(password_verify($username, $anfinitiSession->username)){
                    return redirect()->route("anfiniti");
                }else{
                    return view("anfinitiView.index");
                };
            }else{
                return view("anfinitiView.index");
            };
        } else {
            return view("anfinitiView.index");
        };        
        
    }

    public function anfiniti(){
        // Mendapatkan data dari cookie        
        $dataEncryptednya = request()->cookie('anfiniti_sessionnya');
    
        if ($dataEncryptednya) {
            // Mendekripsi data
            $data = decrypt($dataEncryptednya);
    
            $tokennya = $data['tokennya'];
            $username = $data['username'];
            $login_id = $data['login_id'];
            // konversikan $login_id ke string
            $anfinitiSession = anfiniti_session::where("sesi", $tokennya)->first();
            if($anfinitiSession){
                if(password_verify($username, $anfinitiSession->username)){
                    // buatlah  fungsi untuk mengambil data dari database anfiniti_dataweb berdasarkan login_id yang didapat dari anfiniti_session dengan urut dari id
                    $dataweb = anfiniti_dataweb::where("login_id", $login_id)->orderBy('id', 'asc')->get();
                    // $dataweb = anfiniti_dataweb::where("login_id", $login_id)->first();
                    if($dataweb){
                        return view("anfinitiView.anfiniti", ['dataweb' => $dataweb]);
                    }else{
                        return view("anfinitiView.anfiniti");
                    };
                }else{
                    return redirect()->route("index");
                };
            }else{
                return redirect()->route("index");
            };
        } else {
            return redirect()->route("index");
        };

    }

    public function login(){
        // Mendapatkan data dari cookie        
        $dataEncryptednya = request()->cookie('anfiniti_sessionnya');
    
        if ($dataEncryptednya) {
            // Mendekripsi data
            $data = decrypt($dataEncryptednya);
    
            $tokennya = $data['tokennya'];
            $username = $data['username'];

            $anfinitiSession = anfiniti_session::where("sesi", $tokennya)->first();
            if($anfinitiSession){
                if(password_verify($username, $anfinitiSession->username)){
                    return redirect()->route("anfiniti");
                }else{
                    $mode = 1;
                };
            }else{
                $mode = 1;                
            };
        } else {
            $mode = 1;                            
        };   

        return view("anfinitiView.start", ["mode" => $mode]);
    }
    
    public function daftar(){
        // Mendapatkan data dari cookie        
        $dataEncryptednya = request()->cookie('anfiniti_sessionnya');
    
        if ($dataEncryptednya) {
            // Mendekripsi data
            $data = decrypt($dataEncryptednya);
    
            $tokennya = $data['tokennya'];
            $username = $data['username'];
    
            $anfinitiSession = anfiniti_session::where("sesi", $tokennya)->first();
            if($anfinitiSession){
                if(password_verify($username, $anfinitiSession->username)){
                    return redirect()->route("anfiniti");
                }else{
                    $mode = 2;
                };
            }else{
                $mode = 2;                
            };
        } else {
            $mode = 2;                            
        };   
    
        return view("anfinitiView.start", ["mode" => $mode]);
    }

    
    public function input(){
        
        // Mendapatkan data dari cookie        
        $dataEncryptednya = request()->cookie('anfiniti_sessionnya');
        
        if ($dataEncryptednya) {
            // Mendekripsi data
            $data = decrypt($dataEncryptednya);

            $tokennya = $data['tokennya'];
            $username = $data['username'];

            $anfinitiSession = anfiniti_session::where("sesi", $tokennya)->first();
            if($anfinitiSession){
                if(password_verify($username, $anfinitiSession->username)){
                    $mode = 1;
                    return view("anfinitiView.menu", ["mode" => $mode]);
                }else{
                    return redirect()->route("index");
                };
            }else{
                return redirect()->route("index");
            };
        } else {
            return redirect()->route("index");
        };

    }

    public function edit(){
        
        // Mendapatkan data dari cookie        
        $dataEncryptednya = request()->cookie('anfiniti_sessionnya');
        
        if ($dataEncryptednya) {
            // Mendekripsi data
            $data = decrypt($dataEncryptednya);

            $tokennya = $data['tokennya'];
            $username = $data['username'];

            $anfinitiSession = anfiniti_session::where("sesi", $tokennya)->first();
            if($anfinitiSession){
                if(password_verify($username, $anfinitiSession->username)){
                    $mode = 2;
                    return view("anfinitiView.menu", ["mode" => $mode]);
                }else{
                    return redirect()->route("index");
                };
            }else{
                return redirect()->route("index");
            };
        } else {
            return redirect()->route("index");
        };
        
    }

    public function trash(){
        $mode = 3;
        return view("anfinitiView.menu", ["mode" => $mode]);
    }

    public function lupaSandi(){
        if(session()->has('autentikasi')){
            if(session()->get('autentikasi') == "terautentikasi"){
                $mode = 4;
            }else{
                $mode = 3;
            };
        }else{
            $mode = 3;
        };
    
        return view("anfinitiView.start", ["mode" => $mode]);
    }

    public function hapus($id){
        $anfinitiDataweb = anfiniti_dataweb::find($id);
        $anfinitiDataweb->delete();
        return redirect()->route("anfiniti");
    }
}

