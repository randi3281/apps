<?php

namespace App\Http\Controllers\mengulang;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\mengulang\rpegawai;

class rpegawaiController extends Controller
{
    public function index(){
        $rpegawai = rpegawai::paginate(6);

        return view('mengulang.rpegawai.index', ['rpegawai' => $rpegawai]);
    }

    public function tambah(){
        return view('mengulang.rpegawai.tambah');
    }

    public function proses(Request $request){
        if(isset($request->tambah)){
            $messages = [
                'required' => ':attribute harus diisi ya kak'
            ];

            $this->validate($request, [
                'nama' => 'required',
                'alamat' => 'required'
            ], $messages);

            rpegawai::create([
                'name' => $request->nama,
                'alamat' => $request->alamat
            ]);

            return redirect()->route('rpegawai.tambah');
        }

        if(isset($request->kembali)){
            return redirect()->route('rpegawai.index');
        }
    }

    public function edit($id){
        $rpegawai = rpegawai::find($id);

        session()->put('id_edit', $id);
        return view('mengulang.rpegawai.edit', ['item' => $rpegawai]);
    }

    public function update(Request $request){
        $messages = [
            'required' => ':attribute harus diisi ya kak'
        ];

        $this->validate($request, [
            'nama' => 'required',
            'alamat' => 'required'
        ], $messages);

        $rpegawai = rpegawai::find(session()->get('id_edit'));
        $rpegawai->name = $request->nama;
        $rpegawai->alamat = $request->alamat;
        $rpegawai->save();

        return redirect()->route('rpegawai.index');
    }

    public function hapus($id){
        $rpegawai = rpegawai::find($id);
        $rpegawai->delete();

        return redirect()->route('rpegawai.index');
    }

    public function history(){
        $rpegawai = rpegawai::onlyTrashed()->paginate(6);

        return view('mengulang.rpegawai.history', ['rpegawai' => $rpegawai]);
    }

    public function restore($id){
        $rpegawai = rpegawai::onlyTrashed()->where('id', $id);
        $rpegawai->restore();

        return redirect()->route('rpegawai.history');
    }

    public function hapuspermanen($id){
        $rpegawai = rpegawai::onlyTrashed()->where('id', $id);
        $rpegawai->forceDelete();

        return redirect()->route('rpegawai.history');
    }

    public function restoresemua(){
        $rpegawai = rpegawai::onlyTrashed();
        $rpegawai->restore();

        return redirect()->route('rpegawai.history');
    }

    public function hapuspermanensemua(){
        $rpegawai = rpegawai::onlyTrashed();
        $rpegawai->forceDelete();

        return redirect()->route('rpegawai.history');
    }
}
