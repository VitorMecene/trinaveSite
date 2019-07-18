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

    <main class="sistemaEstoque" role="main">


        <section class="container">

            <!-- ------------------------- DADOS USUÁRIO ------------------------- -->

            <?php echo "<h5>Olá " . $_SESSION['nome'] . "</h5>" ?>

            <!-- ------------------------- MENU SISTEMA ------------------------- -->

            <?php require_once 'menuSistema.php' ?>

            <!-- ------------------------- ------------ ------------------------- -->

            <h1 class="tituloSistema">Encaminhe seus Produtos</h1>

            <form style="width:650px;" class="formularioCliente" action="11_page_GerarPedido.php" method="post">
                <div>
                <?php   

                    include("funcoes.php");

                    $qtd = $_POST['quantidade'];

                    if($_SESSION['id'] > 1){

                        $sql = "SELECT  *
                        FROM cliente WHERE id = ".$_POST['selectCliente'];
                        $resultado = mysqli_query($banco,$sql);
                        $cliente = mysqli_fetch_assoc($resultado);

                        $sql = "SELECT  *
                        FROM produto WHERE id = ".$_POST['selectProduto'];
                        $resultado = mysqli_query($banco,$sql);
                        $produto = mysqli_fetch_assoc($resultado);
                
                    }


                ?>
                

            <table class='table table-sm mt-5' id='tabela'>
                <thead>
                    <tr>
                    <th scope="col"></th>
                    <th scope="col">Dados do Fonecedor</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    </tr>
                    </thead>
                <tbody>
                    <tr>
                        
                    <th scope="row"></th>
                    <td>Nome: <?= $_SESSION['nome']?></td>
                    <td>Cnpj: <?= $_SESSION['cnpj']?></td>
                    <td></td>

                    </tr>
                    <tr>
                    <th scope="row"></th>
                    <td>Endereço de Postagem:<br><?=$_POST['endPost']?> </td>
                    <td> </td>
                    <td></td>
                    </tr>
                </tbody>
                <thead>
                <tr>
                <th scope="col"></th>
                <th scope="col">Dados do Cliente</th>
                <th scope="col"></th>
                <th scope="col"></th>
                </tr>
                </thead>
                    <tbody>
                        <tr>
                            
                        <th scope="row"></th>
                        <td>Nome: <?=$cliente['nome']?></td>
                        <td>Cnpj: <?=$cliente['cnpj']?></td>
                        <td></td>

                        </tr>
                        <tr>
                        <th scope="row"></th>
                        <td>Endereço de Recebimento:<br>
                        <?= $cliente['endereco']?>, <?= $cliente['numero']?><br><?= $cliente['bairro']?> - <?= $cliente['cidade']?> - <?= $cliente['estado']?><br>CEP: 15995-150 </td>
                        <td> </td>
                        <td></td>
                        </tr>
                    </tbody>
                <thead>
                <tr>
                <th scope="col"></th>
                <th scope="col">Dados do Produto</th>
                <th scope="col"></th>
                <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        
                    <th scope="row"></th>
                    <td>Produto: <?= $produto['perfil']?> -  <?= $produto['largura']?> x <?= $produto['comprimento']?> x <?= $produto['espessura']?>mm</td>
                    <td>Quantidade: <?=$qtd?></td>
                    <td></td>

                    </tr>

                    <tr>
                    <th scope="row"></th>
                    <td>Peso Unitário: <?= $produto['peso']?> kg </td>
                    <td>Peso Total: <?= $produto['peso'] * $qtd?> kg </td>
                    <td></td>
                    </tr>
                </tbody>
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col">Valor do Frete</th>
                        <th scope="col">R$ <?= number_format(($produto['valor']*$qtd)+($produto['peso']*$qtd)*0.07, 2, ',', ' ')?></th>
                    </tr>
                </thead>
                
                <tr>
                <?php
                $endereço1 = $cliente['endereco']."|".$cliente['numero']."|".$cliente['bairro']."|".$cliente['cidade']."|".$cliente['estado'];
                $endereço2 =  $_POST['endPost'];
                $idcliente = $cliente['id']
                
                ?>
                    
                    <td></td>
                    <th><a href="11_page_AcomPedido.php" class="btn btn-success" type="submit">Voltar</a></th>
                    <th></th>
                    <td><a href="14_StatusPedido.php?Value=<?=$endereço1?>|<?=$endereço2?>|<?=$idcliente?>|<?=$qtd?>|<?=$produto['id']?>"
                    class="btn btn-success" type="submit">Pagamento</a></td>
                </tr>

            </table>
        </section>>
    </main>
    
    <footer id="rodape" class="text-muted navbar">
        <p class="text-center">Copyright 2013 © Company TRINAVE. Todos os direitos reservados.</p>
    </footer>

</body>

</html>