<div class="row text-center">
    <h1 class="mb-1 mt-4"><b>Penghapusan</b></h1>
</div>
<div class="row">
    <div class="col-md-4">
        @if (session('edit') == 'iya')
            @include('aait.dashboard.pengguna.penghapusan.edit')
        @else
            @include('aait.dashboard.pengguna.penghapusan.input')
        @endif
    </div>
    <div class="col-md-8 mt-5">
        <form class="mb-3" action="{{ route('aait.proses.penghapusan_pilihan') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="bulan" class="ms-2"><b>Bulan : </b></label>
                <select class="form-control-sm" id="bulan" name="bulan">
                    <option value="{{ $_SESSION['penghapusan_bulan'] }}" name="{{ $_SESSION['penghapusan_bulan'] }}">
                        @php
                            $cek_bulan = [];
                            $cek_bulan[] = $_SESSION['penghapusan_bulan'];
                        @endphp
                        {{ $_SESSION['penghapusan_bulan'] }}
                        @foreach ($penghapusan_old as $item)
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
                <select class="form-control-sm" id="tahun" name="tahun">
                    <option value="{{ $_SESSION['penghapusan_tahun'] }}" name="{{ $_SESSION['penghapusan_tahun'] }}">
                        @php
                            $cek_tahun = [];
                            $cek_tahun[] = $_SESSION['penghapusan_tahun'];
                        @endphp
                        {{ $_SESSION['penghapusan_tahun'] }}
                        @foreach ($penghapusan_old as $item)
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
                <button type="submit" class="btn btn-primary btn ms-3"><b>Submit</b></button>
            </div>
        </form>
        <table class="table table-bordered table-striped text-center">
            <thead class="custom-thead">
                <tr>
                    <th class="text-center text-wrapped">No</th>
                    <th class="text-center text-wrapped">Asset</th>
                    <th class="text-center text-wrapped">Kode FA FAMS</th>
                    <th class="text-center text-wrapped">Nama Barang</th>
                    <th class="text-center text-wrapped">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($datanya as $data)
                    <tr class="align-middle">
                        <td class="text-center text-wrapped">{{ $loop->iteration }}</td>
                        <td class="text-wrapped">{{ $data->asset }}</td>
                        <td class="text-wrapped">{{ $data->kode_fa_fams }}</td>
                        <td class="text-wrapped">{{ $data->nama_barang }}</td>
                        <td class="text-wrapped">
                            <button class="btn btn-primary toggle-details">+</button>
                            <a href="{{ route('aait.proses.pengguna.penghapusan.edit', ['id' => $data->id]) }}"
                                class="btn btn-warning">Edit</a>
                            <a href="{{ route('aait.proses.pengguna.penghapusan.delete', ['id' => $data->id]) }}"
                                class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <tr class="details-row d-none">
                        <td colspan="5">
                            <table class="table table-bordered">
                                <tr>
                                    <th class="text-wrapped">Tanggal Perolehan</th>
                                    <td class="text-wrapped">{{ $data->tanggal_perolehan }}</td>
                                </tr>
                                <tr>
                                    <th class="text-wrapped">Acquis Val</th>
                                    <td class="text-wrapped">{{ $data->acquis_val }}</td>
                                </tr>
                                <tr>
                                    <th class="text-wrapped">Accum Dep</th>
                                    <td class="text-wrapped">{{ $data->accum_dep }}</td>
                                </tr>
                                <tr>
                                    <th class="text-wrapped">Book Val</th>
                                    <td class="text-wrapped">{{ $data->book_val }}</td>
                                </tr>
                                <tr>
                                    <th class="text-wrapped">Outlet Pencatatan</th>
                                    <td class="text-wrapped">{{ $data->outlet_pencatatan }}</td>
                                </tr>
                                <tr>
                                    <th class="text-wrapped">Outlet Actual</th>
                                    <td class="text-wrapped">{{ $data->outlet_actual }}</td>
                                </tr>
                                <tr>
                                    <th class="text-wrapped">Type Barang</th>
                                    <td class="text-wrapped">{{ $data->type_barang }}</td>
                                </tr>
                                <tr>
                                    <th class="text-wrapped">Location</th>
                                    <td class="text-wrapped">{{ $data->location }}</td>
                                </tr>
                                <tr>
                                    <th class="text-wrapped">Jabatan</th>
                                    <td class="text-wrapped">{{ $data->jabatan }}</td>
                                </tr>
                                <tr>
                                    <th class="text-wrapped">Nama User</th>
                                    <td class="text-wrapped">{{ $data->nama_user }}</td>
                                </tr>
                                <tr>
                                    <th class="text-wrapped">NIK</th>
                                    <td class="text-wrapped">{{ $data->nik }}</td>
                                </tr>
                                <tr>
                                    <th class="text-wrapped">Komputer Nama</th>
                                    <td class="text-wrapped">{{ $data->komputer_nama }}</td>
                                </tr>
                                <tr>
                                    <th class="text-wrapped">IP Address</th>
                                    <td class="text-wrapped">{{ $data->ip_address }}</td>
                                </tr>
                                <tr>
                                    <th class="text-wrapped">Kondisi</th>
                                    <td class="text-wrapped">{{ $data->kondisi }}</td>
                                </tr>
                                <tr>
                                    <th class="text-wrapped">Keterangan</th>
                                    <td class="text-wrapped">{{ $data->keterangan }}</td>
                                </tr>
                                <tr>
                                    <th class="text-wrapped">Serial Number</th>
                                    <td class="text-wrapped">{{ $data->serial_number }}</td>
                                </tr>
                                <tr>
                                    <th class="text-wrapped">Sophos</th>
                                    <td class="text-wrapped">{{ $data->sophos }}</td>
                                </tr>
                                <tr>
                                    <th class="text-wrapped">Landesk</th>
                                    <td class="text-wrapped">{{ $data->landesk }}</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
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
