<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="estilo.css">

    <title>Pedidos</title>

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
                                <a class="nav-link" href="06_page_loguin.php">ENTRAR</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <main class="mainPageLogin" role="main">

        <section class="album py-5 bg-light">
            <div class="container">
            <div class="row"><div class="col row justify-content-center rounded"></div><div class="col mr-5"><h4>Seja Bem Vindo!</h4><br></div><div class="col"></div></div>
            <div class="row">
                <div class="col row justify-content-center rounded">
                    <div class="border">
                    
                        <form action="08_page_CadastroFornecConfirm.php" method="post">
                            <div class="col">
                                <div class="row">
                                    <div class="col">Nome <br> <input type="text" class="form-control" name ="nome" placeholder="Digite seu nome"></div>
                                    <div class="col">CNPJ <br> <input type="text" name="cnpj" class="form-control" maxlength="18" placeholder="Digite o Cnpj" OnKeyPress="formatar('##.###.###/####-##', this)" ></div>
                                </div>
                            </div><br><br>
                            <div class="col">Setor de Atividade <input type="text" class="form-control" name="setor" placeholder="Descreva sua area de atuação"><br></div>
                            <div class="col">Telefone<br><input type="text" name="telefone" class="form-control" maxlength="14" placeholder="Digite DDD + telefone" OnKeyPress="formatar('## #####-####', this)"><br></div>
                            <div class="col">E-mail<br><input type="email" name="email" class="form-control" placeholder="Digite um e-mail"><br></div>
                            <div class="col">Senha<br><input type="password" name="senha" class="form-control" placeholder="Crie uma senha"><br></div>
                            <br>
                            <button class="btn btn-lg btn-primary btn-block" type="submit">Registrar</button>
                        </form>
                        
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