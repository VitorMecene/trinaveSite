
<?php
include('funcoes.php');

$id = intval($_GET['id']);

$sql = "DELETE FROM cliente WHERE id = $id";
mysqli_query($banco,$sql);

    
    header("location: 09_page_RegistroCliente.php");

?>
