<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/register.css', 'resources/js/app.js'])

    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="box-register">
            <div class="box">
                <div class="img-register">
                    <img src="{{ Vite::asset('resources/images/Sign up-amico.svg') }}" alt="">
                </div>

                <form action="{{ route('register.store') }}" method="POST">
                    @csrf

                    <div class="text-register">
                        <h1>Faça Seu Registro</h1>
                    </div>
                    <div class="form-group">
                        <label for="name">Digite seu nome</label>
                        <input type="name" name="name">
                    </div>


                    <div class="form-group">
                        <label for="email">Digite seu Email</label>
                        <input type="email" name="email">
                    </div>

                    <div class="form-group">
                        <label for="password">Digite sua senha</label>
                        <input type="password" name="password">
                    </div>


                    <button class="submit-button" type="submit">Registrar</button>

                    <div class="form-group-remember">
                        <a href="#">Já tenho uma conta</a>
                    </div>
            </div>
        </div>
        </form>

    </div>
</body>

</html>
