<?php
require_once 'PN_verifica.php';
require_once 'PN_sql.php';

$id = intval($_GET['id']);

$sql = "DELETE FROM noticias WHERE id = $id";
mysqli_query($bd,$sql);

header('location: PN_index.php');

?>