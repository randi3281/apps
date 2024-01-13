<?php

namespace App\Http\Controllers\belajar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class belajarController extends Controller
{
    public function index()
    {
        return view('belajar.index');
    }

    public function siapa(Request $request)
    {
        $nama = $request->nama;
        $alamat = $request->alamat;
        // gabungkan nama dan alamat menjadi variabel array
        $data = [
            'nama' => $nama,
            'alamat' => $alamat
        ];
        if ($nama == 'admin') {
            return redirect('/belajar')->with('status', 'Anda tidak boleh mengakses halaman ini');
        }
        return view('belajar.siapa', ['data' => $data]);
    }
}
