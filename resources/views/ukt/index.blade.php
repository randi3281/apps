<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UKT -/ U . K . T /</title>
    <!-- Tambahkan link Bootstrap CSS -->
    @vite('resources/sass/app.scss')
</head>

<body class="bg-primary">
    <div class="container mt-5">
        <div class="row justify-content-center mt-5">
            <div class="col-md-4 mt-5">
                <div class="card">
                    <div class="card-header">Form Login</div>
                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="username" name="username" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="mb-3">
                                <label for="captcha" class="form-label">Captcha</label>
                                <input type="text" class="form-control" id="captcha" name="captcha" required>
                                <!-- Anda dapat menambahkan captcha di sini jika diperlukan -->
                            </div>
                            <button type="submit" class="btn btn-primary">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tambahkan script Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
</body>

</html>
