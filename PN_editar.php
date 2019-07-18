<?php
require_once 'PN_verifica.php';
require_once 'PN_sql.php';

$id = intval($_GET['id']);
$sql = "SELECT * FROM noticias WHERE id = $id";
$resultado = mysqli_query($bd, $sql);
$noticia = mysqli_fetch_assoc($resultado);

require_once 'PN_topo.php'

?>

<h1>Editar notícia</h1>

<a href="PN_index.php"><button type="button" class="btn btn-success">Voltar</button></a>

<hr>

<form class="formCad" action="PN_editar_proc.php?id=<?= $noticia['id'] ?>" method="post">

    <label>Título</label>
    <input class="form-control" type="text" name="titulo" value="<?= $noticia['titulo'] ?>">

    <label>Data</label>
    <input class="form-control" type="date" name="data" value="<?= $noticia['data'] ?>">

    <label>Texto:</label>
    <input class="form-control" type="text" name="texo" value="<?= $noticia['texto'] ?>">

    <label>Autor</label>
    <input class="form-control" type="text" name="autor" value="<?= $noticia['autor'] ?>">

    <label>Foto</label>
    <input class="form-control" type="text" name="foto" value="<?= $noticia['foto'] ?>">

    <button class="btn btn-info" type="submit">Cadastrar</button>
</form>

<?php require_once 'PN_rodape.php' ?>