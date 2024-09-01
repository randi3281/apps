<?php

namespace App\Http\Controllers\lebakbarang;

use App\Http\Controllers\Controller;
use App\Mail\sendMailLebakbarang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class lebakbarangController extends Controller
{
    public function index()
    {
        return view('lebakbarangview.isi.index');
    }

    public function sejarahDesa()
    {
        return view('lebakbarangview.isi.sejarah-desa');
    }

    public function visiMisi()
    {
        return view('lebakbarangview.isi.visi-misi');
    }

    public function demografi()
    {
        return view('lebakbarangview.isi.demografi');
    }

    public function keadaanSosial()
    {
        return view('lebakbarangview.isi.keadaan-sosial');
    }

    public function keadaanEkonomi()
    {
        return view('lebakbarangview.isi.keadaan-ekonomi');
    }

    public function lembagaPemerintahan()
    {
        return view('lebakbarangview.isi.lembaga-pemerintahan');
    }

    public function lembagaKemasyarakatan()
    {
        return view('lebakbarangview.isi.lembaga-kemasyarakatan');
    }

    public function pembagianWilayah()
    {
        return view('lebakbarangview.isi.pembagian-wilayah');
    }

    public function strukturOrganisasi()
    {
        return view('lebakbarangview.isi.struktur-organisasi');
    }

    public function pengaduan()
    {
        return view('lebakbarangview.isi.pengaduan');
    }

    public function kirimPengaduan(Request $request)
    {
        $data = [
            'nama' => $request->nama,
            'email' => $request->email,
            'pengaduan' => $request->pengaduan
        ];

        Mail::mailer('smtp3')->to('lebakbarangpemdes01@gmail.com')->send(new sendMailLebakbarang($data));
        return redirect()->back()->with('success', 'Pengaduan berhasil dikirim');
    }
}
