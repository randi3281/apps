<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistem Template Blade Laravel</title>
</head>

<body>
    <header>
        <h2>Blog Randi</h2>
        <nav>
            <a href="/mengulang/blog">HOME</a>
            |
            <a href="/mengulang/blog/tentang">TENTANG</a>
            |
            <a href="/mengulang/blog/kontak">KONTAK</a>
            |
            <a href="/mengulang/blog/tempat">TEMPAT</a>
        </nav>
    </header>
    <br>
    <br>
    <br>

    {{-- Bagian judul halaman blog --}}
    <h3>@yield('judul_halaman')</h3>

    {{-- Bagian konten blog --}}
    @yield('konten')

    <br>
    <br>
    <br>
    <footer>
        <p>&copy; <a href="https://www.malasngoding.com">www.malasngoding.com</a>. 2018 - 2019</p>
    </footer>
</body>

</html>
