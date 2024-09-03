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
        <p class="">Selamat Datang Randi Afif, silahkan pilih Jenis Ujian yang Diinginkan</p>
    </div>
    {{-- buatlah form upload soal --}}
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-3">

                <form action="/casniti/upload" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="pb-5 mt-5 text-center">
                        <select name="ju" id="" class="dropdown rounded-5 mt-5" style="width: 200px">
                            <option value="skd">SKD</option>
                            <option value="skb">SKB</option>
                        </select>
                    </div>
                    <div class="text-center mt-5">
                        <button type="submit" class="btn w-50 btn-primary rounded-5">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
