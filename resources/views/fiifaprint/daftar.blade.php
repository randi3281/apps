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
                <div class="card" style="height: 600px">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="/fiifaprintpublic/image/icon.png" class="mt-3" style="width: 100px"
                                alt="">
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-9 mt-4">
                                <h3 class="text-center">Daftar</h3>
                                <hr class="mt-3">
                                <form action="/fiifaprint/login" method="post">
                                    {{ csrf_field() }}
                                    <div class="form-group mb-2">
                                        <label for="email">Email</label>
                                        <input type="text" name="email" class="form-control"
                                            placeholder="Masukkan Email Disini...">
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="password">Password</label>
                                        <input type="password" name="password" class="form-control"
                                            placeholder="Masukkan Password Disini...">
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="password">Konfirmasi Password</label>
                                        <input type="password" name="password" class="form-control"
                                            placeholder="Masukkan Password Disini...">
                                    </div>
                                    <hr>
                                    <div class="text-center">
                                        <input type="submit" value="Daftar" name="tombollogin"
                                            class="btn btn-primary mb-3">
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
