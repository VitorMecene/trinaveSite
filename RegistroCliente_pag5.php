<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="estilo.css">

    <title>Cadastro de Clientes</title>

</head>

<body>

    <header id=cabecalho>
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <a href="#" class="navbar-brand d-flex align-items-center">
                        <picture>
                            <img id=logo src="img/logos (6).png" width="300px" height="75px">
                        </picture>
                    </a>
                </div>
                <div class="col-8">
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
                                <a class="nav-link" href="08_page_loguin.php">LOGIN</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <main class="sistemaCliente" role="main">

        <section class="container">

            <div class="row">
                <div class="col-3">
                    <a class="sistemaMenu" data-toggle="pill" href="FornecedorPrinc_pag4.php" role="tab" aria-controls="v-pills-home" aria-selected="true"><img class="iconMenu" src="img/casa.png" alt="Home">Principal</a>
                </div>
                <div class="col-3">
                    <a class="sistemaMenu" id="v-pills-home-tab" data-toggle="pill" href="RegistroCliente_pag5.php" role="tab" aria-controls="v-pills-home" aria-selected="false"><img class="iconMenu" src="img/clientes.png" alt="Clientes">Cadastre seus Clientes</a>
                </div>
                <div class="col-3">
                    <a class="sistemaMenu" id="v-pills-home-tab" data-toggle="pill" href="AcomPedido_pag6.php" role="tab" aria-controls="v-pills-home" aria-selected="false"><img class="iconMenu" src="img/pedidos1.png" alt="Pedidos">Pedidos</a>
                </div>
                <div class="col-3">
                    <a class="sistemaMenu" id="v-pills-home-tab" data-toggle="pill" href="ProdutosEstoque_pag7.php" role="tab" aria-controls="v-pills-home" aria-selected="false"><img class="iconMenu" src="img/estoque.png" alt="Estoque">Produtos e Estoque</a>
                </div>
            </div>

            <h1 class="tituloSistema">Registro de Clientes</h1><br>

            <form class="formularioCliente" action="RegistroClienteRegist_pag8.php" method="post">

                <div class="row">
                    <div class="col">&nbspNome <br> <input type="text" class="form-control" name="nome" placeholder="Digite seu nome"></div>
                    <div class="col">&nbspCNPJ <br> <input type="text" name="cnpj" class="form-control" maxlength="18" placeholder="Digite o Cnpj" OnKeyPress="formatar('##.###.###/####-##', this)"></div>
                </div>
                <br>
                &nbspTelefone<br><input type="text" name="telefone" class="form-control" maxlength="14" placeholder="Digite DDD + telefone" OnKeyPress="formatar('## #####-####', this)"><br>
                <div class="row">
                    <div class="col">&nbspEndereco<br><input type="text" name="endereco" class="form-control" placeholder="Rua"><br></div>
                    <div class="col-2">&nbspNº<br><input type="text" name="n" class="form-control" maxlength="5" placeholder="Nº"><br></div>
                </div>
                &nbspBairro<br><input type="text" name="bairro" class="form-control" placeholder="Bairro"><br>
                <div class="row">
                    <div class="col">&nbspCidade<br><input type="text" name="cidade" class="form-control" placeholder="Cidade"><br></div>
                    <div class="col-3">&nbspEstado<br>
                        <select name="estado" class="form-control">
                            <option value="">UF</option>
                            <option value="AC">AC</option>
                            <option value="AL">AL</option>
                            <option value="AP">AP</option>
                            <option value="AM">AM</option>
                            <option value="BA">BA</option>
                            <option value="CE">CE</option>
                            <option value="DF">DF</option>
                            <option value="ES">ES</option>
                            <option value="GO">GO</option>
                            <option value="MA">MA</option>
                            <option value="MS">MS</option>
                            <option value="MT">MT</option>
                            <option value="MG">MG</option>
                            <option value="PA">PA</option>
                            <option value="PB">PB</option>
                            <option value="PR">PR</option>
                            <option value="PE">PE</option>
                            <option value="PI">PI</option>
                            <option value="RJ">RJ</option>
                            <option value="RN">RN</option>
                            <option value="RS">RS</option>
                            <option value="RO">RO</option>
                            <option value="RR">RR</option>
                            <option value="SC">SC</option>
                            <option value="SP">SP</option>
                            <option value="SE">SE</option>
                            <option value="TO">TO</option>
                        </select>
                    </div>
                </div>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Registrar</button>

            </form>

        </section>

    </main>

    <footer id="rodape" class="text-muted">
        <div class="navbar navbar-dark bg-dark shadow-sm">
            <p>Copyright 2013 © Company TRINAVE. Todos os direitos reservados.</p>
        </div>
    </footer>

</body>

</html>