<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Request Data Laravel</title>
</head>

<body>
    <form action="formulir/proses" method="POST">
        {{ csrf_field() }}
        Nama :
        <input type="text" name="nama"> <br>
        Alamat:
        <input type="text" name="alamat"><br>
        <input type="submit" value="Simpan">
    </form>
</body>

</html>
