<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
</head>

<body>
    <header>
        <h2>Randi Blog</h2>
        <nav>
            <a href="/blogg/home">HOME</a>
            |
            <a href="/blogg/tentang">TENTANG</a>
            |
            <a href="/blogg/kontak">KONTAK</a>
        </nav>
    </header>

    <br>
    <br>
    <br>
    <h3>@yield('judul_halaman')</h3>
    <br>
    <br>
    <br>
    @yield('isi')
    <br>
    <br>
    <br>
    <footer>
        <p>&copy; <a href="https://anfi.my.id">Anfi</a></p>
    </footer>
</body>

</html>
