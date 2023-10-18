<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    @vite(['resources/css/home.css', 'resources/js/app.js'])
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="container-all">
        <header>
            <nav>
                <ul>
                    <li>Hospedar</li>
                    <li>Criar conta</li>
                    <li>Inicio</li>
                </ul>
            </nav>
        </header>
        <main>
            <section id="home">

                <div class="itens">
                    <div class="background-img">
                        <img src="{{ Vite::asset('resources/images/shop-home.svg') }}">
                    </div>
                    <div class="text">
                        <h1>HOSPEDAGEM DE SITES</h1>
                        <h1>Apartir de  R$ 4,70 MENSAIS</h1>
                        <h4>Confira <a href="">nossos planos</a></h4>
                    </div>
                </div>

            </section>

            <section id="planos">
                <div class="cards">
                    <div class="iniciante">
                        <div class="header">
                                <h2>Iniciante</h2>
                        </div>
                        <div class="preco">
                            <h1>R$ 4,70</h1>
                            <p>/mês</p>
                        </div>
                        <div class="itens-planos">
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
                    </div>
                    <div class="intermediario">

                    </div>

                    <div class="profissional">

                    </div>
                </div>
            </section>
        </main>
        <footer>
            <h1>Teste</h1>
        </footer>
    </div>
</body>

</html>
