<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="{{asset('img/icon.png')}}">
	<title>Federacion de Empresarios Privados Potosí</title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
	<link type="text/css" rel="stylesheet" href="css/owl.carousel.css" />
	<link type="text/css" rel="stylesheet" href="css/owl.theme.default.css" />
	<link type="text/css" rel="stylesheet" href="css/magnific-popup.css" />
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link type="text/css" rel="stylesheet" href="css/style.css" />
</head>

<body>
	<header >

		<!-- Nav -->
		<nav id="nav" class="navbar ">
			<div class="container">

				<div class="navbar-header">
					<!-- Logo -->
					<div class="navbar-brand">
						<a href="/">
							<img class="logo" src="img/logo-alt.png" alt="logo">
							<img class="logo-alt" src="img/logo.png" alt="logo">
						</a>
					</div>
					<!-- /Logo -->

					<!-- Collapse nav button -->
					<div class="nav-collapse">
						<span></span>
					</div>
					<!-- /Collapse nav button -->
				</div>

				<!--  Main navigation  -->
				<ul class="main-nav nav navbar-nav navbar-right">
					<li class="titulos"><a href="{{ route('sobre' )}}">La F.E.P.P. </a></li>
					<li><a href="{{ route('entidades') }}">Entidades Afiliadas</a></li>
					<li><a href="{{ route('memorias') }}">Memorias</a></li>
					<li><a href="#team">Noticias</a></li>
					<li><a href="{{ route('feipobol')}}"  target="_blank">FEIPOBOL 2018</a></li>
					<li><a href="">Cursos</a></li>
					<li><a href="{{ route('contacto')}}">Contacto</a></li>
				</ul>
				<!-- /Main navigation -->

			</div>
        </nav>
    </header>


    <main>

        <div class="section">
            @yield('formularios')
        </div>
    </main>
    
    
    
    <footer id="footer" class="sm-padding bg-dark">

            <!-- Container -->
            <div class="container">
    
                <!-- Row -->
                <div class="row">
    
                    <div class="col-md-12">
    
                        <!-- footer logo -->
                        <div class="footer-logo">
                            <a href="/"><img src="img/logo.png" alt="logo"></a>
                        </div>
                        <!-- /footer logo -->
    
                        <!-- footer follow -->
                        <ul class="footer-follow">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                        <!-- /footer follow -->
    
                        <!-- footer copyright -->
                        <div class="footer-copyright">
                            <p>Copyright © 2018. Todos los derechos reservados F.E.P.P. diseñado por <a href="https://adyctto.com" target="_blank">I S & T</a></p>
                        </div>
                        <!-- /footer copyright -->
    
                    </div>
    
                </div>
                <!-- /Row -->
    
            </div>
            <!-- /Container -->
    
        </footer>
        <!-- /Footer -->
    
        <!-- Back to top -->
        <div id="back-to-top"></div>
        <!-- /Back to top -->
    
        <!-- Preloader -->
        <div id="preloader">
            <div class="preloader">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <!-- /Preloader -->
    
        <!-- jQuery Plugins -->
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/owl.carousel.min.js"></script>
        <script type="text/javascript" src="js/jquery.magnific-popup.js"></script>
        <script type="text/javascript" src="js/main.js"></script>
</body>
</html>