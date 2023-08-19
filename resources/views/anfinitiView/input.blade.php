<div class="row justify-content-center">
    <img src="/anfinitiPublic/logodark.png" class="mt-4" style="width: 250px;" alt="">
    <div class="col-auto d-flex justify-content-center align-items-center" style="height:350px">
        <form style="width: 350px;" method="POST" action="/anfiniti/inputproses" enctype="multipart/form-data">
            {{ csrf_field() }}
            <h4 class="text-center">--- Tambahkan Web ---</h4>
            <div class="row justify-content-center mt-4">
                <div class="col-auto">
                    <div class="form-group">
                        <label for="namaWeb">Nama Web</label>
                        <input type="text" class="form-control mb-2" id="namaWeb" name="namaWeb"
                            placeholder="Masukin nama web disini" style="width: 300px" autofocus>
                    </div>
                    <div class="form-group">
                        <label for="link">Link</label>
                        <input type="text" class="form-control" style="width: 300px" id="link" name="link"
                            placeholder="Masukin linknya disini">
                    </div>
                    <div class="form-group" style="width: 300px">
                        <label for="gambar">Gambar</label>
                        <input type="file" class="form-control-file" style="width: 300px" id="gambar" name="gambar">
                    </div>
                    <div class="tombol text-center mt-5">
                        <input type="submit" class="btn text-light btn-dark btn-block w-75"
                            style="font-size: 9pt" value="Tambahkan" name="tombolInput">
                        <input type="submit" class="btn btn-outline-dark btn-block"
                            style="font-size: 9pt" value="Batal" name="tombolBatal">
                    </div>
                </div>
            </div>
        </form>
        

    </div>
</div>
