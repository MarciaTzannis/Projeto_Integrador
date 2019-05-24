<?php
    include "head.php";
    include "header.php";
?>
<!-- Bootstrap core CSS -->
<!-- <link href="css/feed/bootstrap.min.css" rel="stylesheet"> -->

<!-- Custom styles for this template -->
<!-- <link href="css/feed/blog-home.css" rel="stylesheet"> **FOI PARA HEADER.PHP** -->
<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

            <h1 class="my-4">Eventos
                <small>Corrida</small>
            </h1>

            <button type="button" class="btn btn-default btn-md">
              <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Crie um novo evento
            </button>
            <!-- Blog Post -->
            <div class="card mb-4 evento">
                <div class="card-body">
                    <h2 class="card-title">Corrida marota</h2>

                    <div class="img-feed">
                      <img class="card-img-top foto-post" src="img\logocorrida.png" alt="Card image cap">
                    </div>

                    <div class="descricao-feed">
                      <p class="card-text"><b>Local do evento:</b> Parque Ibirapuera.</p>

                      <p class="card-text"><b>Data e hora:</b>  Todas as quartas as 18:30.</p>

                      <p class="card-text"><b>Descrição do evento:</b>Uma corridinha marota para queimar as cervejinhas do fim de semana.</p>

                      <a href="post.php" class="btn btn-primary">Entre no evento &rarr;</a>
                    </div>

                </div>
                    <div class="card-footer text-muted">
                        Postado em 17 de Maio 2017 por
                        <a href="#">Douglas</a>
                    </div>
                </div>

                <div class="card mb-4 evento">
                    <div class="card-body">
                        <h2 class="card-title">Vamos maratonar!!</h2>

                        <div class="img-feed">
                          <img class="card-img-top foto-post" src="img\logocorrida.png" alt="Card image cap">
                        </div>

                        <div class="descricao-feed">
                          <p class="card-text"><b>Local do evento:</b> Cidade Universitária.</p>

                          <p class="card-text"><b>Data e hora:</b>  Domingo as 8:00.</p>

                          <p class="card-text"><b>Descrição do evento:</b>Treino para maratonas. Se você quer correr até acabar a sola do tênis?? Aqui é o lugar!!</p>

                          <a href="post.php" class="btn btn-primary">Entre no evento &rarr;</a>
                        </div>

                    </div>
                        <div class="card-footer text-muted">
                            Postado em 17 de Maio 2017 por
                            <a href="#">Douglas</a>
                        </div>
                    </div>

                    <div class="card mb-4 evento">
                        <div class="card-body">
                            <h2 class="card-title">Só os Usain Bolt aqui!</h2>

                            <div class="img-feed">
                              <img class="card-img-top foto-post" src="img\logocorrida.png" alt="Card image cap">
                            </div>

                            <div class="descricao-feed">
                              <p class="card-text"><b>Local do evento:</b> Estadio Olimpico.</p>

                              <p class="card-text"><b>Data e hora:</b>  Sabado as 9:00.</p>

                              <p class="card-text"><b>Descrição do evento:</b>Corrida para velocistas. Vamos treinar para deixar o Bolt comendo poeira!!</p>

                              <a href="post.php" class="btn btn-primary">Entre no evento &rarr;</a>
                            </div>

                        </div>
                            <div class="card-footer text-muted">
                                Postado em 17 de Maio 2017 por
                                <a href="#">Douglas</a>
                            </div>
                        </div>

                <!-- Blog Post -->
                <!-- <br>
                <div class="card mb-4 evento">

                    <h2 class="card-title">Só os Usain Bolt aqui!</h2>
                        <div class="card-body">
                        <img class="card-img-top foto-post" src="img\logomatchsports.png" alt="Card image cap">
                        <img class="card-img-top foto-post" src="img\logocorrida.png" alt="Card image cap">
                        <img class="card-img-top foto-post" src="img\logomatchsports.png" alt="Card image cap">
                    <h4>Local do evento:</h4>
                    <p class="card-text">Estadio Olimpico.</p>

                    <h4>Data e hora:</h4>
                    <p class="card-text">Sabado as 9:00.</p>

                    <h4>Descrição do evento:</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis
                        aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi
                        vero voluptate voluptatibus possimus, veniam magni quis!</p>
                        <a href="post.php" class="btn btn-primary">Entre no evento &rarr;</a>
                        </div>
                        <div class="card-footer text-muted">
                            Postado em 17 de Maio 2017 por
                            <a href="#">Douglas</a>
                        </div>
                    </div> -->

                    <!-- Blog Post -->
                    <!-- <br>
                    <div class="card mb-4 evento">
                        <div class="card-body">
                            <h2 class="card-title">Corridinha no parque.</h2>
                            <img class="card-img-top foto-post" src="img\logomatchsports.png" alt="Card image cap">
                            <img class="card-img-top foto-post" src="img\logocorrida.png" alt="Card image cap">
                            <img class="card-img-top foto-post" src="img\logomatchsports.png" alt="Card image cap">
                            <h4>Local do evento:</h4>
                            <p class="card-text">Parque da cidade.</p>

                            <h4>Data e hora:</h4>
                            <p class="card-text">Todas as terças as 19:30.</p>


                    <h4>Descrição do evento:</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis
                        aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi
                        vero voluptate voluptatibus possimus, veniam magni quis!</p>
                        <a href="post.php" class="btn btn-primary">Entre no evento &rarr;</a>
                    </div>
                    <div class="card-footer text-muted">
                        Postado em 17 de Maio 2017 por
                        <a href="#">Douglas</a>
                    </div>
                </div> -->

                <!-- Pagination -->
                <ul class="pagination justify-content-center mb-4">
                    <li class="page-item">
                        <a class="page-link" href="#">&larr; Antigos</a>
                    </li>
                    <li class="page-item disabled">
                        <a class="page-link" href="#">Novos &rarr;</a>
                    </li>
                </ul>

            </div>

            <!-- Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Search Widget -->
                <div class="card my-4">
                    <h5 class="card-header">Procure o seu evento:</h5>
                    <div class="card-body">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Digite aqui...">
                            <span class="input-group-btn">
                                <button class="btn btn-secondary" type="button">Match Sports!</button>
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Categories Widget -->
                <div class="card my-4">
                    <h5 class="card-header">Categories</h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <a href="#">Web Design</a>
                                    </li>
                                    <li>
                                        <a href="#">HTML</a>
                                    </li>
                                    <li>
                                        <a href="#">Freebies</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <a href="#">JavaScript</a>
                                    </li>
                                    <li>
                                        <a href="#">CSS</a>
                                    </li>
                                    <li>
                                        <a href="#">Tutorials</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Side Widget -->
                <div class="card my-4">
                    <h5 class="card-header">Side Widget</h5>
                    <div class="card-body">
                        You can put anything you want inside of these side widgets. They are easy to use, and feature
                        the new Bootstrap 4 card containers!
                    </div>
                </div>

            </div>

        </div>
        <!-- /.row -->

    </div>


    <!-- Footer -->
    <?php
        include "footer.php";
    ?>

    <!-- <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
        </div>
        ''
    </footer> -->

    <!-- Bootstrap core JavaScript -->

<script src="js/feed/jquery/jquery.min.js"></script>
<script src="js/feed/bootstrap/bootstrap.bundle.min.js"></script>

</body>

</html>
