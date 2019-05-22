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
                                <input type="number" class="form-control" name="largura"  min="0" placeholder="Largura" aria-label="Recipient's username" aria-describedby="basic-addon2" />
                                <div class="input-group-append"><span class="input-group-text" id="basic-addon2">mm</span></div>
                            </div>
                            <div class="input-group mb-3">
                                <input type="number" class="form-control" name="comprimento" min="0" placeholder="Comprimento" aria-label="Recipient's username" aria-describedby="basic-addon2" />
                                <div class="input-group-append"><span class="input-group-text" id="basic-addon2">mm</span></div>
                            </div>
                            <div class="input-group mb-3">
                                <input type="number" class="form-control" name="espessura" step="100" min="0" placeholder="Espessura" aria-label="Recipient's username" aria-describedby="basic-addon2" />
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
            
            <?php
                if($_SESSION['prod'] == 1){
                    echo "<h1 class='tituloSistema'>Produto Cadastrado com Sucesso!</h1><br>";
                }else if($_SESSION['prod'] == 2)
                    echo "<h1 class='tituloSistema'>Aconteceu algo errado, tente novamente!</h1><br>";
            ?>
            <h1 class="tituloSistema">Seu Estoque</h1><br>
            <hr>
            <table class="table">
                <thead>
                    <tr>
                        <td> Perfil </td>
                        <td> Largura </td>
                        <td> Comprimento</td>
                        <td> Espessura </td>
                        <td> Peso </td>
                        <td> Valor Produto </td>
                        <td> Quantidade </td>
                        <td> Valor total </td>
                        <td> Peso total </td>
                        <td> </td>
                    </tr>
                </thead>
                <?php
                    include("funcoes.php");

                    if($_SESSION['id'] > 1){

                        $sql = "SELECT  *
                        FROM produto WHERE id_fornecedor = ".$_SESSION['id'];
                        $resultado = mysqli_query($banco,$sql);
                        $num = mysqli_num_rows($resultado);

                        if($num > 1) {
                            while($produtos = mysqli_fetch_assoc($resultado)):
                ?>
                            <tr>
                                <td> <?= $produtos['perfil'] ?> </td>
                                <td> <?= $produtos['largura'] ?> </td>
                                <td> <?= $produtos['comprimento'] ?> </td>
                                <td> <?= $produtos['espessura'] ?> </td>
                                <td> <?= $produtos['peso'] ?> </td>
                                <td> <?= $produtos['valor'] ?> </td>
                                <td> <?= $produtos['quantidade'] ?> </td>
                                <td> <?= $produtos['quantidade']*$produtos['valor'] ?> </td>
                                <td> <?= $produtos['quantidade']*$produtos['peso'] ?> </td>

                                <td> 
                                    <a href="editar.php?id=<?= $produtos['id'] ?>">Editar</a>  | 
                                    <a href="excluir.php?id=<?= $produtos['id'] ?>">Excluir</a> 

                                    <button type="button" class="btn" data-toggle="modal" data-target="#modalExemplo">
                                    Abrir modal de demonstração
                                    </button>


                                            <!-- Modal -->
                                            <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Título do modal</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                            <?$_SESSION['descricao']?> <? $_SESSION['observacao'] ?>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                                        <button type="button" class="btn btn-primary">Salvar mudanças</button>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>

                                </td>
                            </tr>
                            <?php endwhile; }
                        else{
                            echo "<h5>Você ainda não cadastrou produtos.</h5>";
                }};
                ?>
            </table>
            
        </section>
    </main>
    </body>
    </html>

    <footer id="rodape" class="text-muted">
        <div class="navbar navbar-dark bg-dark shadow-sm">
            <p>Copyright 2013 © Company TRINAVE. Todos os direitos reservados.</p>
        </div>
    </footer>