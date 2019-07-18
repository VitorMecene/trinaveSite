<?php
require_once 'PN_verifica.php';
require_once 'PN_topo.php' ?>

<h1>Adicionar notícia</h1>

<a href="PN_index.php"><button type="button" class="btn btn-success">Voltar</button></a>

<hr>
<form class="formCad" action="PN_inserir_proc.php" method="post" enctype="multipart/form-data">

    <div class="form-group">
        <label>Título:</label>
        <input class="form-control" type="text" name="titulo">
        <label>Data:</label>
        <input class="form-control" type="date" name="data">

        <label>Texto:</label>
        <textarea class="form-control" type="msg" name="texo" cols="30" rows="10" style="resize: none"></textarea>

        <label>Autor:</label>
        <input class="form-control" type="text" name="autor">
        <input type="file" name="foto"><br><br>
        <button class="btn btn-info" type="submit">Cadastrar</button>
    </div>

</form>

<?php require_once 'PN_rodape.php' ?>