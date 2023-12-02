<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">

        <title>Login form Looking Like Google Form</title>
        <style>
            .l-form{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            } 
            .form{
            width:360px;
            padding:4rem 2rem;
            border-radius: 1rem;
            box-shadow: 0 10px 25px rgba(92,99,105,.2);
            }
        </style>
    </head>
    <body>
         <div class="l-form">
             <form action="" class="form bg-dark justify-content-center text-center">
                <a href="{{ route('belajarlogin.redirect.google') }}">
                    <img src="https://www.google.com/images/branding/googlelogo/2x/googlelogo_light_color_92x30dp.png" alt="Google Icon">
                </a>
             </form>
         </div>
    </body>
</html>
