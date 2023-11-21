<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Pegawai</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
</head>

<body>
    <h1>Data Pegawai</h1>
    <p>Cari Data Pegawai:</p>
    <form action="/mengulang/pegawai2/cari">
        <input type="text" name="cari" placeholder="Cari Pegawai ....">
        <input type="submit" name="tombolcari" value="Cari">
        <input type="submit" name="tombolreset" value="Reset">
    </form>
    <a href="pegawai2/tambah">+ Tambah Pegawai Baru</a>
    <br>

    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Umur</th>
            <th>Alamat</th>
            <th>Opsi</th>
        </tr>
        @foreach ($pegawai as $p)
            <tr>
                <td>{{ $p->pegawai_nama }}</td>
                <td>{{ $p->pegawai_jabatan }}</td>
                <td>{{ $p->pegawai_umur }}</td>
                <td>{{ $p->pegawai_alamat }}</td>
                <td>
                    <a href="/mengulang/pegawai2/edit/{{ $p->id }}">Edit</a>
                    |
                    <a href="/mengulang/pegawai2/hapus/{{ $p->id }}">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
    <br>
    <br>

    {{$pegawai->links()}}

    Halaman : {{ $pegawai->currentPage() }}<br>
    Jumlah Data : {{ $pegawai->total() }}<br>
    Data per halaman : {{$pegawai->perPage()}}<br>
</body>

</html>
