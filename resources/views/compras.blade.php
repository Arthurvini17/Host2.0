<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    @vite(['resources/css/compras.css', 'resources/js/app.js'])
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="container">
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

        <main>
            <section id="select-plan">
                <div class="container-plan">
                    <div class="box">
                        <div class="text-select">
                            <h1>Selecione o seu plano e faça sua compra</h1>
                        </div>
                        <form action="{{route('buy.store')}}" method="POST">
                            @csrf
{{-- 
                            <div class="form-group">
                                <div class="input-group">
                                    <label for="name">Nome *</label>
                                    <input type="text" name="name" placeholder="Seu nome">
                                </div>
                                <div class="input-group">
                                    <label for="sobrenome">Sobrenome *</label>
                                    <input type="text" name="sobrenome" placeholder="Seu sobrenome">
                                </div>
                            </div> --}}
{{-- 
                            <div class="input-group">
                                <label for="email">Email *</label>
                                <input type="email" name="email" placeholder="example@email.com">
                            </div> --}}

                            {{-- <div class="input-group">
                                <label for="contact">Número de celular *</label>
                                <input type="number" name="number" placeholder="Seu numero">
                            </div> --}}

                            <div class="form-group-select">
                                <label for="plan">Selecione o plano</label>
                                <select name="name" id="plan">
                                    <option value="Iniciante">Iniciante</option>
                                    <option value="Intermediario">Intermediario</option>
                                    <option value="Profissional">Profissional</option>
                                </select>
                            </div>
                            <button type="submit">Comprar</button>
                    </div>
                    </form>
                </div>
            </section>
        </main>

    </div>

</body>

</html>
