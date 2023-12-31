<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hasil Proses</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card mt-5">
                    <div class="card-body">
                        <h3>Data yang diinput:</h3>
                        <table class="table table-bordered table-striped"> 
                            <tr>
                                <td style="width:150px">Nama</td>
                                <td>{{$data->nama}}</td>
                            </tr>
                            <tr>
                                <td>Pekerjaan</td>
                                <td>{{$data->pekerjaan}}</td>
                            </tr>
                            <tr>
                                <td>Usia</td>
                                <td>{{$data->usia}}</td>
                            </tr>
                        </table>
                        <a href="/mengulang/validation" class="btn btn-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
