<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Trinave</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="estilo.css">

</head>

<body>

    <header id=cabecalho>
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <a href="#" class="navbar-brand d-flex align-items-center">
                        <picture>
                            <a href="#"><img id=logo src="img/logos (6).png" width="300px" height="75px"></a>
                        </picture>
                    </a>
                </div>
                <div class="col-9">
                    <nav id="menu">
                        <ul class="nav nav-pills">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">INÍCIO</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="02_page_empresa.html">EMPRESA</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="03_page_servico.html">SERVIÇOS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="04_page_fale.html">CONTATO</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="06_page_loguin.php">ENTRAR</a>
                            </li>
                            <li class="nav-item">
                                <!-- Botão para acionar modal -->
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalExemplo">
                                    Rastrear pedido
                                </button>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <main class="mainPageInicio" role="main">

        <section class="container">

            <!-- Modal -->
            <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Rastrear seus produto</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="16_pag_Consulta.php" method="post">
                                <div class="justify-content-md-center"><input type="text" class="form-control" name="chave" placeholder="Ex: BR-XXXXXX"></div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Pesquisar</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-------------------------- CAROSSEL -------------------------->

            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/caminhao1.jpg" class="d-block w-100" alt="Imagem Caminhão">
                    </div>
                    <div class="carousel-item">
                        <img src="img/trem1.jpg" class="d-block w-100" alt="Imagem Trem">
                    </div>
                    <div class="carousel-item">
                        <img src="img/navio1.jpg" class="d-block w-100" alt="Imagem Navio">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <!-------------------------- ----------- -------------------------->

            <picture>
                <img id="imgTituloPrincipal" src="img/titulo.png" alt="Nome completo da empresa TRINAVE">
            </picture>

            <div class="row">
                <div class="col-4">
                    <img src="img/iso9001.png" class="rounded mx-auto d-block" alt="Sobre nós">
                </div>
                <div class="col-4">
                    <h4 calss="pJustify">A TRINAVE integra a qualidade e a agilidade assegurando a rastreabilidade do
                        pedido e a produtividade em todo o processo de transporte</h4>
                </div>
                <div class="col-4">
                    <img src="img/tecgenesis1.png" class="rounded mx-auto d-block" alt="Serviços">
                </div>
            </div>

            <!-- ------------------------ NOTICIAS ------------------------ -->

            <h1 class="h3Titulo">Últimas Notícias</h1>

            <?php

            require_once 'PN_sql.php';

            $sql = "SELECT * FROM noticias ORDER BY id ASC LIMIT 4";
            $resultado = mysqli_query($bd, $sql);

            ?>

            <div class="row">

                <?php
                while ($noticia = mysqli_fetch_assoc($resultado)) :
                    ?>
                    <div class="col-6">
                        <div class="card mb-3">
                            <a target="_blank" href="..."> <img class="imgNoticia" src="img/<?= $noticia['foto'] ?>"> </a>
                            <div class="card-body">
                                <h5 class="card-title"><?= $noticia['titulo'] ?></h5>

                                <p class="card-text"><?= $noticia['texto'] ?>
                                </p>
                                <p class="card-text"><small class="text-muted"><?= $noticia['data'] ?></small></p>
                            </div>
                        </div>
                    </div>

                <?php endwhile; ?>

            </div>


        </section>

    </main>

    <footer id="rodape" class="text-muted">

        <?php require_once 'rodapeSite.php' ?>

    </footer>

</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>