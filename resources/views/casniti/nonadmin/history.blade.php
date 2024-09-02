@extends('casniti.master')

@section('judul_halaman', 'History')

@section('menu')
    <li class="nav-item">
        <a class="nav-link active mx-4" href="/casniti/ujian">Ujian</a>
    </li>
    <li class="nav-item">
        <a class="nav-link mx-4 active" style="font-weight: bold">History</a>
    </li>
@endsection

@section('konten')
    <div class="text-center custom-font mt-1" style="font-size: 18px">
        <h4>History Ujian</h4>
    </div>
    <div class="container mt-4">
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead class="thead-dark text-center">
                    <tr>
                        <th scope="col" style="width: 2.5%; white-space: nowrap;">No</th>
                        <th scope="col" style="width: 20%; white-space: nowrap;">Tanggal</th>
                        <th scope="col" style="width: 12.5%; white-space: nowrap;">Paket</th>
                        <th scope="col" style="width: 7.5%; white-space: nowrap;">Jenis 1</th>
                        <th scope="col" style="width: 5%; white-space: nowrap;">Nilai</th>
                        <th scope="col" style="width: 7.5%; white-space: nowrap;">Jenis 2</th>
                        <th scope="col" style="width: 5%; white-space: nowrap;">Nilai</th>
                        <th scope="col" style="width: 7.5%; white-space: nowrap;">Jenis 3</th>
                        <th scope="col" style="width: 5%; white-space: nowrap;">Nilai</th>
                        <th scope="col" style="width: 7.5%; white-space: nowrap;">Jenis 4</th>
                        <th scope="col" style="width: 5%; white-space: nowrap;">Nilai</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($akun as $data)
                        @foreach ($data->history as $isi)
                            <tr>
                                <td style="white-space: nowrap;" class="text-center">{{ $no }}</td>
                                <td style="white-space: nowrap;">{{ $isi->tanggal }}</td>
                                <td style="white-space: nowrap;">{{ $isi->paket }}</td>
                                <td style="white-space: nowrap;">{{ $isi->jenis1 }}</td>
                                <td style="white-space: nowrap;" class="text-center">{{ $isi->nilai1 }}</td>
                                <td style="white-space: nowrap;">{{ $isi->jenis2 }}</td>
                                <td style="white-space: nowrap;" class="text-center">{{ $isi->nilai2 }}</td>
                                <td style="white-space: nowrap;">{{ $isi->jenis3 }}</td>
                                <td style="white-space: nowrap;" class="text-center">{{ $isi->nilai3 }}</td>
                                <td style="white-space: nowrap;">{{ $isi->jenis4 }}</td>
                                <td style="white-space: nowrap;" class="text-center">{{ $isi->nilai4 }}</td>
                            </tr>
                            @php
                                $no++;
                            @endphp
                        @endforeach
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
