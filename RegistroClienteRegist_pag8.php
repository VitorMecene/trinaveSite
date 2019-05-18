<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>
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
                            <a class="nav-link active" href="LoguinAtividade3_pag1.php">LOGUIN</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <main class="mainPageLogin" role="main">

        <section class="album py-5 bg-light">
            <div class="container-fluid">
                <div class="row">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link" id="v-pills-home-tab" data-toggle="pill" href="FornecedorPrinc_pag4.php" role="tab" aria-controls="v-pills-home" aria-selected="false">Principal</a>
                        <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="RegistroCliente_pag5.php" role="tab" aria-controls="v-pills-home" aria-selected="true">Cadastre seus Clientes</a>
                        <a class="nav-link" id="v-pills-home-tab" data-toggle="pill" href="AcomPedido_pag6.php" role="tab" aria-controls="v-pills-home" aria-selected="false">Pedidos</a>
                        <a class="nav-link" id="v-pills-home-tab" data-toggle="pill" href="ProdutosEstoque_pag7.php" role="tab" aria-controls="v-pills-home" aria-selected="false">Produtos e Estoque</a>
                    </div>
                    <div class="col">
                        <div class="col row justify-content-center rounded">
                            <div>
                                <div class="container">
                                    <?php
                                        include("funcoes.php");
                                        
                                        $nome = $_POST["nome"];
                                        $cnpj = $_POST["cnpj"];
                                        $telefone = $_POST["telefone"];
                                        $endereco = $_POST["endereco"];
                                        $n = $_POST["n"];
                                        $bairro = $_POST["bairro"];
                                        $cidade = $_POST["cidade"];
                                        $estado = $_POST["bairro"];

                                        $sucesso = InsereCliente($nome, $cnpj, $telefone, $endereco, $n, $bairro, $cidade, $estado);
                                        
                                        if($sucesso == 1)
                                            echo "<h2>Cliente inserido na base de dados!</h2>";
                                        else
                                            echo "<h2>Oh oh oh....<br>Aconteceu alguma coisa errada, tente novamente!</h2>";

                                    ?>
                                </div>
                            </div>        
                        </div>
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