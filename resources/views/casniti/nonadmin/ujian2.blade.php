@extends('casniti.master')

@section('judul_halaman', 'Ujian')

@section('menu')
    <li class="nav-item">
        <a class="nav-link mx-4 active" style="font-weight: bold">Ujian</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active mx-4" href="/casniti/history">History</a>
    </li>
@endsection

@section('konten')
    {{-- buatlah Selamat Datang Randi Afif, silahkan Upload Soal di tengah --}}
    <div class="text-center custom-font mt-4" style="font-size: 18px">
        <p class="">Selamat Datang Randi Afif, silahkan pilih Kategori dan Paket Soal yang Diinginkan</p>
    </div>
    {{-- buatlah form upload soal --}}
    <div class="container mt-4">
        <div class="row justify-content-center text-center">
            <div class="col-md-3">
                <form action="/casniti/upload" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mt-4 mb-3">
                        <label for="jenis_ujian">Jenis Ujian</label>
                        <select name="ju" id="jenis_ujian" class="form-control rounded-5 mt-2"
                            style="width: 200px; display: inline-block;">
                            <option value="skd">SKD</option>
                            <option value="skb">SKB</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="paket_soal">Paket Soal</label>
                        <select name="paket_soal" id="paket_soal" class="form-control rounded-5 mt-2"
                            style="width: 200px; display: inline-block;">
                            <option value="paket1">Paket 1</option>
                            <option value="paket2">Paket 2</option>
                            <option value="paket3">Paket 3</option>
                        </select>
                    </div>
                    <div class="form-group text-center mt-5">
                        <button type="submit" class="btn btn-danger fixed-size rounded-5 me-2 w-50">Kembali</button>
                        <button type="submit" class="btn btn-primary fixed-size rounded-5 w-25 mt-2">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
