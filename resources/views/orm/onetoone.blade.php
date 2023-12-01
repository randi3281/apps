@extends('orm.index')
@section('jenis', 'One to One')
@section('judul', 'Data Nomor Telepon')
@section('isi')
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Pengguna</th>
                <th>Nomor Telepon</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pengguna as $data)
                <tr>
                    <td>{{ $data->nama }}</td>
                    <td>{{ $data->telepon->nomor_telepon }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
