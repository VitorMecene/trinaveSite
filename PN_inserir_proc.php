<?php
require_once 'PN_verifica.php';
require_once 'PN_sql.php';

$titulo = $bd->real_escape_string($_POST['titulo']);
$data = $bd->real_escape_string($_POST['data']);
$texto = $bd->real_escape_string($_POST['texto']);
$autor = $bd->real_escape_string($_POST['autor']);

$destino = 'img/'.basename($_FILES['foto']['name']);
move_uploaded_file($_FILES['foto']['tmp_name'],$destino);
$foto = $bd->real_escape_string($_FILES['foto']['name']);

$sql = "INSERT INTO noticias (titulo,data,texto,autor,foto)
        VALUE ('$titulo','$data','$texto','$autor','$foto')";

mysqli_query($bd,$sql);

/*
mysql_error($bd);
exit();
*/

header('location: PN_index.php');

?>