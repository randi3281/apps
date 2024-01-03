<?php

namespace App\Http\Controllers\mengulang;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class validationController extends Controller
{
    public function index(){
        return view('mengulang.validation.index');
    }

    public function proses(Request $request){
        $messages = [
            'required' => ':attribute wajib diisi cuy!!!',
            'min' => ':attribute harus diisi :min karakter',
            'max' => ':attribute harus diisi :max karakter',
            'numeric' => ':attribute harus diisi angka'
        ];

        $this->validate($request, [
            'nama' => 'required|min:5|max:20',
            'pekerjaan' => 'required',
            'usia' => 'required|numeric'
        ], $messages);

        return view('mengulang.validation.hasilproses', ['data' => $request]);
    }
}
