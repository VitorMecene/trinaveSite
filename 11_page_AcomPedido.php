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
    <title>Pedidos</title>

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

    <main class="sistemaPedido" role="main">


        <section class="container">


            <!-- ------------------------- DADOS USUÁRIO ------------------------- -->

            <?php echo "<h5>Olá " . $_SESSION['nome'] . "</h5>" ?>

            <!-- ------------------------- MENU SISTEMA ------------------------- -->

            <?php require_once 'menuSistema.php' ?>

            <!-- ------------------------- ------------ ------------------------- -->

            <h1 class="tituloSistema">Encaminhe seus Produtos</h1>
            <br><br>

            <form style="width:650px;" class="formularioCliente" action="11_page_GerarPedido.php" method="post">
                <div>
                    <?php
                    if ($_SESSION['prod'] == 1) {
                        echo "<h6 class='tituloSistema'>
                            <img id=logo src='img/check.jpg' width='75px' height='75px'>
                            Nossa já esta a caminho de entregar seus produtos.\nObrigado pela Preferencia!</h6><br>";
                        $_SESSION['prod'] = 0;
                    } else if ($_SESSION['prod'] == 2) {
                        echo "<h1 class='tituloSistema'>Aconteceu algo errado, tente novamente!</h1><br>";
                        $_SESSION['prod'] = 0;
                    }


                    include("funcoes.php");

                    if ($_SESSION['id'] > 1) {

                        $sql = "SELECT  *
                            FROM cliente WHERE fk_fornecedor = " . $_SESSION['id'];
                        $resultado = mysqli_query($banco, $sql);


                        ?>

                        <div class="input-group mb-3">

                            <!-- ------------------------- Select Cliente ------------------------- -->

                            <div class="input-group mb-3">
                                <select class="custom-select" name="selectCliente">
                                    <option selected>Selecione o Cliente</option>

                                    <?php
                                    while ($cliente = mysqli_fetch_assoc($resultado)) :
                                        echo  "<option value=" . $cliente['id'] . ">" . $cliente['nome'] . " - " . $cliente['cidade'] . " - " . $cliente['estado'] . "</option>";
                                    endwhile;
                                };
                                ?>

                            </select>
                            <div class="input-group-append">
                                <label class="btn btn-success" for="inputGroupSelect02">Cliente&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
                            </div>
                        </div>

                        <?php
                        if ($_SESSION['id'] > 1) {

                            $sql = "SELECT  *
                    FROM produto WHERE id_fornecedor = " . $_SESSION['id'];
                            $resultado = mysqli_query($banco, $sql);
                            ?>

                            <div class="input-group mb-3">
                                <select class="custom-select" name="selectProduto"> 1
                                    <option selected>Selecione o Produto</option>

                                    <?php
                                    while ($produto = mysqli_fetch_assoc($resultado)) :
                                        echo  "<option value=" . $produto['id'] . ">" . $produto['perfil'] . ":\t " . $produto['largura'] . " x " . $produto['comprimento'] . " x " . $produto['espessura'] . " mm
                                    &nbsp&nbsp&nbspQuant. em Estoque: " . $produto['quantidade'] . "</option>";
                                    endwhile;
                                };
                                ?>

                            </select>
                            <div class="input-group-append">
                                <label class="btn btn-success" for="inputGroupSelect02">Produto&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <select class="custom-select" name="endPost">
                                <option selected>Endereço de postagem</option>
                                <option value="Rua Davina, n 513<br>São Paulo - Guarulhos - Parque dos ipes<br>CEP: 17902-701">São Paulo - Guarulhos - Parque dos ipes, Rua Davina, n 513</option>
                                <option value="Rua Quinta do Jubair, n 715<br>Goiás - Goiânia - Pau Verde<br>CEP: 15921-000">Goiás - Goiânia - Pau Verde - Rua Quinta do Jubair, n 715 </option>
                                <option value="Juazeiro - Rua Padre Cicero, n 15<br>Ceará - Fortaleza<br>CEP: 11905-150">Ceará - Fortaleza - Juazeiro - Rua Padre Cicero, n 15</option>
                                <option value="Rua Sete de Setembro, n 200<br>Mato Grosso - Cuiabá<br>CEP: 12750-020">Mato Grosso - Cuiabá - Ribanceira - Rua Sete de Setembro, n 200</option>
                                <option value="Av. Dr. Flávio Henrique Lemos, 585<br>Portal Itamaracá, Taquaritinga - SP<br>CEP: 15900-000">São Paulo - Taquaritinga - Av. Dr. Flávio Henrique Lemos, n 585</option>
                            </select>
                            <div class="input-group-append">
                                <label class="btn btn-success" for="inputGroupSelect02">Terminal&nbsp&nbsp&nbsp&nbsp&nbsp</label>
                            </div>
                        </div>

                        <!-- <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2">@example.com</span>
                            </div>
                        </div> -->

                        <div class="input-group mb-3">
                            <input class="form-control" type="number" name="quantidade" min="1" placeholder="Informe a quantidade de produtos">
                            <div class="input-group-prepend">
                                <span class="btn btn-success" id="basic-addon1">Quantidade</span>
                            </div>
                        </div>

                    </div>

                    <button class="btn btn-warning" id="gerar" type="submit">Gerar Pedido</button>
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