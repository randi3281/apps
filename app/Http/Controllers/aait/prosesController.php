<?php

namespace App\Http\Controllers\aait;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\user_manajemen;
use App\Models\area_user_aplikasi;
use App\Helper\jurnalhelper as jurnalhelper;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\DataBarangExport;
use App\Exports\MutasiExport;;
use App\Exports\PenghapusanExport;
use App\Models\data_barang;
use App\Models\penghapusan;
use App\Models\mutasi;
use Carbon\Carbon;

class prosesController extends Controller
{

    // Start Proses Akun
    public function login(Request $request)
    {
        session_start();
        $input = $request->only('nik', 'password');
        $validator = Validator::make($input, [
            'nik' => 'required|numeric',
            'password' => 'required'
        ], [
            'nik.required' => 'Nomor Induk Kependudukan (NIK) diperlukan.',
            'nik.numeric' => 'Nomor Induk Kependudukan (NIK) harus berupa angka.',
            'password.required' => 'Kata sandi diperlukan.'
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $usernya = user_manajemen::where('nik', $request->nik)->first();

        if (!$usernya) {
            return back()->withErrors(['nik' => 'NIK tidak ditemukan.'])->withInput();
        }

        if (!$usernya || !Hash::check($request->password, $usernya->password)) {
            return back()->withErrors(['password' => 'NIK atau kata sandi salah.'])->withInput();
        }

        $data_area = area_user_aplikasi::where('nik', $request->nik)->get();
        $_SESSION['nik_diambil'] = $request->nik;
        return view('aait.area', ['data_area' => $data_area]);
    }

    public function login_lempar(Request $request)
    {
        session_start();
        $input = $request->only('area');
        $validator = Validator::make($input, [
            'area' => 'required|string'
        ], [
            'area.required' => 'Area diperlukan.',
            'area.numeric' => 'Area harus berupa tulisan.'
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        $usernya = user_manajemen::where('nik', $_SESSION['nik_diambil'])->where('area', $request->area)->first();
        jurnalhelper::buatkukis($usernya);

        return redirect()->route('aait.dashboard', ['menu' => 'dashboard']);
    }

    // End Proses Akun


    // Start Admin
    // Start Proses User Manajemen Admin
    public function admin_usermanajemen_store(Request $request)
    {
        $validasi = Validator::make($request->all(), [
            'nama' => 'required|string|max:255',
            'password' => 'required|string|max:255',
            'nik' => 'required|numeric',
            'posisi' => 'required|string|max:255',
            'area' => 'required|string|max:255',
            'daerah' => 'required|string|max:255',
        ]);

        $user = new user_manajemen;

        $user->nama = $request->nama;
        $user->nik = $request->nik;
        $user->password = bcrypt($request->password);
        $user->posisi = $request->posisi;
        $user->area = $request->area . " " . $request->daerah;
        $user->save();

        $area_user_aplikasi = new area_user_aplikasi;
        $area_user_aplikasi->nik = $request->nik;
        $area_user_aplikasi->area_user = $request->area . " " . $request->daerah;
        $area_user_aplikasi->save();

        return redirect()->route('aait.dashboard', ['menu' => 'user_manajemen']);
    }

    public function admin_usermanajemen_edit($id)
    {
        session_start();
        $useredit = user_manajemen::findOrFail($id);
        $_SESSION['edit'] = 'iya';
        session(['useredit' => $useredit]);

        $words = explode(' ', $useredit->area);

        $wordsExceptFirst = array_slice($words, 1);

        $katabaru = array();
        foreach ($wordsExceptFirst as $word) {
            array_push($katabaru, $word);

        }

        $katapertama = $words[0];
        $katabaru = implode(" ", $katabaru);
        session(['area' => $katabaru]);
        session(['katapertama' => $katapertama]);

        return redirect()->route('aait.dashboard', ['menu' => 'user_manajemen']);
    }

    public function admin_usermanajemen_update(Request $request, $id)
    {
        session_start();
            $_SESSION['edit'] = 'tidak';
        if(isset($request->tomboledit)){

            $user = user_manajemen::findOrFail($id);

            $user->nama = $request->nama;
            $user->nik = $request->nik;
            if($request->password != null){
                $user->password = bcrypt($request->password);
            }
            $user->posisi = $request->posisi;
            $user->area = $request->area." ".$request->daerah;
            $user->save();

            return redirect()->route('aait.dashboard', ['menu' => 'user_manajemen']);
        }

        if(isset($request->tombolbatal)){
            $_SESSION['edit'] = 'tidak';
            return redirect()->route('aait.dashboard', ['menu' => 'user_manajemen']);
        }
    }

    public function admin_usermanajemen_destroy($id)
    {
        $user = user_manajemen::findOrFail($id);
        $user->delete();
        return redirect()->route('aait.dashboard', ['menu' => 'user_manajemen']);
    }
    // End User Manajemen Admin


    // Start Export to Excel Admin
    public function export_data_barang(Request $request)
    {
        session_start();
        if ($request->area == 'all' && $request->bulan == 'all' && $request->tahun == 'all') {
            return Excel::download(new DataBarangExport($request->bulan, $request->tahun, $request->area), 'Data Barang Sekarang.xlsx');
        } else {
            if ($_COOKIE['posisi'] == 'pengguna') {
                $areanya = $_COOKIE['area'];
                return Excel::download(
                    new DataBarangExport($request->bulan, $request->tahun, $areanya),
                    "Data Barang {$areanya} {$request->bulan} {$request->tahun}.xlsx"
                );
            }
            return Excel::download(
                new DataBarangExport($request->bulan, $request->tahun, $request->area),
                "Data Barang {$request->area} {$request->bulan} {$request->tahun}.xlsx"
            );
        }

    }

    public function export_mutasi(Request $request)
    {
        session_start();
        if($request->area == 'all' && $request->bulan == 'all' && $request->tahun == 'all'){
                return Excel::download(new MutasiExport($request->bulan, $request->tahun, $request->area), 'Mutasi Sekarang.xlsx');
        } else {
            if($_COOKIE['posisi'] == 'pengguna'){
                $areanya = $_COOKIE['area'];
                return Excel::download(new MutasiExport($request->bulan, $request->tahun, $areanya), 'Data Barang ' . $areanya . " ". $request->bulan . " " . $request->tahun .'.xlsx');
            }
            return Excel::download(new MutasiExport($request->bulan, $request->tahun, $request->area), 'Mutasi ' . $request->area . " ". $request->bulan . " " . $request->tahun .'.xlsx');
        }
    }
    public function export_penghapusan(Request $request)
    {
        session_start();
        if($request->area == 'all' && $request->bulan == 'all' && $request->tahun == 'all'){
            return Excel::download(new PenghapusanExport($request->bulan, $request->tahun, $request->area), 'Penghapusan Sekarang.xlsx');
        } else {
            if($_COOKIE['posisi'] == 'pengguna'){
                $areanya = $_COOKIE['area'];
                return Excel::download(new PenghapusanExport($request->bulan, $request->tahun, $areanya), 'Data Barang ' . $areanya . " ". $request->bulan . " " . $request->tahun .'.xlsx');
            }
            return Excel::download(new PenghapusanExport($request->bulan, $request->tahun, $request->area), 'Penghapusan ' . $request->area . " ". $request->bulan . " " . $request->tahun .'.xlsx');
        }
    }
    // End Export To Excel Admin
    // End Admin

    // Start Campur
    public function data_barang_pilihan(Request $request)
    {
        session_start();
        if(isset($request->tombolsubmit)){
            $_SESSION['data_barang_time'] = 'new';
            $_SESSION['data_barang_area']= $request->area;
            $_SESSION['data_barang_bulan']= $request->bulan;
            $_SESSION['data_barang_tahun']= $request->tahun;
            return redirect()->route('aait.dashboard', ['menu' => 'data_barang']);
        }

        if(isset($request->tombolcari)){
            // tampilkan sesuai kolom cari
            $_SESSION['data_barang_time'] = 'old';
            $_SESSION['data_barang_area']= $request->area;
            $_SESSION['data_barang_bulan']= $request->bulan;
            $_SESSION['data_barang_tahun']= $request->tahun;
            $_SESSION['data_barang_cari']= $request->cari;
            return redirect()->route('aait.dashboard', ['menu' => 'data_barang']);
        }
    }
    public function mutasi_pilihan(Request $request)
    {
        session_start();
        $_SESSION['mutasi_time'] = 'old';
        $_SESSION['mutasi_area']= $request->area;
        $_SESSION['mutasi_bulan']= $request->bulan;
        $_SESSION['mutasi_tahun']= $request->tahun;
        return redirect()->route('aait.dashboard', ['menu' => 'mutasi']);
    }

    public function penghapusan_pilihan(Request $request)
    {
        session_start();
        $_SESSION['penghapusan_time'] = 'old';
        $_SESSION['penghapusan_area']= $request->area;
        $_SESSION['penghapusan_bulan']= $request->bulan;
        $_SESSION['penghapusan_tahun']= $request->tahun;
        return redirect()->route('aait.dashboard', ['menu' => 'penghapusan']);
    }

    // End Campur

    // Start Pengguna
    // Start Data Barang Pengguna
    public function pengguna_databarang_store(Request $request)
    {

        $data_barang = new data_barang;
        $data_barang->tanggal_perolehan = $request->tanggal_perolehan;
        $data_barang->asset = $request->nama_barang_asset;
        $data_barang->kode_fa_fams = $request->kode_fa_fams;
        $data_barang->nama_barang = $request->nama_barang;
        $data_barang->outlet_pencatatan = $request->outlet_pencatatan;
        $data_barang->outlet_actual = $request->outlet_actual;
        $data_barang->type_barang = $request->type_barang;
        $data_barang->location = $request->location;
        $data_barang->jabatan = $request->jabatan;
        $data_barang->nama_user = $request->nama_user;
        $data_barang->nik = $request->nik;
        $data_barang->komputer_nama = $request->nama_komputer;
        $data_barang->ip_address = $request->ip_address;
        $data_barang->kondisi = $request->kondisi;
        $data_barang->keterangan = $request->keterangan;
        $data_barang->serial_number = $request->serial_number;
        $data_barang->sophos = $request->shopos;
        $data_barang->landesk = $request->landesk;
        $data_barang->save();


        jurnalhelper::resetedit();
        return redirect()->route('aait.dashboard', ['menu' => 'data_barang']);
    }

    public function pengguna_databarang_edit($id)
    {
        session_start();
        $useredit = data_barang::findOrFail($id);
        session(['edit' => 'iya']);
        session(['useredit' => $useredit]);

        return redirect()->route('aait.dashboard', ['menu' => 'data_barang']);
    }

    public function pengguna_databarang_update(Request $request, $id)
    {

        if(isset($request->submittombol)){
            $data_barang = data_barang::findOrFail($id);
            $data_barang->tanggal_perolehan = $request->tanggal_perolehan;
            $data_barang->asset = $request->asset;
            $data_barang->kode_fa_fams = $request->kode_fa_fams;
            $data_barang->nama_barang = $request->nama_barang;
            $data_barang->outlet_actual = $request->outlet_actual;
            $data_barang->type_barang = $request->type_barang;
            $data_barang->location = $request->location;
            $data_barang->jabatan = $request->jabatan;
            $data_barang->nama_user = $request->nama_user;
            $data_barang->nik = $request->nik;
            $data_barang->komputer_nama = $request->nama_komputer;
            $data_barang->ip_address = $request->ip_address;
            $data_barang->kondisi = $request->kondisi;
            $data_barang->keterangan = $request->keterangan;
            $data_barang->serial_number = $request->serial_number;
            $data_barang->sophos = $request->sophos;
            $data_barang->landesk = $request->landesk;

            $data_barang->save();

            jurnalhelper::resetedit();
            return redirect()->route('aait.dashboard', ['menu' => 'data_barang']);
        }

        if(isset($request->bataltombol)){
            jurnalhelper::resetedit();
            return redirect()->route('aait.dashboard', ['menu' => 'data_barang']);
        }

    }

    public function pengguna_databarang_destroy($id){
        $user = data_barang::findOrFail($id);

        $user->delete();

        jurnalhelper::resetedit();
        return redirect()->route('aait.dashboard', ['menu' => 'data_barang']);
    }
    // End Data Barang Pengguna
    // Start Mutasi Pengguna
    public function pengguna_mutasi_store(Request $request)
    {
        $mutasi = new mutasi;
        $mutasi->tanggal_perolehan = $request->tanggal_perolehan;
        $mutasi->asset = $request->nama_barang_asset;
        $mutasi->kode_fa = $request->kode_fa_fams;
        $mutasi->nama_barang = $request->nama_barang;
        $mutasi->outlet_actual = $request->outlet_actual;
        $mutasi->type_barang = $request->type_barang;
        $mutasi->location = $request->location;
        $mutasi->jabatan = $request->jabatan;
        $mutasi->user_domain = $request->nama_user;
        $mutasi->nik = $request->nik;
        $mutasi->komputer_nama = $request->nama_komputer;
        $mutasi->ip_address = $request->ip_address;
        $mutasi->kondisi = $request->kondisi;
        $mutasi->keterangan = $request->keterangan;
        $mutasi->serial_number = $request->serial_number;
        $mutasi->sophos = $request->shopos;
        $mutasi->landesk = $request->landesk;
        $mutasi->save();


        jurnalhelper::resetedit();
        return redirect()->route('aait.dashboard', ['menu' => 'mutasi']);
    }

    public function pengguna_mutasi_edit($id)
    {
        session_start();
        $useredit = mutasi::findOrFail($id);
        session(['edit' => 'iya']);
        session(['useredit' => $useredit]);

        return redirect()->route('aait.dashboard', ['menu' => 'mutasi']);
    }

    public function pengguna_mutasi_update(Request $request, $id)
    {
    if(isset($request->submittombol)){
            $mutasi = mutasi::findOrFail($id);
            $mutasi->tanggal_perolehan = $request->tanggal_perolehan;
            $mutasi->asset = $request->asset;
            $mutasi->kode_fa = $request->kode_fa_fams;
            $mutasi->nama_barang = $request->nama_barang;
            $mutasi->outlet_actual = $request->outlet_actual;
            $mutasi->type_barang = $request->type_barang;
            $mutasi->location = $request->location;
            $mutasi->jabatan = $request->jabatan;
            $mutasi->user_domain = $request->nama_user;
            $mutasi->nik = $request->nik;
            $mutasi->komputer_nama = $request->nama_komputer;
            $mutasi->ip_address = $request->ip_address;
            $mutasi->kondisi = $request->kondisi;
            $mutasi->keterangan = $request->keterangan;
            $mutasi->serial_number = $request->serial_number;
            $mutasi->sophos = $request->shopos;
            $mutasi->landesk = $request->landesk;
            $mutasi->save();
            jurnalhelper::resetedit();
            return redirect()->route('aait.dashboard', ['menu' => 'mutasi']);

    }

    if(isset($request->bataltombol)){
        jurnalhelper::resetedit();
        return redirect()->route('aait.dashboard', ['menu' => 'mutasi']);
    }
    }

    public function pengguna_mutasi_destroy($id){
        $user = mutasi::findOrFail($id);

        $user->delete();

        jurnalhelper::resetedit();
        return redirect()->route('aait.dashboard', ['menu' => 'mutasi']);
    }
    // End Mutasi Pengguna

    // Start Penghapusan Pengguna

    public function pengguna_penghapusan_store(Request $request)
    {
        $penghapusan = new penghapusan;
        $penghapusan->tanggal_perolehan = $request->tanggal_perolehan;
        $penghapusan->asset = $request->nama_barang_asset;
        $penghapusan->kode_fa_fams = $request->kode_fa_fams;
        $penghapusan->nama_barang = $request->nama_barang;
        $penghapusan->outlet_pencatatan = $request->outlet_pencatatan;
        $penghapusan->outlet_actual = $request->outlet_actual;
        $penghapusan->type_barang = $request->type_barang;
        $penghapusan->location = $request->location;
        $penghapusan->jabatan = $request->jabatan;
        $penghapusan->nama_user = $request->nama_user;
        $penghapusan->nik = $request->nik;
        $penghapusan->komputer_nama = $request->nama_komputer;
        $penghapusan->ip_address = $request->ip_address;
        $penghapusan->kondisi = $request->kondisi;
        $penghapusan->keterangan = $request->keterangan;
        $penghapusan->serial_number = $request->serial_number;
        $penghapusan->sophos = $request->shopos;
        $penghapusan->landesk = $request->landesk;
        $penghapusan->save();


        return redirect()->route('aait.dashboard', ['menu' => 'penghapusan']);
    }

    public function pengguna_penghapusan_edit($id)
    {
        session_start();
        $useredit = penghapusan::findOrFail($id);
        session(['edit' => 'iya']);
        session(['useredit' => $useredit]);

        return redirect()->route('aait.dashboard', ['menu' => 'penghapusan']);
    }

    public function pengguna_penghapusan_update(Request $request, $id)
    {

        $penghapusan = penghapusan::findOrFail($id);
        $penghapusan->tanggal_perolehan = $request->tanggal_perolehan;
        $penghapusan->asset = $request->nama_barang_asset;
        $penghapusan->kode_fa_fams = $request->kode_fa_fams;
        $penghapusan->nama_barang = $request->nama_barang;
        $penghapusan->outlet_pencatatan = $request->outlet_pencatatan;
        $penghapusan->outlet_actual = $request->outlet_actual;
        $penghapusan->type_barang = $request->type_barang;
        $penghapusan->location = $request->location;
        $penghapusan->jabatan = $request->jabatan;
        $penghapusan->nama_user = $request->nama_user;
        $penghapusan->nik = $request->nik;
        $penghapusan->komputer_nama = $request->nama_komputer;
        $penghapusan->ip_address = $request->ip_address;
        $penghapusan->kondisi = $request->kondisi;
        $penghapusan->keterangan = $request->keterangan;
        $penghapusan->serial_number = $request->serial_number;
        $penghapusan->sophos = $request->sophos;
        $penghapusan->landesk = $request->landesk;

        $penghapusan->save();

        jurnalhelper::resetedit();

        return redirect()->route('aait.dashboard', ['menu' => 'penghapusan']);
    }

    public function pengguna_penghapusan_destroy($id){
        $user = penghapusan::findOrFail($id);

        $user->delete();

        return redirect()->route('aait.dashboard', ['menu' => 'penghapusan']);
    }

    // End Penghapusan Pengguna
    // End Pengguna

}
