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
                        <div class="row"><div class="col row justify-content-center rounded"></div><div class="col mr-5"><h3>Registro de Clientes</h3><br></div><div class="col"></div></div>
                            <div class="row">
                                <div class="col row justify-content-center rounded">
                                    <form action="RegistroClienteRegist_pag8.php" method="post">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col">&nbspNome <br> <input type="text" class="form-control" name ="nome" placeholder="Digite seu nome"></div>
                                                <div class="col">&nbspCNPJ <br> <input type="text" name="cnpj" class="form-control" maxlength="18" placeholder="Digite o Cnpj" OnKeyPress="formatar('##.###.###/####-##', this)" ></div>
                                            </div>
                                            <br>
                                            &nbspTelefone<br><input type="text" name="telefone" class="form-control" maxlength="14" placeholder="Digite DDD + telefone" OnKeyPress="formatar('## #####-####', this)"><br>
                                            <div class="row">
                                                <div class="col">&nbspEndereco<br><input type="text" name="endereco" class="form-control" placeholder="Rua" ><br></div>
                                                <div class="col-2">&nbspNº<br><input type="text" name="n" class="form-control" maxlength="5" placeholder="Nº" ><br></div>
                                            </div>
                                            &nbspBairro<br><input type="text" name="bairro" class="form-control" placeholder="Bairro" ><br>
                                            <div class ="row">    
                                                <div class="col">&nbspCidade<br><input type="text" name="cidade" class="form-control" placeholder="Cidade" ><br></div>        
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
                                        </div>
                                    </form>
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