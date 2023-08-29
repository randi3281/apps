<div class="row justify-content-center">
    <img src="/anfinitiPublic/logodark.png" class="mt-4 mb-4" style="width: 250px;" alt="">
    <div class="col-auto d-flex justify-content-center align-items-center" style="height:350px">
        <form style="width: 350px;" method="POST" action="/anfiniti/editproses" enctype="multipart/form-data">
            {{ csrf_field() }}
            @php
                session_start();
                $_SESSION['idEdit'] = $dataweb->id;
            @endphp
            <h5 class="text-center mt-4">Edit Web</h5>
            <div class="row justify-content-center mt-3">
                <div class="col-auto">
                    <div class="form-group">
                        <label for="namaWeb">Nama Web</label>
                        <input type="text" class="form-control mb-2" id="namaWeb" value="{{ $dataweb->nama_web }}"
                            style="width: 300px" name="namaWeb" autofocus>
                    </div>
                    <div class="form-group">
                        <label for="link">Link</label>
                        <input type="text" class="form-control" style="width: 300px" id="link" name="link"
                            value="{{ $dataweb->link }}">
                    </div>

                    <div class="form-group" style="width: 300px">
                        <label for="gambar">Gambar</label>
                        <br>
                        <img src="/anfinitiPublic/images/{{ $dataweb->gambar }}" alt="">
                        <input type="hidden" value="{{ $dataweb->gambar }}" name="gambarnya">
                        <input type="file" class="form-control-file" style="width: 70px; height: 70px" id="gambar"
                            name="gambar">
                    </div>
                    <div class="tombol text-center mt-4">
                        <input type="submit" class="btn text-light btn-dark btn-block w-75" style="font-size: 9pt"
                            value="Edit" name="tombolEdit">
                        <input type="submit" class="btn btn-outline-dark btn-block" style="font-size: 9pt"
                            value="Kembali" name="tombolKembali">
                    </div>
                </div>
            </div>
        </form>

    </div>
</div>
