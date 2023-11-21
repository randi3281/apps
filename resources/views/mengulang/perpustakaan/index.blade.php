<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Perpustakaan</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <h3>Data Perpustakaan</h3>
                <table class="table table-striped table-bordered">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                    </tr>
                    @foreach ($perpustakaan as $data)
                        <tr>
                            <td>{{ $data->id }}</td>
                            <td>{{ $data->nama }}</td>
                            <td>{{ $data->alamat }}</td>
                        </tr>
                    @endforeach
                </table>
                {{$perpustakaan->links()}}
                <p>Data pertama adalah {{ $firstdata->nama }}</p>
                <p>Data yang pertama adalah {{ $finddata->nama }}</p>
                <ul>
                    @foreach ($queryfind as $item)
                        <li>{{$item->nama}}</li>
                        <li>{{$item->alamat}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</body>

</html>
