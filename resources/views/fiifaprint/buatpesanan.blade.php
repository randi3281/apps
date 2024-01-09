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
                <div class="card">
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-md-11 mt-2">
                                <div class="text-center">
                                    <img src="/fiifaprintpublic/image/icon.png" class="mt-2" style="width: 100px"
                                        alt="">
                                </div>
                                <h5 class="text-center mt-4">Form Pemesanan</h5>
                                <form action="" class="mt-3">
                                    <div class="form-group">
                                        <label for="namaPemesan">Nama Pemesan: Randi Afif</label>
                                    </div>
                                    <div class="form-group mt-2">
                                        <label for="namaPesanan">Nama Pesanan: Skripsi</label>
                                    </div>
                                    <div class="form-group mt-2">
                                        <label for="jumlahHalaman">File: skripsi.docx</label>
                                    </div>
                                    <hr>
                                    <h5 class="text-center mt-4">Format Kertas</h5>
                                    <p style="font-size: 8pt" class="text-center text-danger"><i>Masukkan Format Kertas sesuai file agar bisa dihitung harganya, lalu tekan tombol "Tambah"</i></p>
                                    <div class="form-group mt-2">
                                        <label for="jeniskertas">Jenis Kertas</label>
                                        <select name="jeniskertas" id="jeniskertas" class="form-control">
                                            <option value="1">HVS</option>
                                            <option value="2">Buffalo</option>
                                        </select>
                                    </div>
                                    <div class="form-group mt-2">
                                        <label for="jeniskertas">Warna Kertas</label>
                                        <select name="jeniskertas" id="jeniskertas" class="form-control">
                                            <option value="1">Putih</option>
                                            <option value="2">Merah</option>
                                        </select>
                                    </div>
                                    <div class="form-group mt-2">
                                        <label for="jeniskertas">Ukuran</label>
                                        <select name="jeniskertas" id="jeniskertas" class="form-control">
                                            <option value="1">F4</option>
                                            <option value="2">A4</option>
                                        </select>
                                    </div>
                                    <div class="form-group mt-2">
                                        <label for="jeniskertas">Jenis Print</label>
                                        <select name="jeniskertas" id="jeniskertas" class="form-control">
                                            <option value="1">Hitam Putih</option>
                                            <option value="2">Warna</option>
                                        </select>
                                    </div>
                                    <div class="form-group mt-2">
                                        <label for="jumlahprint">Jumlah Print (lembar)</label>
                                        <input type="number" class="form-control" name="jumlahprint"
                                        placeholder="Jumlah Print">
                                    </div>
                                    <input type="submit" class="btn btn-primary w-100 mt-3" value="Tambah">

                                    <table class="table-bordered table table-striped mt-3" style="font-size: 7pt">
                                        <tr class="text-center">
                                            <th>No</th>
                                            <th>Jenis Kertas</th>
                                            <th>Warna Kertas</th>
                                            <th>Ukuran</th>
                                            <th>Jenis Print</th>
                                            <th>Jumlah</th>
                                            <th>Total Harga</th>
                                        </tr>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td>HVS</td>
                                            <td>Putih</td>
                                            <td>A4</td>
                                            <td>Hitam Putih</td>
                                            <td>5</td>
                                            <td>2500</td>
                                        </tr>
                                    </table>
                                    <hr>
                                    <p style="font-size: 8pt" class="text-center text-danger"><i>Setelah yakin, silahkan tekan tombol Buat Pesanan di bawah</i></p>
                                    <input type="submit" class="btn btn-success w-100 mt-1" value="Buat Pesanan">
                                    <hr>
                                    <footer class="text-center mt-3" style="font-size: 8pt"><i><b>2024 - @FiifaPrint </b></i>
                                </form>
                                </footer>
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
