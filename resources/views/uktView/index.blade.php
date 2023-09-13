<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STEKTA - Sistem Terintegrasi Kewirausahaan Technosantri</title>
    <link rel="icon" href="/uktPublic/logo.ico" type="image/x-icon">
    <!-- Tambahkan link Bootstrap CSS -->
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/uktPublic/style.css">
</head>

<body class="fr">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 justify-content-center align-items-center d-flex" style="height: 650px">
                <div class="card w-100 custom-shadow">
                    <div class="card-body">
                        <div class="d-flex justify-content-center disabled">
                            <img class="img-fluid mt-2 w-25 mb-3 mx-auto" src="/uktPublic/logo.png" alt="">
                        </div>
                        <p class="text-center fs-5 fw-bold" style="margin-bottom: -10px"> <span
                                style="color: #00b4fa">STEK</span><span style="color: #33cc33">TA</span></p>
                        <hr>
                        <p class="text-center fs-6 fw-bold" style="margin-bottom: -2px; margin-top: -10px">SISTEM TERINTEGRASI</p>
                        <p class="text-center fs-6 fw-bold" style="margin-bottom: 15px">KEWIRAUSAHAAN TECHNOSANTRI</p>
                        <form action="/ukt/sistem/loginproses" method="POST" class="fs-14">
                            <div class="row justify-content-center">
                                <div class="col-md-10">
                                    <div class="mb-1 form-group">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="text" class="form-control" id="username" name="username"
                                            placeholder="Masukkan username kamu disini" required autofocus>
                                    </div>
                                    <div class="mb-1">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="password" name="password"
                                            placeholder="Masukkan password kamu disini" required>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label style="margin-right: 12px">Captcha</label>
                                        <img src="/captcha/captcha.php" alt="gambar">
                                    </div>
                                    <div class="form-group mt-3">
                                        <input id="captcha" class="form-control" type="text" name="captcha"
                                            placeholder="Masukkan captcha di atas kesini" maxlength="6">
                                    </div>
                                </div>
                            </div>
                            <div class="text-center mb-4 mt-4">
                                <button type="submit" class="btn w-50 btn-primary">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tambahkan script Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
</body>

</html>
