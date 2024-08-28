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
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="row justify-content-center text-center" style="font-size: 20px; font-weight: lighter">
                    <div class="col-md-3" style="margin-bottom: -15px">
                        <p class="">Soal No: 1</p>
                    </div>
                    <div class="col-md-3" style="margin-bottom: -15px">
                    </div>
                    <div class="col-md-6 text-danger">
                        <p class="">Waktu Tersisa: 00:00:00</p>
                    </div>
                </div>
                <div class="card rounded-5" style="height: 370px">
                    <div class="card-body">
                        <h5 class="card-title
                        ">Soal Ujian</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod
                            voluptates. Quisquam, quod voluptates.</p>
                        <a href="/casniti/ujian3/soal" class="btn btn-primary">Mulai Ujian</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card ">
                    <div class="card-body">
                        <h5 class="card-title
                        ">Soal Ujian</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod
                            voluptates. Quisquam, quod voluptates.</p>
                        <a href="/casniti/ujian3/soal" class="btn btn-primary">Mulai Ujian</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
