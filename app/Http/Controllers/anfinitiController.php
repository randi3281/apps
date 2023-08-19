<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\anfiniti_login;
use App\Models\anfiniti_session;

class anfinitiController extends Controller
{
    public function index()
    {
        try {
            // Mendapatkan data dari cookie
            $dataEncrypted = request()->cookie('anfiniti_sessionnya');
    
            if ($dataEncrypted) {
                // Mendekripsi data
                $data = decrypt($dataEncrypted);
    
                $tokennya = $data['tokennya'];
                $username = $data['username'];
    
                $anfinitiSession = anfiniti_session::where("sesi", $tokennya)->first();
    
                if ($anfinitiSession && password_verify($username, $anfinitiSession->username)) {
                    return redirect()->route("anfiniti");
                }
            }
    
            return view("anfinitiView.index");
        } catch (\Exception $e) {
            // Handle exception, maybe log it
            return view("errorView");
        }
    }
    

    // public function index(){
    //     // Mendapatkan data dari cookie
        
    //     $dataEncrypted = request()->cookie('anfiniti_sessionnya');
    
    //     if ($dataEncrypted) {
    //         // Mendekripsi data
    //         $data = decrypt($dataEncrypted);
    
    //         $tokennya = $data['tokennya'];
    //         $username = $data['username'];

    //         $anfinitiSession = anfiniti_session::where("sesi", $tokennya)->first();
    //         if($anfinitiSession){
    //             if(password_verify($username, $anfinitiSession->username)){
    //                 return redirect()->route("anfiniti");
    //             }else{
    //                 // return view("anfinitiView.index");
    //             };
    //         }else{
    //             // return view("anfinitiView.index");
    //         };
    //     } else {
    //         return view("anfinitiView.index");
    //     };        
        
    // }

    public function anfiniti(){
        return view("anfinitiView.anfiniti");
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
        $mode = 1;

        return view("anfinitiView.menu", ["mode" => $mode]);
    }

    public function edit(){
        $mode = 2;

        return view("anfinitiView.menu", ["mode" => $mode]);
    }

    public function trash(){
        $mode = 3;

        return view("anfinitiView.menu", ["mode" => $mode]);
    }
}
