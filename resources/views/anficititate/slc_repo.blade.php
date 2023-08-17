<h1 class="text-center fs-3 mt-5 mb-4" style="font-family: 'Times New Roman', Times, serif">PILIH REPOSITORI</h1>
<div class="row text-center justify-content-center" style="font-size: 9pt; margin-top:-10px; margin-bottom: -20px">
    <p>
        <a class="text-white">-</a>
        <a class="text-danger" style="text-decoration: none">
            @if (isset($pesan))
                @php
                    echo $pesan;
                @endphp
            @endif
        </a>
        <a class="text-white">-</a>
    </p>
</div>
<div class="row justify-content-center">
    <div class="col-sm-8 ">
        <form action="/anficititate/home" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="repository">Repositori</label>
                {{-- <input id="my-input" class="form-control" type="text" name=""> --}}
                <select class="form-select" name="repository">
                    @foreach ($datarepo as $repodata)
                        <option value="{{ $repodata->repositori }}">{{ $repodata->repositori }}</option>
                    @endforeach
                </select>
            </div>
            <p style="font-size: 7pt">Atau ingin untuk <a href="/anficititate/del_repo" class="text-danger">Hapus
                    Repositori</a> atau <a href="/anficititate/upd_repo">Ganti Nama
                    Repositori</a></p>
            <div class="form-group" style="margin-top: -15px">
                <label for="pin">Kampus</label>
                <select name="kampus" id="" class="form-select">
                    @foreach ($kampus as $ackampus)
                        @if ($ackampus->alias == $kampusnya)
                            <option value="{{ $ackampus->alias }}" selected>{{ $ackampus->nama_kampus }}</option>
                        @else
                            <option value="{{ $ackampus->alias }}">{{ $ackampus->nama_kampus }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="form-group mt-1">
                <label for="pin">PIN</label>
                <input id="pin" class="form-control" type="password" maxlength="6" name="pin" minlength="6"
                    autofocus placeholder="Masukin PIN kamu disini ya">
            </div>
            <p style="font-size: 7pt">Kalau kamu mau ubah PIN, <a href="/anficititate/lupa_pin">Klik Disini</a></p>
            <div class="text-center mt-4">
                @php
                    $izin = 1;
                @endphp
                @foreach ($datarepo as $repodata)
                    @if (isset($repodata))
                        @php
                            $izin = 0;
                        @endphp
                    @endif
                @endforeach
                @if ($izin == 1)
                    <input type="submit" style="height: 38px; font-size: 11px; font-weight: bold"
                        class="btn btn-outline-danger w-25 " name="enter" disabled value="MASUK">
                    <input type="submit" style="height: 38px; font-size: 9px; font-weight: bold"
                        class="btn btn-primary w-50"name="new" value="BUAT REPOSITORI BARU">
                @else
                    <input type="submit" style="height: 38px; font-size: 11px; font-weight: bold"
                        class="btn btn-primary w-25" name="enter" value="MASUK">
                    <input type="submit" style="height: 38px; font-size: 9px; font-weight: bold"
                        class="btn btn-outline-primary w-50"name="new" value="BUAT REPOSITORI BARU">
                @endif
                <p class="mt-2" style="font-size: 7pt">Ingin Logout? <a href="/anficititate/back" class="text-danger">Klik Disini</a>
                </p>
            </div>
        </form>
    </div>
</div>
