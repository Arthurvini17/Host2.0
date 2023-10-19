<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    @vite(['resources/css/home.css', 'resources/js/app.js'])
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/d4d5949181.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <div class="container-all">
        <header>
            <ul class="left">
                @if (Auth::check())
                    <li>
                        <p>Olá {{ Auth::user()->name }}
                    </li>
                    </p>
                @endif

                <li><a href="{{route('logout')}}">Sair</a></li>
            </ul>


            <nav>
                <ul>
                    <li>Inicio</li>
                    <li>Hospedagem de Sites</li>
                    <li>Área do cliente</li>
                    <li>Contato</li>
                    <li>Criar conta</li>
                    <li>Entrar na conta</li>

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
                        <h1>Apartir de R$ 4,70 MENSAIS</h1>
                        <h4>Confira <a href="">nossos planos</a></h4>
                    </div>
                </div>

            </section>


            <section id=searchs>
                <div class="search">
                    {{-- <div class="wave">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#000b76" fill-opacity="1" d="M0,64L60,90.7C120,117,240,171,360,176C480,181,600,139,720,128C840,117,960,139,1080,138.7C1200,139,1320,117,1380,106.7L1440,96L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>               
                         </div> --}}
                    <input type="search" placeholder="Pesquise pelo seu dominio">
                    <select name="" id="">
                        <option value="">.com.br</option>
                        <option value="">.net</option>
                        <option value="">.com</option>
                        <option value="">.org</option>
                    </select>

                    <button class="ok-submit" type="submit">Ok</button>
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
                        <div class="buttons">
                            <button>Quero assinar agora</button>
                        </div>
                    </div>
                    <div class="intermediario">
                        <div class="header">
                            <h2>Intermediario</h2>
                        </div>
                        <div class="preco">
                            <h1>R$ 9,70</h1>
                            <p>/mês</p>
                        </div>
                        <div class="itens-planos">
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
                        <div class="buttons">
                            <button>Quero assinar agora</button>
                        </div>
                    </div>

                    <div class="profissional">
                        <div class="header">
                            <h2>Profissional</h2>
                        </div>

                        <div class="preco">
                            <h1>R$ 14,70</h1>
                            <p>/mês</p>
                        </div>
                        <div class="itens-planos">
                            <p>Auto instalador do WordPress</p>
                            <p>Auto instalador de Lojas Virtuais</p>
                            <p>Criador de Sites</p>
                            <p>200; GB de espaço em disco</p>
                            <p>200 Domínios Hospedados</p>
                            <p>200 contas de E-mail</p>
                            <p>Transferência ilimitada</p>
                            <p>PHP & MySQL</p>
                            <p>SSL Grátis</p>
                        </div>
                        <div class="buttons">
                            <button>Quero assinar agora</button>
                        </div>

                    </div>
                </div>
            </section>

            <section id="create">
                <div class="box">
                    <div class="img-create">
                        <img src="{{ Vite::asset('resources/images/create-you.svg') }}" alt="">
                    </div>

                    <div class="content">
                        <div class="create-text">
                            <h1>CRIAR O SEU É MUITO FACIL</h1>
                        </div>


                        <div class="text-public">
                            <p>Oferecemos as mais incríveis ferramentas para você criar o seu projeto. Com o nosso
                                Criador
                                de Sites você cria um site incrível, sem precisar de conhecimentos técnicos. Basta
                                escolher
                                um tema, substituir os textos e imagens, publicar e pronto, o seu site estará na
                                internet. <br>

                                Você pode utilizar o WordPress, que é o maior CMS do mundo e que com apenas um clique
                                você
                                faz a instalação dele. Um em cada três sites na internet são feitos em WordPress.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section id="list-motives">
                <div class="title">
                    <h1>MOTIVOS PARA ESCOLHER A HOST-CLOSED </h1>

                </div>
                <div class="box-list">
                    <div class="list-left">
                        <p><i class="fa-solid fa-check" style="width: 20px; display: inline-block;"></i> Suporte técnico
                            especializado</p>
                        <p><i class="fa-solid fa-check" style="width: 20px; display: inline-block;"></i> Custo benefício
                            incomparável</p>
                        <p><i class="fa-solid fa-check" style="width: 20px; display: inline-block;"></i> Instalador de
                            Lojas Virtuais</p>
                        <p><i class="fa-solid fa-check" style="width: 20px; display: inline-block;"></i> Migração grátis
                        </p>
                    </div>

                    <div class="list-right">
                        <p><i class="fa-solid fa-check" style="width: 20px; display: inline-block;"></i> Mais de 80.000
                            sites hospedados</p>
                        <p><i class="fa-solid fa-check" style="width: 20px; display: inline-block;"></i>Instalador com
                            mais de 436 aplicativos</p>
                        <p><i class="fa-solid fa-check" style="width: 20px; display: inline-block;"></i> Painel de
                            controle</p>
                        <p><i class="fa-solid fa-check" style="width: 20px; display: inline-block;"></i> 99,9% de Uptime
                        </p>
                    </div>
                </div>

            </section>

            <section id="feedbacks">
                <div class="boxs">
                    <div class="content">
                        <div class="title-feed">
                            <h1>O QUE ESTÃO DIZENDO SOBRE A HOST-CLOSED</h1>
                        </div>
                        <div class="text-feed">
                            <p>Já fui cliente de muitas empresas de hospedagem, mas confesso que fiquei impressionado
                                com a <br>
                                relação custo-benefício que a Hospeda Meu Site oferece. O valor dos planos são muito
                                atrativos se <br> comparados com a qualidade do serviço que é oferecido. Realmente vocês
                                estão de
                                parabéns.</p>
                        </div>
                    </div>

                </div>
            </section>

            <section id="payments">
                <div class="boxs-payment">
                    <div class="text-payment">
                        <h1>Formas de pagamento</h1>
                    </div>
                    <div class="img-payment">
                        <img src="{{ Vite::asset('resources/images/formas_de_pagamento-500x119.png') }}" alt="">
                    </div>

                    <div class="text-pay">
                        <p>* Os valores divulgados em nosso site são o equivalente mensal para o ciclo de pagamento de
                            36 meses. Quanto mais longo o ciclo de pagamento, maior é o desconto obtido.

                        </p>
                    </div>
                </div>
            </section>
        </main>
        <footer>
            <nav>
                <ul>
                    <li>Contato</li>
                    <p>&copy; 2023 HostClosed. Todos os direitos reservados.</p>
                </ul>
            </nav>
        </footer>
    </div>
</body>

</html>
