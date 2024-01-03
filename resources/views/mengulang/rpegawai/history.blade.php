<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pegawai</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
</head>

<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                CRUD data Pegawai
            </div>
            <div class="card-body">
                <div class="row justify-content-between">
                    <div class="col-lg-3">
                        <a href="/rpegawai" class="btn btn-primary">Kembali</a>
                    </div>
                    <div class="col-lg-9 text-end">
                        <a href="/rpegawai/restoresemua" class="btn btn-warning">Restore Semua</a>
                        <a href="/rpegawai/hapuspermanensemua" class="btn btn-danger">Hapus Permanen Semua</a>
                        <a href="/rpegawai/history" class="btn btn-primary">Histori Penghapusan</a>
                    </div>
                </div>
                <br>
                <br>
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($rpegawai as $data)
                            <tr>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->alamat }}</td>
                                <td>
                                    <a href="/rpegawai/restore/{{ $data->id }}" class="btn btn-warning">Restore</a>
                                    <a href="/rpegawai/hapuspermanen/{{ $data->id }}" class="btn btn-danger">Hapus Permanen</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $rpegawai->links() }}
            </div>
        </div>
    </div>
</body>

</html>
