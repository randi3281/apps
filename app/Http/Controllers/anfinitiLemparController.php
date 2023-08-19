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
            case 2:
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
            
        }

        return view("anfinitiView.start", ["mode" => $mode, "errornya" => $errornya]);
    }
    

}
