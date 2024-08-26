@extends('casniti.master')

@section('judul_halaman', 'Upload Soal')

@section('menu')
    <li class="nav-item">
        <a class="nav-link active mx-4" style="font-weight: bold">Upload Soal</a>
    </li>
    <li class="nav-item">
        <a class="nav-link mx-4" href="/casniti/filter">Filter Soal</a>
    </li>
@endsection

@section('konten')
    {{-- buatlah Selamat Datang Randi Afif, silahkan Upload Soal di tengah --}}
    <div class="text-center custom-font mt-4" style="font-size: 18px">
        <p class="">Selamat Datang Randi Afif, Silahkan Upload Soal</p>
    </div>
    {{-- buatlah form upload soal --}}
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-3">

                <form action="/casniti/upload" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="pb-5 mt-5">
                        <label for="file" class="form-label text-white">Upload File Soal</label>
                        <input type="file" class="form-control rounded-5" id="file" name="file">
                    </div>
                    <div class="text-center mt-5">
                        <button type="submit" class="btn w-50 btn-primary rounded-5">Upload</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
