@extends('orm.index')
@section('jenis', 'Many to Many')
@section('judul', 'Data Hadiah')
@section('isi')
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Pengguna</th>
                <th>Hadiah</th>
                <th width="1%">Jumlah</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($anggota as $data)
                <tr>
                    <td>{{ $data->nama }}</td>
                    <td>
                        <ul>
                            @foreach ($data->hadiah as $item)
                                <li>{{ $item->nama_hadiah }}</li>
                            @endforeach
                        </ul>
                    </td>
                    <td class="text-center">{{$data->hadiah->count()}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
