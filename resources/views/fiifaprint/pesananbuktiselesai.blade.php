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
                <a href="/fiifaprint/homeadmin" type="button" class="btn btn-danger me-3"><- Kembali</a>
            </div>
        </div>
        <div class="row justify-content-center mt-3">
            <div class="col-md-11">
                <div class="card" style="height: 568px">
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-md-11 mt-2">
                                <h3 class="text-center">Selesaikan Pesanan</h3>
                                <hr class="mt-3">
                                <form action="">
                                    <div class="row justify-content-center">
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="nama" class="form-label">Nama Pemesan</label>
                                                <input type="text" class="form-control" id="nama"
                                                    value="">
                                            </div>
                                            <div class="mb-3">
                                                <label for="nama" class="form-label">Nama Pesanan</label>
                                                <input type="text" class="form-control" id="nama"
                                                    value="">
                                            </div>
                                            <div class="mb-3">
                                                <label for="nama" class="form-label">Harga</label>
                                                <input type="text" class="form-control" id="nama"
                                                    value="">
                                            </div>
                                            {{-- buat bukti --}}
                                            <div class="mb-3">
                                                <label for="nama" class="form-label">Bukti Print</label>
                                                <input type="file" class="form-control" id="nama"
                                                    value="">
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row justify-content-center">
                                            <div class="col-md-12 text-center">
                                                <input type="submit" class="btn btn-success" value="Selesai">
                                            </div>
                                        </div>
                                    </div>
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
