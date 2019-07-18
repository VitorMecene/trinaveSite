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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <title>Cadastro de Clientes</title>

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

    <main class="sistemaCliente" role="main">

        <section class="container">

        
            <!-- ------------------------- DADOS USUÁRIO ------------------------- -->

            <?php echo "<h5>Olá " . $_SESSION['nome'] . "</h5>" ?>

            <!-- ------------------------- MENU SISTEMA ------------------------- -->

            <?php require_once 'menuSistema.php' ?>

            <!-- ------------------------- ------------ ------------------------- -->

            <h1 class="tituloSistema">Registro de Clientes</h1><br>

            <form class="formularioCliente" action="10_page_RegistroClienteConfirm.php" method="post">

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
                <script>
                    if ($("<input />").prop("required") === undefined) {
                        $(document).on("submit", function(e) {
                            $(this)
                                .find("input, select, textarea")
                                .filter("[required]")
                                .filter(function() {
                                    return this.value == '';
                                })
                                .each(function() {
                                    e.preventDefault();
                                    $(this).css({
                                        "border": "2px solid red"
                                    })
                                    alert($(this).prev('label').html() + " é obrigatório.");
                                });
                        });
                    }
                </script>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Registrar</button>

            </form>

            <form >
                <?php
                if ($_SESSION['cliente'] == 1) {
                    echo "<h6 class='tituloSistema'>
                        <img id=logo src='img/check.jpg' width='75px' height='75px'>
                        Cliente Cadastrado com Sucesso!</h6><br>";
                    $_SESSION['cliente'] = 0;
                } else if ($_SESSION['cliente'] == 2)
                    echo "<h1 class='tituloSistema'>Aconteceu algo errado, tente novamente!</h1><br>";
                $_SESSION['cliente'] = 0;
                ?>
                <h1 class="tituloSistema">Seus Clientes</h1><br>

                <table class="table">

                    <thead>
                        <tr>
                            <td style="width: 250px"> Nome </td>
                            <td style="width: 250px"> CNPJ </td>
                            <td style="width: 250px"> Cidade </td>
                            <td style="width: 250px"> Estado</td>
                            <td style="width: 250px"> Telefone</td>
                            <td style="width: 250px"> </td>
                        </tr>
                    </thead>

                    <?php

                    include("funcoes.php");

                    if ($_SESSION['id'] > 1) {

                        $sql = "SELECT  *
                            FROM cliente WHERE fk_fornecedor = " . $_SESSION['id'];
                        $resultado = mysqli_query($banco, $sql);

                        while ($cliente = mysqli_fetch_assoc($resultado)) :

                            ?>
                            <tr>
                                <td> <?= $cliente['nome'] ?> </td>
                                <td style="width: 200px;"> <?= $cliente['cnpj'] ?> </td>
                                <td style="width: 200px;"> <?= $cliente['cidade'] ?></td>
                                <td style="width: 20px;"> <?= $cliente['estado'] ?></td>
                                <td style="width: 20px;"> <?= $cliente['telefone'] ?></td>
                                <td>
                                    <a class="btn btn-primary" href="excluirCliente.php?id=<?= $cliente['id'] ?>">Excluir</a>
                                </td>
                            </tr>

                        <?php
                    endwhile;
                } else {
                    echo "<h5>Você ainda não cadastrou clientes.</h5>";
                };

                ?>

                </table>
                <hr>
                <br>
            </form>

        </section>

    </main>

    <footer id="rodape" class="text-muted">
        <div class="navbar navbar-dark bg-dark shadow-sm">
            <p>Copyright 2013 © Company TRINAVE. Todos os direitos reservados.</p>
        </div>
    </footer>

</body>

<script>
    function formatar(mascara, documento) {
        var i = documento.value.length;
        var saida = mascara.substring(0, 1);
        var texto = mascara.substring(i)

        if (texto.substring(0, 1) != saida) {
            documento.value += texto.substring(0, 1);
        }

    }
</script>

</html>