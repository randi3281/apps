<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Casniti | @yield('judul_halaman')</title>
    {{-- icon atas --}}
    <link rel="icon" href="https://cdn.anfiniti.my.id/casniti/icon/casniti.ico" type="image/x-icon">
    {{-- css --}}
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/casnitipublic/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    {{-- Bootstrap JS --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</head>

<body style="background-color: #0073E6">
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-body-tertiary mt-4 rounded-5">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="https://cdn.anfiniti.my.id/casniti/icon/casniti.png" alt="" width="100">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav me-auto">
                        @yield('menu')
                    </ul>
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item me-5 mx-4">
                            <a class="nav-link text-danger" style="font-weight: bold" href="/casniti">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        {{-- bualtah juga halaman yang rounded --}}
        <div class="bg-body-tertiary rounded-5 mt-4 p-4" style="min-height: 490px">
            @yield('konten')
        </div>
    </div>
    {{-- buatlah text versi di footer --}}
    <footer class="text-center mt-2" style="margin-bottom: -9px">
        <p class="text-white" style="font-size: 10px">Versi 25-08-2024</p>
    </footer>
</body>

</html>
