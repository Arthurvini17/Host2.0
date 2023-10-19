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
            <section id="select-plan">
                <div class="container-plan">
                    <div class="text-select">
                        <h1>Selecione o seu plano e faça sua compra</h1>
                    </div>
                    <form action="" method="POST">
        
                        <div class="form-group">
                            <div class="input-group">
                                <label for="name">Nome *</label>
                                <input type="text" name="name">
                            </div>
                            <div class="input-group">
                                <label for="sobrenome">Sobrenome *</label>
                                <input type="text" name="sobrenome">
                            </div>
                        </div>
        
                        <div class="form-group">
                            <label for="email">Email *</label>
                            <input type="email" name="email">
                        </div>
        
                        <div class="form-group">
                            <label for="contact">Número de celular *</label>
                            <input type="number" name="contact">
                        </div>
        
                        <div class="form-group-select">
                            <label for="plan">Selecione o plano</label>
                            <select name="plan" id="plan">
                                <option value="Iniciante">Iniciante</option>
                                <option value="Intermediario">Intermediario</option>
                                <option value="Profissional">Profissional</option>
                            </select>
                        </div>
                    </form>
                </div>
            </section>
        </main>
        
    </div>

</body>

</html>
