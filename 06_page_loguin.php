<?php session_start(); ?>

<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="estilo.css">

    <title>Login</title>


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
                                <a class="nav-link active" href="06_page_loguin.php">ENTRAR</a>
                            </li>
    
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <main class="mainPageLogin" role="main">

        <section class="container">

            <!-- Modal -->
            <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Rastrear seus produto</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="16_pag_Consulta.php" method="post">
                                <div class="justify-content-md-center"><input type="text" class="form-control" name="chave" placeholder="Ex: BR-XXXXXX"></div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Pesquisar</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

            <div>
                <div class="pageLogin">

                    <form method="post" class="form-signin" action="loguin.php?">

                        <div class="form-label-group">
                            <label for="inputEmail">Endereço de E-mail</label>
                            <input type="email" name="email" class="form-control" placeholder="Endereço de email" required autofocus>
                        </div>
                        <?php
                        // verifica se a variavel session['invalido'] existe, se existir mostra o erro
                        if (isset($_SESSION["invalido"])) {
                            $dados_invalidos = $_SESSION["invalido"];
                            echo "<span class='red'>$dados_invalidos</span>";
                        }
                        ?><br>
                        <div class="form-label-group">
                            <label for="inputPassword">Senha</label>
                            <input type="password" name="senha" class="form-control" placeholder="Senha" required>
                        </div><br>

                        <div class="checkbox mb-3">
                            <label>
                                <input type="checkbox" value="lembrar de mim"> Lembrar de mim
                            </label>
                        </div>

                        <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
                        <a href="08_page_CadastroFornecedor.php" class="btn btn-lg btn-primary btn-block">Cadastre-se</a>
                    </form>

                </div>
            </div>
        </section>
    </main>

    <footer id="rodape" class="text-muted">

        <div class="container">

            <div class="row">
                <div class="col-4">
                    <nav class="nav flex-column">
                        <h6 class="textbranco">PRINCIPAL</h6>
                        <a class="nav-link active" href="02_page_empresa.html">Quem somos?</a>
                        <a class="nav-link" href="03_page_servico.html">Como transportamos?</a>
                        <a class="nav-link" href="04_page_fale.html">Fale conosco</a>
                    </nav>
                </div>

                <div class="col-4">
                    <nav class="nav flex-column">
                        <h6 class="textbranco">SERVIÇOS</h6>
                        <a class="nav-link" href="06_page_loguin.php">Fornecedores</a>
                        <a class="nav-link" href="PN_login.php">Administrativo</a>
                    </nav>
                </div>

                <div class="col-4">
                    <a href="04_page_fale.html"><img class="imgRodape" src="img\SAC.png"></a>
                </div>
            </div>


            <div class="navbar navbar-dark bg-dark shadow-sm">
                <p>Copyright 2013 © Company TRINAVE. Todos os direitos reservados.</p>
            </div>

        </div>
    </footer>

</body>

</html>

<?php unset($_SESSION["invalido"]); ?>