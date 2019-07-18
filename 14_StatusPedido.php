<?php
if (session_status() !== PHP_SESSION_ACTIVE) {//Verificar se a sessão não já está aberta.
  session_start();
}
?>

<script>
function GeradorCodigo(estado1){
    meio = Math.random() * (999999 - 100000) + 100000;
    return estado + meio + "BR";
}

function GeradorDias(){
    meio = Math.random() * (15 - 2) + 2;
    return meio;
}


</script>

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

    <main class="sistemaInicio" role="main">

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
        
        <form action="">
        <?php
        include("funcoes.php");

        $value = explode("|", $_GET['Value']);
        
        
        $endereço1 = $value[0]." ,".$value[1]."<br>".$value[2]." ".$value[3]." - ".$value[4];
        date_default_timezone_set('America/Sao_Paulo');
        $data = date("Y-m-d H:i");
        $codigoRastreio = "BR-".rand(100000, 999999);
        $geraDia = rand(2,15);


        $sql = "SELECT quantidade FROM produto WHERE id =".$value[8]; #Encontra o ultimo valor do banco
        $resultado = mysqli_query($banco,$sql); 
        $qtd = mysqli_fetch_assoc($resultado);

        echo $qtd['quantidade']." <br>".$value[7];

        if($qtd['quantidade'] > 0 and $qtd > $value[7]){


            
            $data2 = date('Y-m-d H:i', strtotime('+ '.$geraDia.' days', strtotime(".$data.")));
            
            $endereco2 = $value[5];

            $sql = "INSERT INTO pedido (id_cliente, data_emissao, end_envio, chave, previsao_data, end_receb) #Faz a Inserção do serviço.
            VALUES ('".$value[6]."','".$data."','".$endereço1."', '".$codigoRastreio."', '".$data2."', '".$endereco2."')";
            $resultado = mysqli_query($banco,$sql); 

            
            $qtd = $qtd['quantidade'] - $value[7];
            $sql = "UPDATE produto SET quantidade = ".$qtd." WHERE id = ".$value[8]; #Faz o calculo e substitui no banco
            $resultado1 = mysqli_query($banco,$sql); 
            if ($resultado1 > 0){
                echo "Sucesso na incersão";
                
                header("location: 15_page_StatusPedido.php?chave=".$codigoRastreio); 

            }}else{
                header("location: 07_page_sisPrincipal.php"); 

            };

                


        ?>
        </form>
           
    </main>

    <footer id="rodape" class="text-muted">
        <div class="navbar navbar-dark bg-dark shadow-sm">
            <p>Copyright 2013 © Company TRINAVE. Todos os direitos reservados.</p>
        </div>
    </footer>

</body>

</html>