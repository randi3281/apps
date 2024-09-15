<div class="row mt-5 justify-content-end">
    <div class="col-md-12">
        <h1 class="mb-5 text-center"><b>Mutasi</b></h1>
        <form class="mb-3" action="{{ route('aait.proses.mutasi_pilihan') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="area"><b>Pilih Area : </b></label>
                <select class="form-control-sm my-2" id="area" name="area" style="width: 200px">
                    <option value="{{ $_SESSION['mutasi_area'] }}" name="{{ $_SESSION['mutasi_area'] }}">
                        @php
                            $cek_area = [];
                            $cek_area[] = $_SESSION['mutasi_area'];
                        @endphp
                        {{ $_SESSION['mutasi_area'] }}
                        @foreach ($data_user as $item)
                            @if (!in_array($item->area, $cek_area))
                                @php
                                    $cek_area[] = $item->area;
                                @endphp
                    <option value="{{ $item->area }}" name="{{ $item->area }}">{{ $item->area }} </option>
                    @endif
                    @if (!in_array('all', $cek_area))
                        @php
                            $cek_area[] = 'all';
                        @endphp
                        <option value="all" name="all">all</option>
                    @endif
                    @endforeach
                </select>
                <label for="bulan" class="ms-2"><b>Bulan : </b></label>
                <select class="form-control-sm my-2" id="bulan" name="bulan" style="width: 200px">
                    <option value="{{ $_SESSION['mutasi_bulan'] }}" name="{{ $_SESSION['mutasi_bulan'] }}">
                        @php
                            $cek_bulan = [];
                            $cek_bulan[] = $_SESSION['mutasi_bulan'];
                        @endphp
                        {{ $_SESSION['mutasi_bulan'] }}
                        @foreach ($mutasi_old as $item)
                            @if (!in_array($item->bulan, $cek_bulan))
                                @php
                                    $cek_bulan[] = $item->bulan;
                                @endphp
                    <option value="{{ $item->bulan }}" name="{{ $item->bulan }}">{{ $item->bulan }} </option>
                    @endif
                    @if (!in_array('all', $cek_bulan))
                        @php
                            $cek_bulan[] = 'all';
                        @endphp
                        <option value="all">all</option>
                    @endif
                    @endforeach
                </select>
                <label for="tahun" class="ms-2"><b>Tahun : </b></label>
                <select class="form-control-sm my-2" id="tahun" name="tahun" style="width: 200px">
                    <option value="{{ $_SESSION['mutasi_tahun'] }}" name="{{ $_SESSION['mutasi_tahun'] }}">
                        @php
                            $cek_tahun = [];
                            $cek_tahun[] = $_SESSION['mutasi_tahun'];
                        @endphp
                        {{ $_SESSION['mutasi_tahun'] }}
                        @foreach ($mutasi_old as $item)
                            @if (!in_array($item->tahun, $cek_tahun))
                                @php
                                    $cek_tahun[] = $item->tahun;
                                @endphp
                    <option value="{{ $item->tahun }}" name="{{ $item->tahun }}">{{ $item->tahun }} </option>
                    @endif
                    @if (!in_array('all', $cek_tahun))
                        @php
                            $cek_tahun[] = 'all';
                        @endphp
                        <option value="all">all</option>
                    @endif
                    @endforeach
                </select>
                <input type="submit" class="btn btn-primary btn-sm ms-3" style="width: 250px" value="Submit" name="tombolsubmit">
                {{-- buatkan kolom cari dan tombolnya --}}
                <br>
                <label for="cari" class="ms-2"><b>Cari : </b></label>
                <input type="text" class="form-control-sm my-2" id="cari" name="cari" style="width: 200px"
                    placeholder="Cari">
                <input type="submit" class="btn btn-primary btn-sm ms-3" style="width: 250px" value="Cari" name="tombolcari">
            </div>
        </form>


        <div class="table-responsive">
            <table class="table " id="table-1" style="min-width: 900px">
                <thead class="custom-thead">
                    <tr class="text-center">
                        <th>No</th>
                        <th>Asset</th>
                        <th>Kode FA</th>
                        <th>Nama Barang</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datanya as $data)
                        <tr class="align-middle ">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $data->asset }}</td>
                            <td>{{ $data->kode_fa_fams }}</td>
                            <td>{{ $data->nama_barang }}</td>
                            <td class="text-center">
                                <button class="btn btn-primary toggle-details">+</button>
                                </form>
                            </td>
                        </tr>
                        <tr class="details-row d-none">
                            <td colspan="10">
                                <table class="table table-bordered">
                                    <tr>
                                        <th style="width: 250px">Tanggal Perolehan</th>
                                        <td>{{ $data->tanggal_perolehan }}</td>
                                    </tr>
                                    <tr>
                                        <th>Acquis Val</th>
                                        <td>{{ $data->acquis_val }}</td>
                                    </tr>
                                    <tr>
                                        <th>Accum Dep</th>
                                        <td>{{ $data->accum_dep }}</td>
                                    </tr>
                                    <tr>
                                        <th>Book Val</th>
                                        <td>{{ $data->book_val }}</td>
                                    </tr>
                                    <tr>
                                        <th>Outlet Pencatatan</th>
                                        <td>{{ $data->outlet_pencatatan }}</td>
                                    </tr>
                                    <tr>
                                        <th>Outlet Actual</th>
                                        <td>{{ $data->outlet_actual }}</td>
                                    </tr>
                                    <tr>
                                        <th>Type Barang</th>
                                        <td>{{ $data->type_barang }}</td>
                                    </tr>
                                    <tr>
                                        <th>Location</th>
                                        <td>{{ $data->location }}</td>
                                    </tr>
                                    <tr>
                                        <th>Jabatan</th>
                                        <td>{{ $data->jabatan }}</td>
                                    </tr>
                                    <tr>
                                        <th>Nama User</th>
                                        <td>{{ $data->nama_user }}</td>
                                    </tr>
                                    <tr>
                                        <th>NIK</th>
                                        <td>{{ $data->nik }}</td>
                                    </tr>
                                    <tr>
                                        <th>Komputer Nama</th>
                                        <td>{{ $data->komputer_nama }}</td>
                                    </tr>
                                    <tr>
                                        <th>IP Address</th>
                                        <td>{{ $data->ip_address }}</td>
                                    </tr>
                                    <tr>
                                        <th>Kondisi</th>
                                        <td>{{ $data->kondisi }}</td>
                                    </tr>
                                    <tr>
                                        <th>Keterangan</th>
                                        <td>{{ $data->keterangan }}</td>
                                    </tr>
                                    <tr>
                                        <th>Serial Number</th>
                                        <td>{{ $data->serial_number }}</td>
                                    </tr>
                                    <tr>
                                        <th>Sophos</th>
                                        <td>{{ $data->sophos }}</td>
                                    </tr>
                                    <tr>
                                        <th>Landesk</th>
                                        <td>{{ $data->landesk }}</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{ $datanya->links('pagination::bootstrap-4') }}

        <script>
            document.querySelectorAll('.toggle-details').forEach(function(button) {
                button.addEventListener('click', function() {
                    var detailsRow = this.closest('tr').nextElementSibling;
                    detailsRow.classList.toggle('d-none');
                    this.textContent = detailsRow.classList.contains('d-none') ? '+' : '-';
                });
            });
        </script>
    </div>
</div>
