<?php
if (session_status() !== PHP_SESSION_ACTIVE) {//Verificar se a sessão não já está aberta.
  session_start();
}

include("funcoes.php");

    $valor = $_POST['valor'];
    $ativo = 1;
    $perfil = $_POST['perfil'];
    $descricao = $_POST['desc'];
    $observacao = $_POST['inf'];
    $largura = $_POST['largura'];
    $comprimento = $_POST['comprimento'];
    $espessura = $_POST['espessura'];
    $quantidade = $_POST['qtd'];
    $peso = $_POST['peso'];
    
    $sql = InsereProduto($_SESSION['id'], $_SESSION['nome'], $valor, $ativo, $perfil, $descricao, $observacao, $largura, $comprimento, $espessura, $quantidade, $peso);

    $resultado = mysqli_query($banco,$sql);



    if( $sql > 0){
        $_SESSION["prod"] = 1;
        header("location: 12_page_ProdutosEstoque.php?insert=".$sql);}
    else{
        $_SESSION["prod"] = 2;
        header("location: 12_page_ProdutosEstoque.php?insert=".$sql);}
