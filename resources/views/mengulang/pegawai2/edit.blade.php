<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data Pegawai</title>
</head>

<body>
    <h1>Edit Data Pegawai</h1>
    <br>
    <br>
    @foreach ($pegawai as $p)
        <form action="editproses" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $p->id }}">
            Nama:
            <input type="text" name="nama" value="{{ $p->pegawai_nama }}"><br>
            Jabatan:
            <input type="text" name="jabatan" value="{{ $p->pegawai_jabatan }}"><br>
            Umur:
            <input type="text" name="umur" value="{{ $p->pegawai_umur }}"><br>
            Alamat:
            <textarea name="alamat" cols="30" rows="10">{{ $p->pegawai_alamat }}</textarea><br>
            <input type="submit" name="edit" value="Edit">
        </form>
    @endforeach
    <a href="/mengulang/pegawai2">Kembali</a>
</body>

</html>
