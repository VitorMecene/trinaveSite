<?php

session_start();

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

if($usuario == 'admin' && $senha == 'ads'){
    $_SESSION['PN_login'] = true;
    header('location: PN_index.php');
}else{
    header('location: PN_login.php?erro=1');
}