<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adira IT Assets Management</title>
    <link rel="stylesheet" href="{{ asset('bt/css/bootstrap.css') }}">
    {{-- tambahkan javascript bootstrap --}}
    <script src="{{ asset('bt/js/bootstrap.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>

@if ($menu == 'dashboard' || $menu == 'user_manajemen' || $menu == 'export_to_excel')

    <body class="bg-warning">
    @elseif ($menu == 'data_barang')

        <body class="bg-warning" style="width: 3500px">
        @elseif ($menu == 'mutasi')

            <body class="bg-warning" style="width: 3500px">
            @elseif ($menu == 'penghapusan')

                <body class="bg-warning" style="width: 3500px">
@endif
<div class="container-fluid">
    <div class="row">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark pt-1">
            <img src="{{ asset('images/logo.png') }}" alt="" class="navbar-brand"
                style="width: 100px; margin-left:20px; margin-right:20px">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    @include('aait.dashboard.navbar')
                </ul>
            </div>
        </nav>
    </div>
    <div class="row">

        @if ($posisi == 'admin')
            @if ($menu == 'dashboard')
                @include('aait.dashboard.admin.dashboard')
            @elseif ($menu == 'user_manajemen')
                @include('aait.dashboard.admin.user_manajemen')
            @elseif ($menu == 'data_barang')
                @include('aait.dashboard.admin.data_barang')
            @elseif ($menu == 'mutasi')
                @include('aait.dashboard.admin.mutasi')
            @elseif ($menu == 'penghapusan')
                @include('aait.dashboard.admin.penghapusan')
            @elseif ($menu == 'export_to_excel')
                @include('aait.dashboard.admin.export_to_excel')
            @endif
        @elseif ($posisi == 'pengguna')
            @if ($menu == 'dashboard')
                @include('aait.dashboard.pengguna.dashboard')
            @elseif ($menu == 'data_barang')
                @include('aait.dashboard.pengguna.data_barang')
            @elseif ($menu == 'mutasi')
                @include('aait.dashboard.pengguna.mutasi')
            @elseif ($menu == 'penghapusan')
                @include('aait.dashboard.pengguna.penghapusan')
            @elseif ($menu == 'export_to_excel')
                @include('aait.dashboard.pengguna.export_to_excel')
            @endif
        @endif
    </div>
</div>
</div>
</body>

</html>
