<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FiifaPrint</title>
    <link rel="icon" href="/fiifaprintpublic/image/icon.png">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
</head>

<body class="bg-primary">
    <div class="container-fluid">
        <div class="row justify-content-center mt-4">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="/fiifaprintpublic/image/icon.png" class="mt-3" style="width: 100px"
                                alt="">
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-9 mt-4">
                                <h3 class="text-center">Ubah Profil</h3>
                                <hr class="mt-3">
                                <form action="/fiifaprint/login" method="post">
                                    {{ csrf_field() }}
                                    <div class="form-group mb-2">
                                        <label for="email">Nama Lengkap</label>
                                        <input type="text" name="email" class="form-control"
                                            placeholder="Masukkan Nama Lengkap Disini..." value="Randi Afif">
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="email">No HP</label>
                                        <input type="text" name="email" class="form-control"
                                            placeholder="Masukkan No HP Disini..." value="087856531788">
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="email">Email</label>
                                        <input type="text" name="email" class="form-control"
                                            placeholder="Masukkan Email Disini..." value="anfi3281@gmail.com">
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="password">Password Lama</label>
                                        <input type="password" name="password" class="form-control"
                                            placeholder="Masukkan Password Disini...">
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="password">Password Baru</label>
                                        <input type="password" name="password" class="form-control"
                                            placeholder="Masukkan Password Disini...">
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="password">Konfirmasi Password Baru</label>
                                        <input type="password" name="password" class="form-control"
                                            placeholder="Masukkan Password Disini...">
                                    </div>
                                    <hr>
                                    <div class="text-center">
                                        <input type="submit" value="Kembali" name="tombollogin"
                                            class="btn btn-danger mb-3">
                                        <input type="submit" value="Ubah" name="tombollogin"
                                            class="btn btn-primary w-50 mb-3">
                                        <div class="text-center" style="font-size: 11px">atau kamu mau daftar dengan <a href="" class="text-danger text-decoration-none">Google</a></div>
                                        <p class="text-center" style="font-size: 11px">Sudah punya akun? <a
                                                href="/fiifaprint" class="text-decoration-none">Login Disini</a></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
