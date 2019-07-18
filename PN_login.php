<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="estilopainel.css">

    <title>Painel de Controle</title>
</head>

<body id="inicio" class="container">

    <section id="inicio" class="container">

        <img class="imgtitulo" src="img\titulo_noticias.png" alt="logo de noticias">

        <form class="formlogin" action="PN_login_proc.php" method="post">
            <div class="form-group">
                <input class="form-control" type="text" name="usuario" placeholder="User">

                <input class="form-control" type="password" name="senha" placeholder="Senha">

                <button class="btn btn-info" type="submit">Login</button>
                <a href="index.php"><button class="btn btn-success" type="button">Voltar</button></a>
            </div>
        </form>

    </section>

    <?php require_once 'PN_rodape.php'; ?>