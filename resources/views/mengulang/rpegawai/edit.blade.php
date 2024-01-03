<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Pegawai</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center mt-5 mb-4">
            <div class="col-lg-5 mt-5">
                <div class="card">
                    <div class="card-header">
                        <h5 class="text-center">Edit Data Pegawai</h5>
                    </div>
                    <div class="card-body">

                        {{-- Validation --}}
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="/rpegawai/update" method="post">
                            {{ csrf_field() }}
                                <div class="form-group mb-3">
                                    <label for="nama">Nama</label>
                                    <input class="form-control" type="text" name="nama"
                                        placeholder="Masukkan nama disini...." value="{{ $item->name }}" autofocus>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" class="form-control" name="alamat"
                                        placeholder="Masukkan alamat disini" value="{{ $item->alamat }}" autofocus>
                                </div>
                            <p class="text-center mt-5">
                                <input type="submit" name="edit" class="btn btn-primary " value="Edit">
                                <input type="submit" name="kembali" class="btn btn-danger " value="Kembali">
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
