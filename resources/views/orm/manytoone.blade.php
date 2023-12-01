@extends('orm.index')
@section('jenis', 'Many to One')
@section('judul', 'Data Tag')
@section('isi')
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Tag</th>
                <th>Artikel</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tag as $data)
                <tr>
                    <td>{{ $data->tag }}</td>
                    <td>
                        {{ $data->artikel->judul }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
