<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/docs.css">
<link rel="stylesheet" type="text/css" href="css/pygments-manni.css">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>
<header>
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">XtremBuy</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tipos<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Jugando XtremBuy</a></li>
                            <li><a href="#">Subastas</a></li>
                            <li><a href="#">Ventas</a></li>

                        </ul>
                    </li>
                    <li><a href="#about">Testimonios</a></li>
                    <li><a href="#contact">¿Como funciona?</a></li>
                </ul>
                <form method="post" action="/noticias" class="navbar-form navbar-left" role="form">
                    <div class="form-group">
                        <input type="text" placeholder="Email" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Password" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-success">Iniciar Sesion</button>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <a href="#" class="btn btn-danger" style="margin-top: 8px;">Registrarse</a>
                </ul>
            </div><!--/.navbar-collapse -->
        </div>
    </div>
</header>
    @yield("content")


<footer>

</footer>
</body>
</html>