<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    @vite(['resources/css/login.css', 'resources/js/app.js'])
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="box-login">
            <div class="box">
                <div class="img-login">
                    <img src="{{ Vite::asset('resources/images/Login-pana.svg') }}" alt="">
                </div>
                <form action="{{route('login.auth')}}" method="POST">
                    @csrf
                    <div class="text-login">
                        <h1>Faça seu login</h1>
                    </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" name="email" placeholder="example@gmail.com">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" placeholder="Enter password">
                    </div>

                    <button class="submit-button" type="submit">Logar</button>

                    <div class="remember-group">
                        <label for="remeber">Lembrar conta?</label>
                        <input type="checkbox" name="remember" id="">
                        <a href="">Não tenho uma conta</a>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</body>

</html>
