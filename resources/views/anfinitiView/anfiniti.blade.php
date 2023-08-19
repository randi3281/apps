<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="/anfinitiPublic/aa.png" type="image/x-icon">
    <title>nfiniti - / An . fi . ni . ti /</title>
    @vite('resources/sass/app.scss')
</head>

<body class="bg-dark">
    <div class="container-fluid">
        <div class="row justify-content-between">
            <div class="col-md-6">
                <img src="/anfinitiPublic/logo.png" style="width: 384px; height: 109px; margin-left: 100px"
                    class="mt-5" alt="">
            </div>
            <div class="col-md-6 d-flex justify-content-end align-items-center">
                <a href="/anfiniti/keluar" style=" margin-right: 120px">
                    <img src="/anfinitiPublic/keluar.png" style="width: 150px;" class="mt-5" alt="">
                </a>
            </div>
        </div>
        @php
            $y = 6;
        @endphp
        <div class="row justify-content-center mt-5">
            
            @foreach ($anfinitiDataweb as $item)
                <div class="card custom-card mx-2" style="width: 147px; height: 147px">
                    <div class="card-body text-center">
                        <div class="row justify-content-center" style="margin-top:-10px">
                            <div class="col-md-1 d-flex justify-content-center align-items-center mb-4 mx-3">
                                <div class="col justify-content-center d-flex">
                                    
                                    <img src="/anfinitiPublic/{{ $item->gambar }}" class="card-img-top"
                                        style="width: 70px; height: 70px" alt="Image">
                                </div>
                            </div>
                            <div class="row" style="margin-top: -15px">
                                <div class="col">
                                    <p class="card-title fw-bold">{{ $item->nama_web }}</p>
                                </div>
                            </div>
                            <div class="row justify-content-center" style="margin-top: -4px">
                                <div class="col justify-content-between d-flex align-items-center">
                                    <a href="">
                                        <img src="/anfinitiPublic/edit.png" alt="">
                                    </a>
                                    <a href="">
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

            <div class="card custom-card mx-2" style="width: 147px; height: 147px">
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
                        <div class="row" style="margin-top: -16px">
                            <div class="col">
                                <p class="card-title fw-bold text-dark" style="font-size: 13px; color: #212529">Klik
                                    untuk Tambah</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            {{-- Input --}}

            {{-- EndInput --}}
        </div>
</body>

</html>
