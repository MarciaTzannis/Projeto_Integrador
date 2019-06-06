<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- <meta name="description" content="Rede Social de Esportes para encontrar companhias para a prática de um esporte"> -->
        <!-- <meta name="keywords" content="Esportes Coletivos","Amigos Esportistas" > -->
        <title>Match Sports</title>

        <!-- Latest compiled and minified CSS -->
        <link rel="shortcut icon" href="img/Logo Match Sports.png">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link href="css/feed/blog-home.css" rel="stylesheet">

    </head>

    <body>
    <nav class="navbar navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="/#home"><img src="img/Nome.png" title="MatchSports" /></a>

        </div>
        <button class="menu-mobile" title="menu" data-toggle="collapse" data-target=".menu-principal">&#9776;</button>
        <div class="collapse navbar-collapse menu-principal" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active">
                <li><a href="/#saiba-mais">Saiba Mais</a></li>
                <li><a href="/#modalidades">Modalidades</a></li>
                <li><a href="/#fale-conosco">Fale Conosco</a></li>
            </ul>
          
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/cadastroUsuario"><span class="glyphicon glyphicon-user"></span> Cadastre-se</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Entrar</b> <span
                            class="caret"></span></a>
                    <ul id="login-dp" class="dropdown-menu">
                        <li>
                            <div class="row">
                                <div class="col-md-12">
                                    Login via
                                    <div class="social-buttons">
                                        <a href="{{ url('/auth/facebook')}}" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
                                        <a href="{{ url('/auth/google')}}" class="btn btn-tw"><i class="fa fa-google+"></i> Google+</a>
                                    </div>
                                    ou
                                    <form class="form" role="form" method="post" action="login" accept-charset="UTF-8"
                                        id="login-nav">
                                        <div class="form-group">
                                            <label class="sr-only" for="exampleInputEmail2">e-mail</label>
                                            <input type="email" class="form-control" id="exampleInputEmail2"
                                                placeholder="E-mail cadastrado" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="exampleInputPassword2">senha</label>
                                            <input type="password" class="form-control" id="exampleInputPassword2"
                                                placeholder="Senha" required>
                                            <div class="help-block text-right"><a href="">Esqueceu sua senha?</a></div>
                                        </div>
                                        <div class="form-group">
                                            <a type="submit" class="btn btn-primary btn-block">Entrar</a>
                                        </div>
                                        <div class="form-group">
                                            <a type="submit" class="btn btn-primary btn-danger btn-block">Logout</a>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"> Mantenha-me Logado
                                            </label>
                                        </div>
                                    </form>
                                </div>
                                <div class="bottom text-center">
                                    Novo por aqui? <a href="/cadastroUsuario"><b>Cadastre-se</b></a>
                                </div>
                            </div>
                        </li>
                    </ul>
        </div>

        <!-- <ul class="nav navbar-nav navbar-right"> -->

</nav>


@yield('content')



<footer class="text-center">
    <p>Copyright &copy; MatchSports</p>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>


<script>
$('.owl-carousel').owlCarousel({
 loop: true,
 margin: 10,
 nav: true,
 responsive: {
     0: {
         items: 3
     },
     600: {
         items: 6
     },
     1000: {
         items: 10
     }
 }
})
</script>
<script src="js/main.js"></script>

</body>

</html>
