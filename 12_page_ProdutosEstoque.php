<?php
if (session_status() !== PHP_SESSION_ACTIVE) { //Verificar se a sessão não já está aberta.
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

    <!--script type="text/javascript" src="javaScript.js"></script-->

    <title>Estoque</title>

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

    <main class="sistemaEstoque" role="main">

        <section class="container">

            <!-- ------------------------- DADOS USUÁRIO ------------------------- -->

            <?php echo "<h5>Olá " . $_SESSION['nome'] . "</h5>" ?>

            <!-- ------------------------- MENU SISTEMA ------------------------- -->
            
            <?php require_once 'menuSistema.php' ?>

            <!-- ------------------------- ------------ ------------------------- -->

            <h1 class="tituloSistema">Produtos e Estoque</h1><br>

            <form method="post" class="form-signin" action="12_page_ConfCadastroProd.php">
                <table class="col table">
                    <tr>

                        <th scope="col-2">Perfil:<br><br><br>Descrição:</th>
                        <th scope="col"><select name="perfil" class="form-control">
                                <option value="">Escolha</option>
                                <option value="Chapa">Chapa</option>
                                <option value="Quadrado">Quadrado</option>
                                <option value="Retangulo">Retangulo</option>
                                <option value="Redondo">Redondo</option>
                                <option value="Triangular">Triangular</option>
                                <option value="Viga u">Viga U</option>
                                <option value="Viga i">Viga I</option>
                                <option value="Viga L">Viga L</option>
                                <option value="Outros">Outros</option>
                            </select><br><textarea class="form-control" name="desc" placeholder="Descrição do produto"></textarea></th>
                        <th scope="col">Dimensão:</th>
                        <th scope="col">
                            <div class="input-group mb-3">
                                <input type="number" class="form-control" name="largura" min="0" placeholder="Largura" aria-label="Recipient's username" aria-describedby="basic-addon2" />
                                <div class="input-group-append"><span class="input-group-text" id="basic-addon2">mm</span></div>
                            </div>
                            <div class="input-group mb-3">
                                <input type="number" class="form-control" name="comprimento" min="0" placeholder="Comprimento" aria-label="Recipient's username" aria-describedby="basic-addon2" />
                                <div class="input-group-append"><span class="input-group-text" id="basic-addon2">mm</span></div>
                            </div>
                            <div class="input-group mb-3">
                                <input type="number" class="form-control" name="espessura" min="0" placeholder="Espessura" aria-label="Recipient's username" aria-describedby="basic-addon2" />
                                <div class="input-group-append"><span class="input-group-text" id="basic-addon2">mm</span></div>
                            </div>
                        </th>
                    </tr>
                    <tr>
                        <th scope="col">Observações: </th>
                        <th scope="col"><input type="text" class="form-control" name="inf" placeholder="Informações adicionais" /></th>
                        <th scope="col">Quantidade: </th>
                        <th scope="col"><input type="number" class="form-control" name="qtd" min="0" placeholder="Quantidade" /></th>
                    </tr>
                    <tr>
                        <th scope="col">Valor: </th>
                        <th scope="col"><input type="number" class="form-control" name="valor" min="0" placeholder="0.00" /></th>
                        <th scope="col">Peso por unidade (kg): </th>
                        <th scope="col"><input type="number" class="form-control" name="peso" min="0" placeholder="0.00" /></th>
                    </tr>
                    <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th><button type="subimit" class="btn btn-primary" id="cadastrar">Cadastrar</button></th>
                    </tr>
                </table>

            </form>

            <form>
                <?php
                if ($_SESSION['prod'] == 1) {
                    echo "<h6 class='tituloSistema'>
                        <img id=logo src='img/check.jpg' width='75px' height='75px'>
                        Produto Cadastrado com Sucesso!</h6><br>";
                    $_SESSION['prod'] = 0;
                } else if ($_SESSION['prod'] == 2)
                    echo "<h1 class='tituloSistema'>Aconteceu algo errado, tente novamente!</h1><br>";
                $_SESSION['prod'] = 0;
                ?>
                <h1 class="tituloSistema">Seu Estoque</h1><br>

                <table class="table">

                    <thead>
                        <tr>
                            <td style="width: 250px"> Qtd </td>
                            <td style="width: 250px"> Perfil </td>
                            <td style="width: 250px"> Largura </td>
                            <td style="width: 250px"> Comprimento</td>
                            <td style="width: 250px"> Espessura </td>
                            <td style="width: 250px"> Peso </td>
                            <td style="width: 250px"> Valor Produto </td>
                            <td style="width: 250px"> Valor total </td>
                            <td style="width: 250px"> Peso total </td>
                            <td style="width: 250px"> </td>
                        </tr>
                    </thead>

                    <?php

                    include("funcoes.php");

                    if ($_SESSION['id'] > 1) {

                        $sql = "SELECT  *
                            FROM produto WHERE id_fornecedor = " . $_SESSION['id'];
                        $resultado = mysqli_query($banco, $sql);

                        while ($produtos = mysqli_fetch_assoc($resultado)) :

                            ?>
                            <tr>
                                <td> <?= $produtos['quantidade'] ?> </td>
                                <td style="width: 200px;"> <?= $produtos['perfil'] ?> </td>
                                <td style="width: 200px;"> <?= $produtos['largura'] ?> mm</td>
                                <td style="width: 200px;"> <?= $produtos['comprimento'] ?> mm </td>
                                <td style="width: 20px;"> <?= $produtos['espessura'] ?> mm </td>
                                <td style="width: 20px;"> <?= $produtos['peso'] ?> kg </td>
                                <td style="width: 200px;">R$ <?= number_format($produtos['valor'], 2, ',', ' ')  ?> </td>
                                <td style="width: 200px;">R$ <?= number_format($produtos['quantidade'] * $produtos['valor'], 2, ',', ' ') ?> </td>
                                <td style="width: 200px;"> <?= $produtos['quantidade'] * $produtos['peso'] ?> kg </td>
                                <td>
                                    <a class="btn btn-primary" href="Excluir.php?id=<?= $produtos['id'] ?>">Excluir</a>
                                </td>
                            </tr>

                        <?php

                    endwhile;
                } else {
                    echo "<h5>Você ainda não cadastrou produtos.</h5>";
                };

                ?>

                </table>
                <hr>
                <br>
            </form>

        </section>
    </main>
</body>

</html>

<footer id="rodape" class="text-muted navbar">
    <p class="text-center">Copyright 2013 © Company TRINAVE. Todos os direitos reservados.</p>
</footer>