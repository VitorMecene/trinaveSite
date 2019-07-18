
<?php
include('funcoes.php');

$id = intval($_GET['id']);

$sql = "DELETE FROM produto WHERE id = $id";
mysqli_query($banco,$sql);

    
    header("location: 12_page_ProdutosEstoque.php");

?>
