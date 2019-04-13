<?php $modalidades = [
        "Badminton" => "logobadminton.png",
        "Basquete" => "logobasquete.png",
        "Bicicleta" =>"logobicicleta.png",
        "Boliche" => "logoboliche.png",
        "Caminhada" => "logocaminhada.png",
        "Capoeira" => "logocapoeira.png",
        "Corrida" => "logocorrida.png",
        "Funcional" => "logofuncional.png",
        "Futebol Americano" => "logofuteamericano.png",
        "Futebol" => "logofutebol.png",
        "Handebol" => "logohandeball.png",
        "Rugby" => "logorugby.png",
        "Sinuca" => "logosinuca.png",
        "Skate" => "logoskate.png",
        "Slackline" => "logoslackline.png",
        "Stand Up Paddle" => "logostandup.png",
        "Surf" => "logosurf.png",
        "Tênis" => "logotenis.png",
        "Tênis de mesa" => "logotenismesa.png",
        "Volei" => "logovoley.png",
        "Volei de Praia" => "logovoleypraia.png",
        "Xadrez" => "logoxadrez.png",
        "Yoga" => "logoyoga.png",
        "Outros" => "logooutros.png",
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/Logo Match Sports.png">
    <title>Match Sports</title>
</head>

<body>
    <nav class="navbar navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="index.html"><img src="img/Nome.png" title="MatchSports"></a>

            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="active">
                    <li><a href="Saiba_mais.html">Saiba Mais</a></li>
                    <li><a href="modalidades.php">Modalidades</a></li>
                    <li><a href="contato.html">Fale Conosco</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-user"></span>Sign up</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b> <span
                                class="caret"></span></a>
                        <ul id="login-dp" class="dropdown-menu">
                            <li>
                                <div class="row">
                                    <div class="col-md-12">
                                        Login via
                                        <div class="social-buttons">
                                            <a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
                                            <a href="#" class="btn btn-tw"><i class="fa fa-google+"></i> Google+</a>
                                        </div>
                                        ou
                                        <form class="form" role="form" method="post" action="login"
                                            accept-charset="UTF-8" id="login-nav">
                                            <div class="form-group">
                                                <label class="sr-only" for="exampleInputEmail2">e-mail</label>
                                                <input type="email" class="form-control" id="exampleInputEmail2"
                                                    placeholder="E-mail cadastrado" required>
                                            </div>
                                            <div class="form-group">
                                                <label class="sr-only" for="exampleInputPassword2">senha</label>
                                                <input type="password" class="form-control" id="exampleInputPassword2"
                                                    placeholder="Senha" required>
                                                <div class="help-block text-right"><a href="">Esqueceu sua senha?</a>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary btn-block">Entrar</button>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> Mantenha-me Logado
                                                </label>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="bottom text-center">
                                        Novo por aqui? <a href="#"><b>Cadastre-se</b></a>
                                    </div>
                                </div>
                            </li>
                        </ul>
            </div>

            <!-- <ul class="nav navbar-nav navbar-right"> -->

    </nav>

    <div class="container">
        <div class="dropdown menu-suspenso">
            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"> Modalidades
                <span class="caret"></span></button>
            <ul class="dropdown-menu scrollDropdown">

                <?php foreach ($modalidades as $nomeModalidade => $logoModalidade) : ?>
                <li><a href="#"><?php echo$nomeModalidade; ?></a></li>

                <?php endforeach; ?>

            </ul>
        </div>
        <div class="procura">
            <input type="text" name="search" placeholder="Localize o bairro...">
        </div>
    </div>

    <section class="section">
        <div class="owl-carousel owl-theme carrossel">

            <?php foreach ($modalidades as $nomeModalidade => $logoModalidade) : ?>
            <div class="item logo">
                <a href="post.html">
                    <img src="<?php echo"img/$logoModalidade";?>" alt="<?php echo$nomeModalidade; ?>">
                    <div class="caption">
                        <h3><?php echo$nomeModalidade; ?></h3>
                    </div>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <footer class="text-center">
        <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
            <span class="glyphicon glyphicon-chevron-up"></span>
        </a>
        <p>Copyright &copy; MatchSports</p>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script>
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    })
    </script>


</body>

</html>