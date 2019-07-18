<?php
if (session_status() !== PHP_SESSION_ACTIVE) {//Verificar se a sessão não já está aberta.
    session_start();
  }


$banco = mysqli_connect('localhost', 'root', '', 'trinave');

if(mysqli_connect_errno($banco)){
    echo "Falha ao conectar ".mysqli_connect_error();
}

function ConectarBanco(){
    $banco = mysqli_connect('localhost', 'root', '', 'trinave');

    if(mysqli_connect_errno($banco)){
        echo "Falha ao conectar ".mysqli_connect_error();}
    return $banco;
} 

function InsereFornecedor($nome, $cnpj, $telefone, $email, $senha){
    $banco = ConectarBanco();
    $sql = "INSERT INTO fornecedor(nome, cnpj, telefone, email, senha) VALUES ('".$nome."', '".$cnpj."', '".$telefone."', '".$email."', '".$senha."')";
    
    $get = mysqli_query($banco,$sql);

    return $get;
}

function InsereCliente($nome, $cnpj, $telefone, $endereco, $n, $bairro, $cidade, $estado, $fornecedor){
    $banco = ConectarBanco();
    $sql = "INSERT INTO cliente(nome, cnpj, telefone, endereco, numero, bairro, cidade, estado, fk_fornecedor ) 
    VALUES ('".$nome."', '".$cnpj."', '".$telefone."', '".$endereco."', '".$n."', '".$bairro."', '".$cidade."', '".$estado."', '".$fornecedor."')";
    $get = mysqli_query($banco,$sql);

    return $get;
}

function InsereProduto($id_fornecedor, $nome, $valor, $ativo, $perfil, $descricao, $observacao, $largura, $comprimento, $espessura, $quantidade, $peso){
    $banco = ConectarBanco();
    $sql = "INSERT INTO produto (id_fornecedor, nome, valor, ativo, perfil, descricao, observacao, largura, comprimento, espessura, quantidade, peso) 
    VALUES ('".$_SESSION['id']."','".$nome."','".$valor."','".$ativo."','".$perfil."','".$descricao."','".$observacao."','".$largura."','".$comprimento."','".$espessura."','".$quantidade."','".$peso."')";
    $get = mysqli_query($banco,$sql);

    return $get;
}

?>