<div class="row ">
    <div class="col-auto d-flex justify-content-center align-items-center" style="height:500px">
        <form style="width: 350px;" action="/anfiniti/loginproses" method="POST">
            {{ csrf_field() }}
            <h2 class="text-center">- Login -</h2>
            @if (isset($errornya))
                <p class="text-center text-danger" style="font-size: 11px">{{ $errornya }}</p>
            @endif
            <div class="row justify-content-center mt-3">
                <div class="col-auto">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control mb-2" id="username"
                            placeholder="Masukin username kamu disini" style="width: 300px" name="username" autofocus>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" style="width: 300px" id="password"
                            placeholder="Hayo passwordnya ingat enggak?" name="password">
                    </div>
                    <p class=" mb-4" style="font-size: 7pt">Kalau lupa passwordnya, <a
                            href="https://wa.me/6285930434857?text=Halo%2C%20saya%20lupa%20sandi%20aplikasi%20anfiniti">Klik
                            disini ya</a></p>
                    <div class="form-group mt-3">
                        <label style="margin-right: 12px">Captcha</label>
                        <img src="/captcha/captcha.php" alt="gambar">
                    </div>
                    <div class="form-group mt-3">
                        <input id="captcha" class="form-control" type="text" name="captcha"
                            placeholder="Masukin captcha di atas kesini" maxlength="6">
                    </div>
                    <div class="tombol text-center mt-5">
                        <input type="submit" name="tombolMasuk" class="btn text-light btn-dark btn-block w-75"
                            value="Masuk">
                        <input type="submit" name="tombolDaftar" class="btn btn-outline-dark btn-block" value="Daftar">
                    </div>
                </div>
            </div>
        </form>

    </div>
</div>
