<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FiifaPrint</title>
    <link rel="icon" href="/fiifaprintpublic/image/icon.png">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
</head>

<body class="bg-primary">
    <div class="container-fluid">
        <div class="row justify-content-center mt-3">
            <div class="col-md-11">
                <a href="" type="button" class="btn btn-danger  me-3">Logout</a>
                <a href="/fiifaprint/pesananselesai" type="button" class="btn btn-success ">Pesanan Selesai</a>
                <a href="/fiifaprint/pesananterhapus" type="button" class="btn btn-secondary ">Pesanan Terhapus</a>
            </div>
        </div>
        <div class="row justify-content-center mt-3">
            <div class="col-md-11">
                <div class="card" style="height: 568px">
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-md-11 mt-2">
                                <h3 class="text-center">Daftar Pesanan</h3>
                                <hr class="mt-3">
                                <table class="table-bordered table table-striped">
                                    <tr class="text-center">
                                        <th style="width: 30px">No</th>
                                        <th style>Nama Pemesan</th>
                                        <th>Tanggal</th>
                                        <th>Waktu</th>
                                        <th>No HP</th>
                                        <th>Nama Pesanan</th>
                                        <th>Harga</th>
                                        <th>Status</th>
                                        <th style="width: 100px">File</th>
                                        <th style="width: 188px">Keterangan</th>
                                    </tr>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>Randi Afif</td>
                                        <td>10/01/2023</td>
                                        <td>11.33</td>
                                        <td>087856531788</td>
                                        <td>Skripsi</td>
                                        <td>30.000</td>
                                        <td class="text-center">Belum Terbayar <br><a href="">Detail</a></td>
                                        <td class="text-center"><a href="">Unduh</a></td>
                                        <td>
                                            <a href="" type="button"
                                                class="btn btn-warning text-light btn-sm">Edit</a>
                                            <a href="" type="button" class="btn btn-success btn-sm">Selesai</a>
                                            <a href="" type="button" class="btn btn-danger btn-sm">Hapus</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">2</td>
                                        <td>Alya Safitri</td>
                                        <td>10/01/2023</td>
                                        <td>11.33</td>
                                        <td>087856531788</td>
                                        <td>Skripsi</td>
                                        <td>30.000</td>
                                        <td class="text-center">Terbayar <br><a href="">Detail</a></td>
                                        <td class="text-center"><a href="">Unduh</a></td>
                                        <td>
                                            <a href="" type="button"
                                                class="btn btn-warning text-light btn-sm">Edit</a>
                                            <a href="" type="button" class="btn btn-success btn-sm">Selesai</a>
                                            <a href="" type="button" class="btn btn-danger btn-sm">Hapus</a>
                                        </td>
                                    </tr>
                                </table>
                                <hr>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
