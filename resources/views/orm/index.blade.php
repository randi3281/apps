<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ORM</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
</head>

<body>

    <nav class="navbar navbar-dark  navbar-expand-lg bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">ORM</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/orm/onetoone">One to One</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/orm/onetomany">One to Many</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/orm/manytoone">Many to One</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/orm/manytomany">Many to Many</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <h3 class="text-center">@yield('jenis')</h3>
                <h3 class="text-center mb-5">@yield('judul')</h3>
                @yield('isi')
            </div>
        </div>
    </div>

</body>

</html>
