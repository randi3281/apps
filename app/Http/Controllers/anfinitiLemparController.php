<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class anfinitiLemparController extends Controller
{
    public function daftarKet($ket){
        $mode = 2;
        $errornya = "";
        switch ($ket) {
            case 1:
                $errornya = "Maaf, Password Tidak Sama";
                break;
            case 2:
                $errornya = "Maaf, Captcha Anda salah";
                break;
            case 3:
                $errornya = "Maaf, Username sudah ada";
                break;
            
        }

        return view("anfinitiView.start", ["mode" => $mode, "errornya" => $errornya]);
    }

    public function loginKet($ket){
        $mode = 1;
        $errornya = "";
        switch ($ket) {
            case 1:
                $errornya = "Maaf, Password Anda salah";
                break;
            case 2:
                $errornya = "Maaf, Captcha Anda salah";
                break;
            case 3:
                $errornya = "Maaf, Username tidak ada";
                break;
            
        }

        return view("anfinitiView.start", ["mode" => $mode, "errornya" => $errornya]);
    }
    
    public function lupaSandiKet($ket){
        $mode = 3;
        $errornya = "";
        switch ($ket) {
            case 1:
                if(session()->has('autentikasi')){
                    if(session()->get('autentikasi') == "terautentikasi"){
                        $mode = 4;
                    }else{
                        $errornya = "Maaf, Kode Unik salah";
                        $mode = 3;
                    };
                }else{
                    $errornya = "Maaf, Kode Unik salah";
                    $mode = 3;
                }
                break;
            case 2:
                if(session()->has('autentikasi')){
                    if(session()->get('autentikasi') == "terautentikasi"){
                        $mode = 4;
                    }else{
                        $mode = 3;
                    };
                }else{
                    $mode = 3;
                }
                $errornya = "Maaf, Captcha salah";
                break;           
        }

        return view("anfinitiView.start", ["mode" => $mode, "errornya" => $errornya]);
    }
    

}
