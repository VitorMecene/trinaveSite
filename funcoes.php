<?php

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

function InsereCliente($nome, $cnpj, $telefone, $endereco, $n, $bairro, $cidade, $estado){
    $banco = ConectarBanco();
    $sql = "INSERT INTO cliente(nome, cnpj, telefone, endereco, numero, bairro, cidade, estado ) 
    VALUES ('".$nome."', '".$cnpj."', '".$telefone."', '".$endereco."', '".$n."', '".$bairro."', '".$cidade."', '".$estado."')";
    $get = mysqli_query($banco,$sql);

    return $get;
}

?>