<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belajar HTML Dasar</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
</head>

<body>

    <form action="/belajar/siapa" method="POST">
            <h1 class="mt-3">Kamu tau rasanya sakit didiamkan atau diabaikan?</h1>
            <p>Oke mungkin sekarang gue didiemin, gw buktiin gw bisa!</p>
        @csrf
        <div class="row">
            <div class="col-md-3">
                @if (session('status'))
                    <div class="alert alert-danger">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="form-group">
                    <label for="nama">Siapa namamu?</label>
                    <input type="text" name="nama" id="nama" class="form-control">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea name="alamat" id="alamat" cols="30" rows="5" class="form-control"></textarea>
                </div>
                <button type="submit" class="btn btn-primary mt-2">Submit</button>
            </div>
        </div>
    </form>
</body>

</html>
