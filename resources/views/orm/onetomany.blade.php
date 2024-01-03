@extends('orm.index')
@section('jenis', 'One to Many')
@section('judul', 'Data Artikel')
@section('isi')
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Artikel</th>
                <th>Tag</th>
                <th>Jumlah Tag</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($artikel as $data)
                <tr>
                    <td>{{ $data->judul }}</td>
                    <td>
                        @foreach ($data->tag as $item)
                            {{ $item->tag }},
                        @endforeach
                    </td>
                    <td>{{ $data->tag->count() }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
