<div class="row ">
    <div class="col-auto d-flex justify-content-center align-items-center" style="height:500px">
        <form style="width: 350px;" action="/anfiniti/lupasandicekproses" method="POST">
            {{ csrf_field() }}
            <h2 class="text-center">- Autentikasi -</h2>
            @if (isset($errornya))
                <p class="text-center text-danger" style="font-size: 11px">{{ $errornya }}</p>
            @endif
            <div class="row justify-content-center mt-3">
                <div class="col-auto">
                    <div class="form-group">
                        <label for="kodeUnik">Kode Unik</label>
                        <input type="text" class="form-control mb-2" id="kodeUnik"
                            placeholder="Masukin kode unik disini" style="width: 300px" name="kodeUnik" autofocus>
                    </div>
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
                        <input type="submit" name="tombolLogin" class="btn btn-outline-dark btn-block" value="Login">
                    </div>
                </div>
            </div>
        </form>

    </div>
</div>
