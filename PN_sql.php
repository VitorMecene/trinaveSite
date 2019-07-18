<?php

$bd = mysqli_connect('localhost','root','','news');

if(mysqli_connect_errno($bd)){
    echo "Falha ao conectar".mysqli_connect_errno();
}

?>