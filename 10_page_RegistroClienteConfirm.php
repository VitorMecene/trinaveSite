<?php
if (session_status() !== PHP_SESSION_ACTIVE) {//Verificar se a sessão não já está aberta.
  session_start();
}
?>

<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="estilo.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <title>Cadastro de Clientes</title>

</head>

<body>

    <header id=cabecalho>
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <a href="#" class="navbar-brand d-flex align-items-center">
                        <picture>
                        <a href="index.php"><img id=logo src="img/logos (6).png" width="300px" height="75px"></a>
                        </picture>
                    </a>
                </div>
                <div class="col-9">
                    <nav id="menu">
                        <ul class="nav nav-pills">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">INÍCIO</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="02_page_empresa.html">EMPRESA</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="03_page_servico.html">SERVIÇOS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="04_page_fale.html">CONTATO</a>
                            </li>
                            <li class="nav-item">
                                <a href="13_page_Deslogando.php"><button type="button" class="btn btn-danger">SAIR</button></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <main class="mainPageLogin" role="main">

        <section class="album py-5 bg-light">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="col row justify-content-center rounded">
                            <div>
                                <div class="container">
                                    <?php
                                        include("funcoes.php");
                                        
                                        $fornecedor = $_SESSION['id'];
                                        $nome = $_POST["nome"];
                                        $cnpj = $_POST["cnpj"];
                                        $telefone = $_POST["telefone"];
                                        $endereco = $_POST["endereco"];
                                        $n = $_POST["n"];
                                        $bairro = $_POST["bairro"];
                                        $cidade = $_POST["cidade"];
                                        $estado = $_POST["estado"];

                                        $sucesso = InsereCliente($nome, $cnpj, $telefone, $endereco, $n, $bairro, $cidade, $estado, $fornecedor);
                                        
                                        
                                        if( $sucesso > 0){
                                            $_SESSION["cliente"] = 1;
                                            header("location: 09_page_RegistroCliente.php");}
                                        else{
                                            $_SESSION["cliente"] = 2;
                                            header("location: 09_page_RegistroCliente.php");}

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