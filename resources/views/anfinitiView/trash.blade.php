<div class="row justify-content-center">
    <img src="/anfinitiPublic/logodark.png" class="mt-5 " style="width: 250px;" alt="">
    <div class="col-auto d-flex justify-content-center align-items-center" style="height:350px">
        <form method="POST" action="/anfiniti/trashproses" style="width: 350px;">
            {{ csrf_field() }}
            <h5 class="text-center">Trash</h5>
            <div class="row justify-content-center mt-4">
                <div class="col-auto">
                    <div class="form-group">
                        <label for="namaWeb">Nama Web yang Terhapus</label>
                        <select class="form-select" name="idData" id="idData" >
                            @if($dataweb->count() == 0)
                                <option value="" disabled selected hidden>-- Pilih Web ---</option>
                            @endif
                            @foreach ($dataweb as $data)
                            <option value="{{ $data->id }}">{{ $data->nama_web }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="tombol text-center mt-5">
                        <input type="submit" class="btn text-light btn-dark btn-block"
                            style="font-size: 9pt" value="Kembalikan" name="tombolKembalikan">
                        <input type="submit" class="btn btn-danger btn-block" style="font-size: 9pt" value="Hapus Selamanya" name="tombolHapusSelamanya">
                    </div>
                    <div class="tombol text-center mt-2">
                        <input type="submit" class="btn text-light btn-dark btn-block"
                            style="font-size: 9pt" value="Kembalikan Semua" name="tombolKembalikanSemua">
                        <input type="submit" class="btn btn-danger btn-block" style="font-size: 9pt" value="Hapus Semua Selamanya" name="tombolHapusSemuaSelamanya">
                    </div>
                    <div class="tombol text-center mt-2">
                        <input type="submit" class="btn btn-outline-dark btn-block w-100"
                            style="font-size: 9pt" value="Kembali" name="tombolKembali">
                    </div>
                </div>
            </div>
        </form>

    </div>
</div>
