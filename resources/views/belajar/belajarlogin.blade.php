<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">

        <title>Login form Looking Like Google Form</title>
        <style>
            /*===== GOOGLE FONTS =====*/
            @import url("https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap");
            /*===== VARIABLES CSS =====*/
            :root{
            /*===== Colores =====*/
            --first-color: #1A73E8;
            --input-color: #80868B;
            --border-color: #DADCE0;

            /*===== Fuente y tipografia =====*/
            --body-font: 'Roboto', sans-serif;
            --normal-font-size: 1rem;
            --small-font-size: .75rem;
            }
            
            /*===== BASE =====*/
            *,::before,::after{
            box-sizing: border-box;
            }
            body{
            margin: 0;
            padding: 0;
            font-family: var(--body-font);
            font-size: var(--normal-font-size);
            }
            h1{
            margin: 0;
            }
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
            .form__title{
            font-weight:500;
            margin-bottom:3rem;
            }
            .form_div{
            position: relative;
            height:48px;
            margin-bottom:1.5rem;
            }
            .form__input{
            position: absolute;
            top:0;
            left:0;
            width:100%;
            height:100%;
            font-size:var(--normal-font-size);
            border:1px solid var(--border-color);
            border-radius: .5rem;
            outline:none;
            padding:1rem;
            background:none;
            z-index: 1;
            }
            .form__label{
            position: absolute;
            left:1rem;
            top:1rem;
            padding:0 .25rem;
            background-color: #fff;
            color:var(--input-color);
            font-size:var(--normal-font-size);
            transition: .3s;
            }
            .form__button{
            display: block;
            margin-left: auto;
            padding:.75rem 2rem;
            outline:none;
            border:none;
            background-color: var(--first-color);
            color:#fff;
            font-size:var(--normal-font-size);
            border-radius: .5rem;
            cursor: pointer;
            transition: .3s;
            }
            .form__button:hover{
            box-shadow: 0 10px 36px rgba(0,0,0,.15);
            }
            .form__input:focus + .form__label{
            top:-.5rem;
            left:.8rem;
            color:var(--first-color);
            font-size: var(--small-font-size);
            font-weight: 500;
            z-index: 10;
            }
            .form__input:not(:placeholder-shown).form__input:not(:focus)+ .form__label{
            top:-.5rem;
            left:.8rem;
            color:var(--first-color);
            font-size: var(--small-font-size);
            font-weight: 500;
            z-index: 10;
            }

            .form__input:focus{
            border:1.5px solid var(--first-color);
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