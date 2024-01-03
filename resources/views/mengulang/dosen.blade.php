<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dosen</title>
</head>

<body>
    <h1>Tutorial Passing Data Laravel</h1>
    <a href="https://www.malasngoding.com/category/laravel"> www.malasngoding.com</a>

    <br>

    <p>Nama : {{ $nama }}</p>

    <p>Mata Kuliah:</p>
    <ul>
        @foreach ($matkul as $m)
            <li>{{ $m }}</li>
        @endforeach
    </ul>

    <p>Buah Kesukaan:</p>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama Buah</th>
        </tr>
        @foreach ($buah as $b)
            <tr>
                <td>{{ $nomor++ }}</td>
                <td>{{ $b }}</td>
            </tr>
        @endforeach
    </table>
</body>

</html>
