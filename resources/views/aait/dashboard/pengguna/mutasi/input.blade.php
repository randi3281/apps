<table class="table table-borderless mt-5">
    <thead>
        <tr class="text-center align-text-center" style="height: 80px">
            <th>
                <h3>Input</h3>
            </th>
        </tr>
    </thead>
    <tbody>
        <form action="{{ route('aait.proses.pengguna.mutasi.store') }}" method="POST">
            @csrf

            @if ($errors->any())
                <tr>
                    <td>
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </td>
                </tr>
            @endif
            <tr>
                <td>
                    <div class="form-group mx-3">
                        <label for="tanggal_perolehan">Tanggal Perolehan</label>
                        <input type="date" name="tanggal_perolehan" id="tanggal_perolehan" class="form-control" autofocus>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="form-group mx-3">
                        <label for="nama_barang_asset">Asset</label>
                        <input type="text" name="nama_barang_asset" id="nama_barang_asset" class="form-control" autofocus>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="form-group mx-3">
                        <label for="kode_fa_fams">Kode FA</label>
                        <input type="text" name="kode_fa_fams" id="kode_fa_fams" class="form-control" autofocus>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="form-group mx-3">
                        <label for="nama_barang">Nama Barang</label>
                        <input type="text" name="nama_barang" id="nama_barang" class="form-control" autofocus>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="form-group mx-3">
                        <label for="outlet_pencatatan">Outlet Actual</label>
                        <input type="text" name="outlet_pencatatan" id="outlet_pencatatan" class="form-control" autofocus>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="form-group mx-3">
                        <label for="outlet_actual">Type Barang</label>
                        <input type="text" name="outlet_actual" id="outlet_actual" class="form-control" autofocus>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="form-group mx-3">
                        <label for="type_barang">Location</label>
                        <input type="text" name="type_barang" id="type_barang" class="form-control" autofocus>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="form-group mx-3">
                        <label for="location">Jabatan</label>
                        <input type="text" name="location" id="location" class="form-control" autofocus>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="form-group mx-3">
                        <label for="jabatan">User Domain</label>
                        <input type="text" name="jabatan" id="jabatan" class="form-control" autofocus>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="form-group mx-3">
                        <label for="nama_user">NIK</label>
                        <input type="text" name="nama_user" id="nama_user" class="form-control" autofocus>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="form-group mx-3">
                        <label for="nik">Komputer Nama</label>
                        <input type="text" name="nik" id="nik" class="form-control" autofocus>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="form-group mx-3">
                        <label for="nama_komputer">IP Address</label>
                        <input type="text" name="nama_komputer" id="nama_komputer" class="form-control" autofocus>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="form-group mx-3">
                        <label for="ip_address">Kondisi</label>
                        <input type="text" name="ip_address" id="ip_address" class="form-control" autofocus>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="form-group mx-3">
                        <label for="kondisi">Keterangan</label>
                        <input type="text" name="kondisi" id="kondisi" class="form-control" autofocus>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="form-group mx-3">
                        <label for="keterangan">Serial Number</label>
                        <input type="text" name="keterangan" id="keterangan" class="form-control" autofocus>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="form-group mx-3">
                        <label for="shopos" class="me-2">Sophos</label>
                        <select name="shopos" id="shopos" class="form-control-sm w-25 me-3">
                            <option value="iya">Iya</option>
                            <option value="tidak">Tidak</option>
                        </select>
                        <label for="landesk" class="me-2">Landesk</label>
                        <select name="landesk" id="landesk" class="form-control-sm w-25">
                            <option value="iya">Iya</option>
                            <option value="tidak">Tidak</option>
                        </select>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="form-group mx-3">
                        <label for="mutasi_asal">Mutasi Asal</label>
                        <input type="text" name="mutasi_asal" id="mutasi_asal" class="form-control" autofocus>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="form-group mx-3">
                        <label for="mutasi_tujuan">Mutasi Tujuan</label>
                        <input type="text" name="mutasi_tujuan" id="mutasi_tujuan" class="form-control" autofocus>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="form-group mx-3">
                        <label for="keterangan_mutasi">Keterangan Mutasi</label>
                        <input type="text" name="keterangan_mutasi" id="keterangan_mutasi" class="form-control" autofocus>
                    </div>
                </td>
            </tr>

            <tr class="text-center">
                <td>
                    <button type="submit" class="btn btn-primary w-50 mb-2">Submit</button>
                </td>
            </tr>
        </form>
    </tbody>
</table>
