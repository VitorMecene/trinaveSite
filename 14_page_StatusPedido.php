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
                                <a class="nav-link" href="13_page_Deslogando.php">SAIR</a>
                                <?php echo"<a href=''><h6>Olá ".$_SESSION['nome']."</h5></a>"?>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <main class="sistemaEstoque" role="main">

        <section class="container">

            <div class="row">
                <div class="col-3">
                    <a class="sistemaMenu" data-toggle="pill" href="07_page_sisPrincipal.php" role="tab" aria-controls="v-pills-home" aria-selected="true"><img class="iconMenu" src="img/casa.png" alt="Home">Principal</a>
                </div>
                <div class="col-3">
                    <a class="sistemaMenu" id="v-pills-home-tab" data-toggle="pill" href="09_page_RegistroCliente.php" role="tab" aria-controls="v-pills-home" aria-selected="false"><img class="iconMenu" src="img/clientes.png" alt="Clientes">Cadastre seus Clientes</a>
                </div>
                <div class="col-3">
                    <a class="sistemaMenu" id="v-pills-home-tab" data-toggle="pill" href="11_page_AcomPedido.php" role="tab" aria-controls="v-pills-home" aria-selected="false"><img class="iconMenu" src="img/pedidos1.png" alt="Pedidos">Pedidos</a>
                </div>
                <div class="col-3">
                    <a class="sistemaMenu" id="v-pills-home-tab" data-toggle="pill" href="12_page_ProdutosEstoque.php" role="tab" aria-controls="v-pills-home" aria-selected="false"><img class="iconMenu" src="img/estoque.png" alt="Estoque">Produtos e Estoque</a>
                </div>
            </div>


        </section>
    
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
              <td>Nome: <?= $_SESSION['nome']?> </td>
              <td>Cnpj: <?= $_SESSION['cnpj']?></td>
              <td></td>

              </tr>
              <tr>
              <th scope="row"></th>
              <td> Endereço de Postagem: <BR> endereco +</td>
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
                  <td>Nome: <?= $cliente['nome']?> </td>
                  <td>Cnpj: <?= $cliente['cnpj']?> </td>
                  <td></td>

                  </tr>
                  <tr>
                  <th scope="row"></th>
                  <td> Endereço de Postagem:  <BR>
                  <?= $cliente['endereco']?><br><?= $cliente['bairro']?>, <?= $cliente['cidade']?> - <?= $cliente['estado']?> </td>
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
              <td>Quantidade: <?= $produto['quantidade']?></td>
              <td></td>

              </tr>

              <tr>
              <th scope="row"></th>
              <td>Peso Unitário: <?= $produto['peso']?> </td>
              <td>Peso Total: <?= $produto['peso']*$qtd?></td>
              <td></td>
              </tr>
            </tbody>
            <thead>
            <tr>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col">Valor do Frete</th>
            <th scope="col"><?= number_format(($produto['valor']*$qtd)+($produto['peso']*$qtd)*0.15, 2, ',', ' ')?></th>
            </tr>
            </thead>
            </table>
           
    </main>

    <footer id="rodape" class="text-muted">
        <div class="navbar navbar-dark bg-dark shadow-sm">
            <p>Copyright 2013 © Company TRINAVE. Todos os direitos reservados.</p>
        </div>
    </footer>

</body>

</html>