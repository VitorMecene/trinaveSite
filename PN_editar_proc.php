<?php
require_once 'PN_verifica.php';
require_once 'PN_sql.php';

$id = intval($_GET['id']);

$titulo = $bd->real_escape_string($_POST['titulo']);
$data = $bd->real_escape_string($_POST['data']);
$texto = $bd->real_escape_string($_POST['texto']);
$autor = $bd->real_escape_string($_POST['autor']);
$foto = $bd->real_escape_string($_POST['foto']);

$sql = "UPDATE noticias SET
        titulo = '$titulo', 
        data = '$data', 
        texto = '$texto', 
        autor = '$autor', 
        foto = '$foto' 
        WHERE id = $id";
mysqli_query($bd,$sql);
echo $sql;

/*
mysql_error($bd);
exit();
*/

header('location: PN_index.php');

?>