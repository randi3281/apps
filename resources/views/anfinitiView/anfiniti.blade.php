<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="/anfinitiPublic/aa.png" type="image/x-icon">
    <title>nfiniti - / An . fi . ni . ti /</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        /* CSS untuk mengatur ikon di dalam input */
        .input-group-prepend i {
            padding: 10px;
            background: #f5f5f5;
        }
    </style>
</head>

<body class="bg-dark">
    <div class="container-fluid">
        @if($posisi->posisi == 'common')
            <div class="row bg-white" style="min-height: 45px">
                <div class="col-md-12 text-center">
                    <h5 class="text-danger mt-2" style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif">
                        Maximal 5 web, Ayo Upgrade ke Premium agar bisa menyimpan web unlimited!
                        <i class="fas fa-star" style="color: gold"></i>
                        Hanya 100 ribu per tahun
                        <a href="">Klik Disini</a>
                    </h5>
                </div>
            </div>
        @endif
        <div class="row justify-content-center">
            <div class="col-md-4">
                <img src="/anfinitiPublic/logo.png" class="mt-5 img-fluid" alt="">
            </div>
            <div class="col-md-5 justify-content-center d-flex align-items-center">
                <input type="text" placeholder="Mau Cari Apa?" class="form-control w-75 mt-4" id="searchh"
                    value="" autofocus>
                <a href="" class="btn btn-secondary ms-2 mt-4" id="searchButton">Search</a>
            </div>
            <div class="col-md-2 text-center">
                <a href="/anfiniti/keluar">
                    <img src="/anfinitiPublic/keluar.png" style="width: 150px" class="mt-5 img-fluid" alt="">
                </a>
                <br>
                <a href="/anfiniti/trash">
                    <img src="/anfinitiPublic/webterhapus.png" style="width: 150px" class="mt-3 img-fluid"
                        alt="">
                </a>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            @php
                $i = 0;
                $y = 7;
            @endphp
            <div class="card custom-card mx-2 mb-3" style="width: 147px; height: 147px">
                <div class="card-body text-center">
                    <div class="row justify-content-center" style="margin-top:2px">
                        <div class="col-md-1 d-flex justify-content-center align-items-center mb-4 mx-3">
                            <div class="col justify-content-center d-flex">
                                <a href="https://icons8.com/icons/" target="_blank">
                                    <img src="/anfinitiPublic/icons8.png" class="card-img-top"
                                        style="width: 70px; height: 70px" alt="Image">
                                </a>
                            </div>
                        </div>
                        <div class="row" style="margin-top: -15px">
                            <div class="col">
                                <p class="card-title fw-bold" style="line-height: 0.9; font-size: 14px">Cari Icon</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            @foreach ($dataweb as $data)
                <div class="card custom-card mx-2 mb-3" style="width: 147px; height: 147px">
                    <div class="card-body text-center">
                        <div class="row justify-content-center" style="margin-top:-10px">
                            <div class="col-md-1 d-flex justify-content-center align-items-center mb-4 mx-3">
                                <div class="col justify-content-center d-flex">
                                    <a href="https://{{ $data->link }}" target="_blank">
                                        {{-- <img src="/anfinitiPublic/images/{{ $data->gambar }}" class="mt-2 card-img-top" --}}
                                        <img src="https://cdn.anfiniti.my.id/anfiniti/images/{{ $data->gambar }}"
                                            class="mt-2 card-img-top" style="width: 60px; height: 60px" alt="Image">
                                    </a>
                                </div>
                            </div>
                            <div class="row" style="margin-top: -20px; margin-bottom: -6px">
                                <div class="col">
                                    <p class="card-title fw-bold" style="line-height: 1.2; font-size: 11px">
                                        {{ $data->nama_web }}</p>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col justify-content-between d-flex align-items-center">
                                    <a href="/anfiniti/edit/{{ $data->id }}">
                                        <img src="/anfinitiPublic/edit.png" alt="">
                                    </a>
                                    <a href="/anfiniti/hapus/{{ $data->id }}">
                                        <img src="/anfinitiPublic/delete.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @if ($i == $y)
                    @php
                        $y += 7;
                    @endphp
                    <p></p>
                @endif
            @endforeach

            @if ($posisi->posisi === 'common' && count($dataweb) === 5)
            @else
                    <div class="card custom-card mx-2 mb-3" style="width: 147px; height: 147px">
                        <a href="/anfiniti/input" class=" text-decoration-none" style="line-height: 16px">
                            <div class="card-body text-center">
                                <div class="row justify-content-center" style="margin-top:15px">
                                    <div class="col-md-1 d-flex justify-content-center align-items-center mb-4 mx-3">
                                        <div class="col justify-content-center d-flex">
                                            <img src="/anfinitiPublic/tambahan.png" class="card-img-top" style="width: 40px;"
                                                alt="Image">
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style = "margin-top: -16px">
                                    <div class="col">
                                        <p class="card-title
                                        fw-bold text-dark" style="font-size: 13px; color: #212529">Klik untuk Tambah</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
            @endif

            {{-- Input --}}

            {{-- EndInput --}}
        </div>
</body>


<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>
<script src="anfinitiPublic/script.js"></script>

</html>
