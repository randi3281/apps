<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="description" content="Website Desa Lebakbarang">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- icon --}}
    <link rel="icon" href="/lebakbarangPublic/images/logonew.ico" type="image/x-icon">
    <title>@yield('title')</title>
    <!-- Favicon -->
    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="/lebakbarangPublic/plugins/bootstrap/css/bootstrap.min.css">
    <!-- Icon Font Css -->
    <link rel="stylesheet" href="/lebakbarangPublic/plugins/icofont/icofont.min.css">
    <!-- Slick Slider  CSS -->
    <link rel="stylesheet" href="/lebakbarangPublic/plugins/slick-carousel/slick/slick.cstests">
    <link rel="stylesheet" href="/lebakbarangPublic/plugins/slick-carousel/slick/slick-theme.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="/lebakbarangPublic/css/style.css">
</head>

<body id="top">
            <header>
            <div class="header-top-bar">
                <div class="container">
                    <span class="font-weight-bold mx-auto d-block text-center">DESA LEBAKBARANG - KECAMATAN LEBAKBARANG -
                        KABUPATEN PEKALONGAN</span>
                </div>
            </div>
            <nav class="navbar navbar-expand-lg navbar-light bg-light" id="navbar">
                <div class="container">
                    <a class='navbar-brand' href='{{ route('lebakbarang.beranda') }}' style="width: 250px">
                        <img src="{{ asset('lebakbarangPublic/images/logo.png') }}" alt="" class="img-fluid">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarmain"
                        aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarmain">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class='nav-link' href="{{ route('lebakbarang.beranda') }}">Beranda</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdown01" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">Profil<i class="icofont-thin-down"></i></a>
                                <div class="dropdown-menu" aria-labelledby="dropdown01">
                                    <a class='dropdown-item' href="{{ route('lebakbarang.sejarah-desa') }}">Sejarah Desa</a>
                                    <a class='dropdown-item' href="{{ route('lebakbarang.visi-misi') }}">Visi Misi</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdown02" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">Kondisi Desa<i class="icofont-thin-down"></i></a>
                                <div class="dropdown-menu" aria-labelledby="dropdown02">
                                    <a class='dropdown-item' href="{{ route('lebakbarang.demografi') }}">Demografi</a>
                                    <a class='dropdown-item' href="{{ route('lebakbarang.keadaan-sosial') }}">Keadaan Sosial</a>
                                    <a class='dropdown-item' href="{{ route('lebakbarang.keadaan-ekonomi') }}">Keadaan Ekonomi</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdown03" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">Pemerintahan<i class="icofont-thin-down"></i></a>
                                <div class="dropdown-menu" aria-labelledby="dropdown03">
                                    <a class='dropdown-item' href="{{ route('lebakbarang.lembaga-pemerintahan') }}">Lembaga Pemerintahan</a>
                                    <a class='dropdown-item' href="{{ route('lebakbarang.lembaga-kemasyarakatan') }}">Lembaga Kemasyarakatan</a>
                                    <a class='dropdown-item' href="{{ route('lebakbarang.pembagian-wilayah') }}">Pembagian Wilayah</a>
                                    <a class='dropdown-item' href="{{ route('lebakbarang.struktur-organisasi') }}">Struktur Organisasi</a>
                                </div>
                            </li>
                            <li class="nav-item active">
                                <a class='nav-link' href="{{ route('lebakbarang.pengaduan') }}">Pengaduan</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
    @yield('content')

    <footer class="footer section gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mr-auto col-sm-6">
                    <div class="widget mb-5 mb-lg-0">
                        <div class="logo mb-4">
                            <img src="/lebakbarangPublic/images/logo.png" alt="" class="img-fluid">
                        </div>
                        <p>Desa Lebak Barang <br> Kecamatan Pekalongan <br> Kabupaten Pekalongan <br> Provinsi Jawa
                            Tengah</p>
                        <ul class="list-inline footer-socials mt-4">
                            <li class="list-inline-item"><a href="https://www.facebook.com/"><i
                                        class="icofont-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="pengaduan.php"><i class="icofont-email"></i></a>
                            </li>
                        </ul>

                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="widget mb-5 mb-lg-0">
                        <h4 class="text-capitalize mb-3">Menu</h4>
                        <div class="divider mb-4"></div>
                        <ul class="list-unstyled footer-menu lh-35">
                            <li><a href='sejarah-desa.php'>Sejarah </a></li>
                            <li><a href='visi-misi.php'>Visi & Misi</a></li>
                            <li><a href='demografi.php'>Demografi</a></li>
                            <li><a href='struktur-organisasi.php'>Struktur Organisasi</a></li>
                            <li><a href='pengaduan.php'>Pengaduan</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="widget widget-contact mb-5 mb-lg-0">
                        <h4 class="text-capitalize mb-3">Kontak</h4>
                        <div class="divider mb-4"></div>
                        <div class="footer-contact-block mb-4">
                            <div class="icon d-flex align-items-center">
                                <a href="tel:+628">
                                    <i class="icofont-phone"></i>
                                </a>

                                <span class="h6 mb-0">Hubungi Kami Melalui</span>
                            </div>
                            <h4 class="mt-2"><a href='pengaduan.php'>Hubungi Kami Melalui</a></h4>
                        </div>
                        <!-- NO HP -->
                        <!-- <div class="footer-contact-block">
                                <div class="icon d-flex align-items-center">
                                    <i class="icofont-support mr-3"></i>
                                    <span class="h6 mb-0">HP</span>
                                </div>
                                <h4 class="mt-2"><a href="tel:+23-345-67890">+62 82231314343</a></h4>
                            </div> -->
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--
    Essential Scripts
    =====================================-->
    <!-- Main jQuery -->
    <script src="/lebakbarangPublic/plugins/jquery/jquery.js"></script>
    <!-- Bootstrap 4.3.2 -->
    <script src="/lebakbarangPublic/plugins/bootstrap/js/popper.js"></script>
    <script src="/lebakbarangPublic/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="/lebakbarangPublic/plugins/counterup/jquery.easing.js"></script>
    <!-- Slick Slider -->
    <script src="/lebakbarangPublic/plugins/slick-carousel/slick/slick.min.js"></script>
    <!-- Counterup -->
    <script src="/lebakbarangPublic/plugins/counterup/jquery.waypoints.min.js"></script>
    <script src="/lebakbarangPublic/plugins/shuffle/shuffle.min.js"></script>
    <script src="/lebakbarangPublic/plugins/counterup/jquery.counterup.min.js"></script>
    <script src="/lebakbarangPublic/js/script.js"></script>
    <script src="/lebakbarangPublic/js/contact.js"></script>
    <!--END-->
    <center>
        <small>copyright & copyright; Lebakbarang. All Rights Reserved</small>
    </center>
</body>

</html>
