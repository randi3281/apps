<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Anficititate</title>
    <link rel="shortcut icon" href="/icon/anficititate/anficititate.png">
    @vite('resources/sass/app.scss')
</head>

<body class="bg-dark">
    <div class="container">
        <div class="row justify-content-center" style="margin-top: 100px;">
            <div class="col-lg-5">
                <div class="card" style=" height:450px;">
                    <div class="card-body">
                        @switch($mode)
                            @case(1)
                                @include('anficititate.login')
                            @break

                            @case(2)
                                @include('anficititate.register')
                            @break

                            @case(3)
                                @include('anficititate.slc_repo')
                            @break

                            @case(4)
                                @include('anficititate.del_repo')
                            @break

                            @case(5)
                                @include('anficititate.upd_repo')
                            @break

                            @case(6)
                                @include('anficititate.new_repo')
                            @break

                            @case(7)
                                @include('anficititate.lupa_sandi')
                            @break

                            @case(8)
                                @include('anficititate.lupa_pin')
                            @break
                        @endswitch
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
