<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="estilo.css">

    <script type="text/javascript" src="javaScript.js"></script>

    <title>Estoque</title>

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

    <main class="sistemaInicio" role="main">

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

            <h1 class="tituloSistema">Produtos e Estoque</h1><br>

            <form method="post" class="form-signin" action="loguin.php?">
                <table class="col table">
                    <tr>
                        <th scope="col-2">Perfil:<br><br><br>Descrição:</th>
                        <th scope="col"><select name="perfil" class="form-control">
                                <option value="">Escolha</option>
                                <option value="chapa">Chapa</option>
                                <option value="quadrado">Quadrado</option>
                                <option value="retangulo">Retangulo</option>
                                <option value="redondo">Redondo</option>
                                <option value="triangular">Triangular</option>
                                <option value="viga u">Viga U</option>
                                <option value="viga i">Viga I</option>
                                <option value="viga L">Viga L</option>
                                <option value="outros">Outros</option>
                            </select><br><textarea class="form-control" id="desc" placeholder="Descrição do produto"></textarea></th>
                        <th scope="col">Dimensão:</th>
                        <th scope="col">
                            <div class="input-group mb-3">
                                <input type="number" class="form-control" id="desc" step="100" min="0" placeholder="Largura" aria-label="Recipient's username" aria-describedby="basic-addon2" />
                                <div class="input-group-append"><span class="input-group-text" id="basic-addon2">mm</span></div>
                            </div>
                            <div class="input-group mb-3">
                                <input type="number" class="form-control" id="desc" step="100" min="0" placeholder="Comprimento" aria-label="Recipient's username" aria-describedby="basic-addon2" />
                                <div class="input-group-append"><span class="input-group-text" id="basic-addon2">mm</span></div>
                            </div>
                            <div class="input-group mb-3">
                                <input type="number" class="form-control" id="desc" step="100" min="0" placeholder="Espessura" aria-label="Recipient's username" aria-describedby="basic-addon2" />
                                <div class="input-group-append"><span class="input-group-text" id="basic-addon2">mm</span></div>
                            </div>
                        </th>
                    </tr>
                    <tr>
                        <th scope="col">Observações: </th>
                        <th scope="col"><input type="text" class="form-control" id="desc" placeholder="Informações adicionais" /></th>
                        <th scope="col">Quantidade: </th>
                        <th scope="col"><input type="number" class="form-control" id="qtd" min="0" placeholder="Quantidade" /></th>
                    </tr>
                    <tr>
                        <th scope="col">Valor: </th>
                        <th scope="col"><input type="number" class="form-control" id="valor" min="0" placeholder="0.00" /></th>
                        <th scope="col">Peso por unidade (kg): </th>
                        <th scope="col"><input type="number" class="form-control" id="peso" min="0" placeholder="0.00" /></th>
                    </tr>
                    <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th><button type="button" class="btn btn-primary" id="cadastrar">Cadastrar</button></th>
                    </tr>

                </table>
            </form>

            <?php
            include("funcoes.php");

            $qryLista = mysql_query("SELECT * FROM reg_qm_papel", $conexao);

            $resultado = array();

            $resultado[] = mysql_fetch_assoc($qryLista);

            echo json_encode($resultado);

            ?>

        </section>
    </main>

    <footer id="rodape" class="text-muted">
        <div class="navbar navbar-dark bg-dark shadow-sm">
            <p>Copyright 2013 © Company TRINAVE. Todos os direitos reservados.</p>
        </div>
    </footer>

</body>

</html>