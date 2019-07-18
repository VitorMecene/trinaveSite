<?php
require_once 'PN_verifica.php';
require_once 'PN_sql.php';
?>

<div class="rom">
    <div class="col-6">
        <h1>Notícias Cadastradas</h1>
    </div>
    <div class="col-6">
        <a href="PN_inserir.php"><button type="button" class="btn btn-success">Inserir nova notícia</button></a>
        <a href="index.php"><button type="button" class="btn btn-danger">Sair</button></a>
    </div>
</div>

<hr>

<?php

$sql = "SELECT * FROM noticias ORDER BY id ASC LIMIT 5";
$resultado = mysqli_query($bd, $sql);

require_once 'PN_topo.php';
?>

<table class="table">
    <tr class="primeiraLinha">
        <td>Id</td>
        <td>Titulo</td>
        <td>Data</td>
        <td>Autor</td>
        <td>Foto</td>
        <td colspan="2">Opções</td>
    </tr>
    <?php
    while ($noticia = mysqli_fetch_assoc($resultado)) :
        ?>
        <tr>
            <td><?= $noticia['id'] ?></td>
            <td><?= $noticia['titulo'] ?></td>
            <td><?= $noticia['data'] ?></td>
            <td><?= $noticia['autor'] ?></td>
            <td><img src="img/<?= $noticia['foto'] ?>" alt="" height="90"></td>
            <td> <a href="PN_editar.php?id=<?= $noticia['id'] ?>"><button type="button" class="btn btn-warning">EDITAR</button></a></td>
            <td><a href="PN_excluir.php?id=<?= $noticia['id'] ?>"><button type="button" class="btn btn-danger">EXCLUIR</button></a></td>
        </tr>
    <?php endwhile; ?>
</table>
<?php
require_once 'PN_rodape.php';
