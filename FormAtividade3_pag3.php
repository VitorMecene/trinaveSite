<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Registro</title>

    <link rel="stylesheet" href="estilo.css">

</head>

<body>

    <header id=cabecalho>
        <div class="navbar navbar-dark bg-dark shadow-sm">
            <div class="col-md-4">
                <a href="#" class="navbar-brand d-flex align-items-center">
                    <picture>
                        <img id=logo src="img/logos (6).png" width="300px" height="75px">
                    </picture>
                </a>
            </div>
            <div class="col-md-8">
                <nav id="menu">
                    <ul class="nav nav-pills nav-fill">
                        <li class="nav-item">
                            <a class="nav-link active" href="01_page_inicio.html">INÍCIO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="02_page_empresa.html">EMPRESA</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="03_page_servico.html">SERVIÇOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="04_page_fale.html">FALE CONOSCO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="08_page_loguin.php">LOGUIN</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>r
    </header>

    <main class="mainPageLogin" role="main">

        <section class="album py-5 bg-light">
            <div class="container">
            <div class="row">
                <div class="col row justify-content-center rounded">

                <?php
                    include("funcoes.php");

                    date_default_timezone_set('America/Sao_Paulo');

                    
                    $nome = $_POST["nome"];
                    $cnpj = $_POST["cnpj"];
                    $setor = $_POST["setor"];
                    $telefone = $_POST["telefone"];
                    $email = $_POST["email"];
                    $senha = $_POST["senha"];
                    
                    $sucesso = InsereFornecedor($nome, $cnpj, $telefone, $email, $senha);
                    
                    if($sucesso == 1)
                       echo "<h2>Cadastro Realizado com Sucesso!</h2>";
                    else
                        echo "<h2>Oh oh oh....<br>Aconteceu alguma coisa errada, tente novamente!</h2>";

                ?>

                </div>
            </div>

            </div>
        </section>

    </main>

    <footer id="rodape" class="text-muted">
        <div class="navbar navbar-dark bg-dark shadow-sm">
            <p>Copyright 2013 © Company TRINAVE. Todos os direitos reservados.</p>
        </div>
    </footer>

</body>

</html>