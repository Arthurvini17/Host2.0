<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/dashboard.css', 'resources/js/app.js'])
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <header>
        <ul class="left">
            @if (Auth::check())
                <li>
                    <p>Olá {{ Auth::user()->name }}
                </li>
                </p>
                <li><a href="{{ route('logout') }}">Sair</a></li>
            @endif


        </ul>

        <nav>
            <ul>
                <li>Inicio</li>
                <li>Hospedagem de Sites</li>
                <li>Área do cliente</li>
                <li>Contato</li>
                @guest
                    <li><a href="{{ route('register.index') }}">Criar conta</a></li>
                    <li><a href="{{ route('login.index') }}">Entrar na conta</a></li>
                @endguest
            </ul>
        </nav>
    </header>


    @if (isset($plano))
    <div class="container">
        <div class="img-dashboard">
            <img src="{{Vite::asset('resources/images/dashboard.svg')}}" alt="">
        </div>
        <div class="box-plan">
            <div class="text-plan">
                <p class="user-auth">Olá {{ucfirst(Auth::user()->name)}}</p>
               
                    @if ($plano->name === 'Iniciante')
                        <div class="itens">
                            <h1>Plano: {{ $plano->name }}</h1>
                            <h2>Seu plano contém:</h2>
                            <p>Auto instalador do WordPress</p>
                            <p>Auto instalador de Lojas Virtuais</p>
                            <p>Criador de Sites</p>
                            <p>30 GB de espaço em disco</p>
                            <p>30 Domínios Hospedados</p>
                            <p>30 contas de E-mail</p>
                            <p>Transferência ilimitada</p>
                            <p>PHP & MySQL</p>
                            <p>SSL Grátis</p>
                        </div>
                    @elseif ($plano->name === 'Intermediario')
                        <div class="itens">
                            <h1>Plano: {{ $plano->name }}</h1>
                            <h2>Seu plano contém:</h2>

                            <p>Auto instalador do WordPress</p>
                            <p>Auto instalador de Lojas Virtuais</p>
                            <p>Criador de Sites</p>
                            <p>80 GB de espaço em disco</p>
                            <p>80 Domínios Hospedados</p>
                            <p>80 contas de E-mail</p>
                            <p>Transferência ilimitada</p>
                            <p>PHP & MySQL</p>
                            <p>SSL Grátis</p>
                        </div>
                    @else
                        <h1>Plano: {{ $plano->name }}</h1>
                        <h2>Seu plano contém:</h2>
                        <p>Auto instalador do WordPress</p>
                        <p>Auto instalador de Lojas Virtuais</p>
                        <p>Criador de Sites</p>
                        <p>200; GB de espaço em disco</p>
                        <p>200 Domínios Hospedados</p>
                        <p>200 contas de E-mail</p>
                        <p>Transferência ilimitada</p>
                        <p>PHP & MySQL</p>
                        <p>SSL Grátis</p>
                    @endif
                @else
                    <p>Você não possui um plano associado.</p>
                @endif
                <p>Deseja trocar de plano? <a href="#"> Clique aqui</a></p>
            </div>
        </div>
    </div>
</body>

</html>
