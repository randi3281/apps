<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
</head>
<body class="bg-secondary">
    <div class="container pt-5">
        <div class="row justify-content-center mt-5">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h3 class="mt-3 mb-5 text-center">Login Form</h3>
                        <form action="belajarmiddleware/proseslogin" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
                        </div>
                        <div class="form-group mt-3">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password" required autofocus>
                        </div>
                        <div class="text-center mt-5">
                            <input type="submit" class="btn w-75 mb-3 btn-primary" name="login" value="Login">
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>