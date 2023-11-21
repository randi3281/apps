<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Pegawai</title>
</head>
<body>
    <h1>Tambah Data Pegawai</h1>
    <br>
    <br>
    <form action="tambahproses" method="POST">
        {{ csrf_field() }}
        Nama:
        <input type="text" name="nama"><br>
        Jabatan:
        <input type="text" name="jabatan"><br>
        Umur:
        <input type="text" name="umur"><br>
        Alamat: <textarea name="alamat" cols="30" rows="10"></textarea><br>
        <input type="submit" name="tambah" value="Tambah">
    </form>
    <a href="/mengulang/pegawai2">Kembali</a>
</body>
</html>