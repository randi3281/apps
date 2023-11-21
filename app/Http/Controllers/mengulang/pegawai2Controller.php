<?php

namespace App\Http\Controllers\mengulang;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class pegawai2Controller extends Controller
{
    public function index(){
        // $pegawai = DB::table('mengulang_pegawai')->get();
        $pegawai = DB::table('mengulang_pegawai')->paginate(15);
        
        return view('mengulang.pegawai2.index', ['pegawai' => $pegawai]);
    }

    public function tambah(){
        return view('mengulang.pegawai2.tambah');
    }

    public function tambahproses(Request $request){
        DB::table('mengulang_pegawai')->insert([
            'pegawai_nama' => $request->nama,
            'pegawai_jabatan' => $request->jabatan,
            'pegawai_umur' => $request->umur,
            'pegawai_alamat' => $request->alamat
        ]);

        return redirect()->route('mengulang.pegawai2tambah');
    }

    public function edit($id){
        $pegawai = DB::table('mengulang_pegawai')->where('id', $id)->get();

        return view('mengulang.pegawai2.edit', ['pegawai' => $pegawai]);
    }

    public function editproses(Request $request){
        DB::table('mengulang_pegawai')->where('id', $request->id)->update([
            'pegawai_nama' => $request->nama,
            'pegawai_jabatan' => $request->jabatan,
            'pegawai_umur' => $request->umur,
            'pegawai_alamat' => $request->alamat
        ]);

        return redirect()->route('mengulang.pegawai2index');
    }
    public function hapusproses($id){
        DB::table('mengulang_pegawai')->where('id', $id)->delete();

        return redirect()->route('mengulang.pegawai2index');
    }

    public function cari(Request $request){
        if(isset($request->tombolcari)){
            $pegawai = DB::table('mengulang_pegawai')->where('pegawai_nama','like','%'.$request->cari.'%')->paginate();

            return view('mengulang.pegawai2.index', ['pegawai' => $pegawai]);
        }
        
        if(isset($request->tombolreset)){
            return redirect()->route('mengulang.pegawai2index');
        }

    }
}
