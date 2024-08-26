<!DOCTYPE html>
<html>

<head>
    <title>Casniti | CASN Test Simulator by Anfi</title>
    {{-- icon atas --}}
    <link rel="icon" href="/casnitipublic/icon/casniti.ico" type="image/x-icon">
    {{-- css --}}
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/casnitipublic/style.css">
</head>

<body style="background-color: #0073E6">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card mt-5 rounded-form" style="height: 545px">
                    <div class="card-body">
                        {{-- <form method="POST" action="{{ route('login') }}"> --}}
                        <form method="POST" action="">
                            @csrf
                            <div class="text-center w-50 mx-auto mt-3">
                                <img src="/casnitipublic/icon/casniti.png" class="img-fluid" alt="">
                            </div>
                            <a href="https://google.com">
                                <div class="text-center w-75 mx-auto" style="margin-top:140px">
                                    <img src="/casnitipublic/icon/googlelogin.png" class="img-fluid" alt="">
                                </div>
                            </a>
                            <div class="text-center" style="margin-top: 170px; font-size: 10px">
                                <p>Versi 25-08-2024</p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
