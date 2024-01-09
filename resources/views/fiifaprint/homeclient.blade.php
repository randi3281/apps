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
            <div class="col-md-4">
                <div class="card" >
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-md-11 mt-2">
                                <div class="text-center">
                                    <img src="/fiifaprintpublic/image/icon.png" class="mt-2" style="width: 100px"
                                        alt="">
                                </div>
                                <h4 class="text-center text-primary mt-3">Selamat Datang Randi!</h4>
                                <hr>
                                <h5 class="text-center mt-4">Form Pemesanan</h5>
                                <form action="" class="mt-3">
                                    <div class="form-group">
                                        <label for="namaPemesan">Nama Pemesan:</label>
                                        <input type="text" class="form-control" id="namaPemesan" name="namaPemesan" required>
                                    </div>

                                    <div class="form-group mt-2">
                                        <label for="namaPesanan">Nama Pesanan:</label>
                                        <input type="text" class="form-control" id="namaPesanan" name="namaPesanan" required>
                                    </div>
                                    <div class="form-group mt-2">
                                        <label for="jumlahHalaman">File:</label>
                                        <input type="file" class="form-control" id="file" name="file" required>
                                    </div>
                                    <input type="submit" class="btn btn-success w-100 mt-3" value="Buat Pesanan">
                                </form>
                                <hr class="mt-3">
                                <h5 class="text-center mt-4">Daftar Pesanan</h5>
                                <table class="table-bordered table table-striped mt-3" style="font-size: 8pt">
                                    <tr class="text-center">
                                        <th>No</th>
                                        <th>Pesanan</th>
                                        <th>Harga</th>
                                        <th>Status</th>
                                        <th>File</th>
                                    </tr>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>Skripsi</td>
                                        <td>Rp. 30.000</td>
                                        <td class="text-center"><a href="" class="btn btn-success btn-sm">Bayar</a><br><a href="" class="btn btn-danger btn-sm mt-1">Batal</a></td>
                                        <td class="text-center"><a href="" class="btn btn-primary btn-sm mt-1">Unduh</a></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">2</td>
                                        <td>Skripsi</td>
                                        <td>Rp. 30.000</td>
                                        <td class="text-center">Terbayar</td>
                                        <td class="text-center"><a href="" class="btn btn-primary btn-sm mt-1">Unduh</a></td>
                                    </tr>
                                </table>
                                <hr>
                                <a href="" type="button" class="btn btn-danger w-100">Logout</a>
                                <footer class="text-center mt-3" style="font-size: 8pt"><i><b>2024 - @FiifaPrint </b></i></footer>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-3">
            <div class="col-md-4">
            </div>
        </div>
</body>

</html>
