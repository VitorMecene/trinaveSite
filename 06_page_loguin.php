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
                            <img id=logo src="img/logos (6).png" width="300px" height="75px">
                        </picture>
                    </a>
                </div>
                <div class="col-9">
                    <nav id="menu">
                        <ul class="nav nav-pills">
                            <li class="nav-item">
                                <a class="nav-link" href="01_page_inicio.html">INÍCIO</a>
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
                                <a class="nav-link active" href="#">ENTRAR</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <main class="mainPageLogin" role="main">

        <section class="container">
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
        </section>
    </main>

    <footer id="rodape" class="text-muted">
        <div class="navbar navbar-dark bg-dark shadow-sm">
            <p>Copyright 2013 © Company TRINAVE. Todos os direitos reservados.</p>
        </div>
    </footer>

</body>

</html>

<?php unset($_SESSION["invalido"]); ?>