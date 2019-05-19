<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>loguin</title>
</head>
<body>
    

<?php
include('funcoes.php');

session_start();


    if(isset($_POST['email']) && isset($_POST['senha'])){
        
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $teste = md5($senha);

        $sql = "SELECT nome, email, senha, cnpj FROM fornecedor WHERE email = '".$email."' AND senha = '".$senha."'";
        $get = mysqli_query($banco,$sql);
        $num = mysqli_num_rows($get);

        if($num == 1){
            while($percorrer = mysqli_fetch_array($get)){
                $adm = $percorrer['cnpj'];
    $nome = $percorrer['nome'];
    session_cache_expire(10);
    session_start();
                if($adm == 1){
                    $_SESSION['cnpj'] = $nome;
                } else{
                    $_SESSION['setor'] = $nome;
                }
                header("location: FornecedorPrinc_pag4.php");
            }
        }else{
            // echo "Email ou senha incorreta"; nessa linha você apenas mostrava os dados errados na mesma pagina login.php
        
            // aqui voce manda pra session invalido o error que deu no request e redireciona pra index de login
            $_SESSION["invalido"] = "E-mail ou senha invalidos.";
            echo "Erro de loguin";
            header("location: 08_page_loguin.php");
        }
    }

?>
    
</body>
</html>