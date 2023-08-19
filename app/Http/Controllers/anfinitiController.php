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

            $anfinitiSession = anfiniti_session::where("sesi", $tokennya)->first();
            if($anfinitiSession){
                if(password_verify($username, $anfinitiSession->username)){
                    // buatlah  fungsi untuk mengambil data dari database anfiniti_dataweb berdasarkan login_id yang didapat dari anfiniti_session dengan urut dari id
                    $anfinitiDataweb = anfiniti_dataweb::where("link", 'm')->orderBy('id', 'asc')->get();
                    return view("anfinitiView.anfiniti", compact($anfinitiDataweb));
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
        $mode = 1;

        return view("anfinitiView.start", ["mode" => $mode]);
    }
    
    public function daftar(){
        $mode = 2;

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
}
