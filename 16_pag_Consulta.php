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
                                <a class="nav-link" href="06_page_loguin.php">ENTRAR</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <main class="sistemaInicio" role="main">

        <section class="container">


            <?php 

            if(empty($_POST['chave']))
            {
                echo "<h2>Ops.... Parece que esqueceu de digitar.<br>Continue navegando...</h2>";

            }else{

            include("funcoes.php");
            $chave = $_POST['chave'];
            
            $sql = "SELECT * FROM pedido WHERE chave = '".$chave."'"; #Encontra o ultimo valor do banco
            $resultado = mysqli_query($banco,$sql);

            if($pedido = mysqli_fetch_assoc($resultado)) {

            date_default_timezone_set('America/Sao_Paulo');


            $data = explode("-",date("Y-m-d"));
            $datap = explode("-",$pedido['previsao_data']);
            $datae = explode("-",$pedido['data_emissao']);
            #echo $data[0]."A<br>";
            #echo $datap[1]."B<br>";
            #echo $pedido['data_emissao'];

            #

            $delta[1] = ((int)$datap[1] - (int)$datae[1])*30;                   #mes
            $delta[2] = ((int)$delta[1] + (int)$datap[2] - (int)$datae[2]);     #dia

            #echo $datap[1]."<br>";
            #echo $datae[1]."<br>";

            $delta[0] = ((int)$data[1] - (int)$datae[1])*30;                    #mes
            $delta[1] = ((int)$delta[0] + (int)$data[2] - (int)$datae[2]);      #dia

            #echo $data[0]."<br>";
            #echo $datap[0]."<br>";
            #echo $datae[0]."<br>";

            if($delta[2] !== 0){
            $porcento = $delta[1] / $delta[2] * 100;
            }else{
                $porcento = 0;
                echo "Divisão por zero";
                echo $data[1]."<br>";
                echo $datap[1]."<br>";
                echo $datae[2]."<br>";
            }

            ?>

            <div class="row mt-5 justify-content-md-center">

                <div class="card border-success mb-3" style="max-width: 18rem;">
                <div class="card-header"><strong>Temos o prazer em fornecer!</strong></div>
                <div class="card-body text-success">
                    <h4 class="card-title"><strong><?=$_POST['chave']?></strong></h4>
                    <p class="text-center">Código de Rastreamento</p>
                </div>
                </div>

            </div>

            <div class="row ">
                <div class="col">
                <table style="width: 1100px;">
                    <td style="width: 200px;"><h4 style="text-align: left"><strong><?= date('d/m',strtotime($pedido['data_emissao']))?></strong></h4></td>
                    <td style="width: 200px;"></td>
                    <td style="width: 200px;"></td>
                    <td style="width: 200px;"><h4><strong><?= date('d/m',strtotime($pedido['previsao_data']))?></strong></h4></td>
                    <td style="width: 25px;"></td>
                </table>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" 
                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: <?=$porcento?>%"></div>
                </div>
                <table style="width: 1175px;">
                <br>
                    <td style="width: 20px;">Postado</td>
                    <td style="width: 10px;"></td>
                    <td style="width: 20px;">Quase lá!</td>
                    <td style="width: 10px;"></td>
                    <td style="width: 20px;">Seu produto em mãos!</td>
                </table>
                </div>
            </div>

        </section>
        
        <?php
                }else{

                    echo "<h5>Código inválido,<br>
                    Tente digitar o código novamente</h5>";

            }};
        ?>

    </main>


        </section>
    </main>

    <footer id="rodape" class="text-muted">
        <div class="navbar navbar-dark bg-dark shadow-sm">
            <p>Copyright 2013 © Company TRINAVE. Todos os direitos reservados.</p>
        </div>
    </footer>

</body>

</html>

<?php unset($_SESSION["invalido"]); ?>