<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="{{asset('img/icon.png')}}">
	<title>Federacion de Empresarios Privados Potosí</title>
	<link href="{{asset('https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round')}}" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
	<link type="text/css" rel="stylesheet" href="{{asset('css/owl.carousel.css')}}" />
	<link type="text/css" rel="stylesheet" href="{{asset('css/owl.theme.default.css')}}" />
	<link type="text/css" rel="stylesheet" href="{{asset('css/magnific-popup.css')}}" />
	<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
	<link type="text/css" rel="stylesheet" href="{{asset('css/style.css')}}" />
	<link type="text/css" rel="stylesheet" href="{{asset('css/animate.css')}}" />
</head>

<body>
	<header id="home">
		<div class="bg-img " style="background-image: url('./img/background1.jpg'); width: 100%;">
			<div class="overlay"></div>
		</div>
		<!-- /Background Image -->
		<!-- Nav -->
		<nav id="nav" class="navbar nav-transparent">
			<div class="container">

				<div class="navbar-header">
					<!-- Logo -->
					<div class="navbar-brand">
						<a href="#home">
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
					<li><a href="#home">Inicio</a></li>
					<li class="titulos"><a href="#about">La F.E.P.P. </a></li>
					<li><a href="#portfolio">Consejo Directivo</a></li>
					<li><a href="#myCarousel">Cursos</a></li>
					<li><a href="#team">Noticias</a></li>
					<li><a href="{{route('feipobol')}}"  target="_blank">FEIPOBOL</a></li>
					<li><a href="#contacto">Contacto</a></li>
				</ul>
				<!-- /Main navigation -->

			</div>
		</nav>
		<!-- /Nav -->

		<!-- home wrapper -->
		<div class="home-wrapper">
			<div class="container">
				<div class="row">

					<!-- home content -->
					<div class="col-md-10 col-md-offset-1">
						<div class="home-content">
							<h1 class=" animated zoomIn">FEDERACIÓN DE EMPRESARIOS <br><strong>PRIVADOS DE POTOSÍ</strong></h1>
							<a href="{{ route('feipobol')}}" target="_blank"> <img src="{{asset('img/logoPrincipal.png')}}" alt=""> 2018</a>
						</div>
					</div>
					<!-- /home content -->

				</div>

			</div>
		</div>
		<!-- /home wrapper -->

	</header>
	<!-- /Header -->

	<div class="nav-social">
		<a href="{{asset('https://www.facebook.com/pages/category/Public-Relations-Agency/Federaci%C3%B3n-de-Empresarios-Privados-de-Potos%C3%AD-228826603847142/')}}" target="_blank" class="facebook"><i class="fa fa-facebook" aria-hidden="true" ></i>
		</a>
		<a href="" target="_blank" class="youtube"><i class="fa fa-youtube" aria-hidden="true"></i>
		</a>
		<a href="" target="_blank" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i>
		</a>
		<a href="" target="_blank" class="instragram"><i class="fa fa-instagram" aria-hidden="true"></i>
		</a>
	</div>
	<!-- About -->
	<div id="about" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header">
					<h2 class="des animated zoomIn">La  Federación de Empresarios Privados de Potosí  se  constituye  en  una  institución  que  no  desarrolla  actividades  político partidarias, con un Comité Ejecutivo renovado con el único objetivo de trabajar de manera transparente en beneficio del sector privado, compartiendo sus conocimientos y habilidades necesarias para promover eficazmente la creatividad y la innovación empresarial</h2>
				</div>
				<!-- /Section header -->

				<!-- about -->
				<a data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
					<div class="col-md-4">
						<div class="about">
							<h3>MISIÓN</h3>
							<div class="collapse" id="collapseExample">
								<div class="card card-body">
										<p>Ser una entidad que concentre al sector empresarial privado, promoviendo el fortalecimiento y desarrollo institucional, velando los intereses jurídicos, económicos, sociales de nuestros afiliados, generando participación activa en el progreso departamental y nacional.</p>
								</div>
							</div>
						</div>
					</div>
				</a>
				<!-- /about -->

				<!-- about -->
				<a data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample1">
					<div class="col-md-4">
						<div class="about">
							<h3>VISIÓN</h3>
							<div class="collapse" id="collapseExample1">
								<div class="card card-body">
										<p>Ser una entidad líder representativa e influyente, prestigiosa y solvente, reconocida por su contribución al desarrollo productivo, económico social y turístico del Departamento de Potosí.</p>
								</div>
							</div>
						</div>
					</div>
				</a>
				<!-- /about -->

				<!-- about -->
				<a data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample2">
					<div class="col-md-4">
						<div class="about">
							<h3>OBJETIVO</h3>
							<div class="collapse" id="collapseExample2">
								<div class="card card-body">
									<p>Promover la participación del sector empresarial en aspectos de interés local y regional, que coadyuve al desarrollo productivo, económico social y turístico del departamento, sustentando la filosofía de la libre empresa y la economía del mercado, como bases esenciales de dicho proceso.</p>
								</div>
							</div>
						</div>
					</div>
				</a>
				<!-- /about -->

			</div>

		</div>
		<!-- /Container -->
		<div id="testimonial" class="section md-padding">

				<h2 class="white-text" style="text-align: center;" >COMITÉ EJECUTIVO</h2>
			<!-- Background Image -->
			<div class="bg-img" style="background-image: url('./img/background3.jpg'); width: 100%;">
				<div class="overlay"></div>
			</div>
			<!-- /Background Image -->

			<!-- Container -->
			<div class="container">
				<!-- Row -->
				<div class="row">

					<!-- Testimonial slider -->
					<div class="col-md-10 col-md-offset-1">
						<div id="testimonial-slider" class="owl-carousel owl-theme">
							<!-- testimonial -->
							<div class="testimonial">
								<div class="testimonial-meta">
									<img src="./img/p1.png" alt="">
									<h3 class="white-text">Oscar Gregorio Gardeazabal Paputsachis</h3>
									<span>PRESIDENTE</span>
								</div>
								<!-- <p class="white-text">Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que mira su diseño. El punto de usar Lorem Ipsum es que tiene una distribución más o menos normal de las letras, al contrario de usar</p> -->
							</div>
							<div class="testimonial">
								<div class="testimonial-meta">
									<img src="./img/p2.png" alt="">
									<h3 class="white-text">Ricardo Cruz Limachi</h3>
									<span>PRIMER VICEPRESIDENTE</span>
								</div>
								<!-- <p class="white-text">Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que mira su diseño. El punto de usar Lorem Ipsum es que tiene una distribución más o menos normal de las letras, al contrario de usar</p> -->
							</div>
							<div class="testimonial">
								<div class="testimonial-meta">
									<img src="./img/p3.png" alt="">
									<h3 class="white-text">Edwin Ugarte La Torre</h3>
									<span>SEGUNDO VICEPRESIDENTE</span>
								</div>
								<!-- <p class="white-text">Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que mira su diseño. El punto de usar Lorem Ipsum es que tiene una distribución más o menos normal de las letras, al contrario de usar</p> -->
							</div>
							<div class="testimonial">
								<div class="testimonial-meta">
									<img src="./img/p4.png" alt="">
									<h3 class="white-text">Gunnar Armijo Cassis </h3>
									<span>TESORERO</span>
								</div>
								<!-- <p class="white-text">Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que mira su diseño. El punto de usar Lorem Ipsum es que tiene una distribución más o menos normal de las letras, al contrario de usar</p> -->
							</div>
							<div class="testimonial">
								<div class="testimonial-meta">
									<img src="./img/p5.png" alt="">
									<h3 class="white-text">Roberto Pinto Thaine </h3>
									<span>REPRESENTANTE NACIONAL</span>
								</div>
								<!-- <p class="white-text">Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que mira su diseño. El punto de usar Lorem Ipsum es que tiene una distribución más o menos normal de las letras, al contrario de usar</p> -->
							</div>
							<div class="testimonial">
								<div class="testimonial-meta">
									<img src="./img/p6.png" alt="">
									<h3 class="white-text">Romer Armando Gutiérrez Suyo </h3>
									<span>GERENTE GENERAL</span>
								</div>
								<!-- <p class="white-text">Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que mira su diseño. El punto de usar Lorem Ipsum es que tiene una distribución más o menos normal de las letras, al contrario de usar</p> -->
							</div>
							<!-- /testimonial -->

						</div>
					</div>
					<!-- /Testimonial slider -->
				</div>
				<!-- /Row -->

			</div>
			<!-- /Container -->

		</div>
	</div>
	<!-- /About -->
	<div class="bg-img" style="background-image: url('./img/background3.jpg');">
		<div class="overlay"></div>
	</div>

	<!-- Portfolio -->
	<div id="portfolio" class="section md-padding bg-grey">
		<div class="container">

			<!-- Row -->
			<div class="row">
				<div class="section-header text-center">
					<h2 class="title">CONSEJO DIRECTIVO</h2>
				</div>

				<div class="col-sm-3">
					<div class="team">
						<div class="team-img">
							<img class="img-responsive" src="{{asset('img/entidades/'. $ent2->img)}}" alt="">
							<div class="overlay">
								<div class="team-social">
									<a target="_blank" href="{{$ent2->facebook}}" style="background-color: #3b5998;"><i class="fa fa-facebook " ></i></a>
									<a target="_blank" href="{{$ent2->website}}"><i class="fa fa-globe" aria-hidden="true"></i></a>
									<a target="_blank" href="{{$ent2->twitter}}" style="background-color: #00aced;"><i class="fa fa-twitter" ></i></a>
									<a target="_blank" 	style="background-color: #cc181e;"><i class="fa fa-youtube"></i></a>
								</div>
							</div>
						</div>
						<div class="team-content">
							<a href="{{ route('entidadeshow', ['id' =>  $ent2->id]) }}"><h3>{{ $ent2->nombre}}</h3></a>
						</div>
					</div>
				</div>
					<div class="col-sm-3">
						<div class="team">
							<div class="team-img">
								<img class="img-responsive" src="{{asset('img/entidades/'. $ent4->img)}}" alt="">
								<div class="overlay">
									<div class="team-social">
										<a target="_blank" href="{{$ent4->facebook}}" style="background-color: #3b5998;"><i class="fa fa-facebook " ></i></a>
										<a target="_blank" href="{{$ent4->website}}"><i class="fa fa-globe" aria-hidden="true"></i></a>
										<atarget="_blank" href="{{$ent4->twitter}}" style="background-color: #00aced;"><i class="fa fa-twitter" ></i></a>
										<a target="_blank" 	style="background-color: #cc181e;"><i class="fa fa-youtube"></i></a>
									</div>
								</div>
							</div>
							<div class="team-content">
								<a href="{{ route('entidadeshow', ['id' =>  $ent4->id]) }}"><h3>{{ $ent4->nombre}}</h3></a>
							</div>
						</div>
					</div>

					<div class="col-sm-3">
						<div class="team">
							<div class="team-img">
								<img class="img-responsive" src="{{asset('img/entidades/'. $ent3->img)}}" alt="">
								<div class="overlay">
									<div class="team-social">
										<a target="_blank" href="{{$ent3->facebook}}" style="background-color: #3b5998;"><i class="fa fa-facebook " ></i></a>
										<a target="_blank" href="{{$ent3->website}}"><i class="fa fa-globe" aria-hidden="true"></i></a>
										<a target="_blank" href="{{$ent3->twitter}}" style="background-color: #00aced;"><i class="fa fa-twitter" ></i></a>
										<a target="_blank" 	style="background-color: #cc181e;"><i class="fa fa-youtube"></i></a>
									</div>
								</div>
							</div>
							<div class="team-content">
								<a href="{{ route('entidadeshow', ['id' =>  $ent3->id]) }}"><h3>{{ $ent3->nombre}}</h3></a>
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="team">
							<div class="team-img">
									<img class="img-responsive" src="{{asset('img/entidades/'. $ent1->img)}}" alt="">
								<div class="overlay">
									<div class="team-social">
										<a  href="{{$ent1->facebook}}" target="_blank" style="background-color: #3b5998;"><i class="fa fa-facebook " ></i></a>
										<a  href="{{$ent1->website}}" target="_blank"><i class="fa fa-globe" aria-hidden="true"></i></a>
										<a  href="{{$ent1->twitter}}" target="_blank" style="background-color: #00aced;"><i class="fa fa-twitter" ></i></a>
										<a style="background-color: #cc181e;" target="_blank"><i class="fa fa-youtube"></i></a>
									</div>
								</div>
							</div>
							<div class="team-content">
								<a href="{{ route('entidadeshow', ['id' =>  $ent1->id]) }}"><h3>{{ $ent1->nombre}}</h3></a>
									<a href="{{ route('entidades')}}"><small>Ver todos >> </small></a>
							</div>

						</div>
					</div>

			</div>

			

		</div>

	</div>
	<!-- Cursos -->
	<div id="myCarousel" class="carousel slide curso" >
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner">

			<div class="item active">
			<img src="{{asset('img/cursos/'.$curso1->imagen)}}" alt="Los Angeles" style="width:100%;">
			<div class="carousel-caption">
				<a href="{{ route('cursoShow', ['id' =>  $curso1->id]) }}"><h3 class="titulo">{{$curso1->titulo}}</h3></a>
				<p class="date">Proximamente</p>
				<p>{{$curso1->subtitulo}}</p>

			</div>
			</div>

			<div class="item">
				<img src="{{asset('img/cursos/'.$curso2->imagen)}}" alt="Los Angeles" style="width:100%;">
				<div class="carousel-caption">
					<MARQUEE BEHAVIOR=ALTERNATE SCROLLAMOUNT=15><a href="{{ route('cursoShow', ['id' =>  $curso2->id]) }}"><h3 class="titulo">{{$curso2->titulo}}</h3></a></MARQUEE>
					<p class="date">Proximamente</p>
					<p>{{$curso2->subtitulo}}</p>
				</div>
				</div>

		<div class="item">
			<img src="{{asset('img/cursos/'.$curso3->imagen)}}" alt="Los Angeles" style="width:100%;">
			<div class="carousel-caption">
				<MARQUEE BEHAVIOR=ALTERNATE SCROLLAMOUNT=15><a href="{{ route('cursoShow', ['id' =>  $curso3->id]) }}"><h3 class="titulo">{{$curso3->titulo}}</h3></a></MARQUEE>
				<p class="date">Proximamente</p>
				<p>{{$curso3->subtitulo}}</p>
			</div>
			</div>

		</div>

		<!-- Left and right controls -->
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
			<span class="sr-only">Next</span>
		</a>
		</div>

	<!-- Team -->
	<div id="team" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">NOTICIAS</h2>
				</div>
				<!-- service -->
				<div class="col-md-4 ">
					<div class="blog">
						<div class="blog-img">
							<img class="img-responsive" src="{{ asset('img/noticias/'. $not1->imagen)}}" alt="">
						</div>
						<div class="blog-content">
							<ul class="blog-meta">
								<li><i class="fa fa-clock-o"></i>{{$not1->fecha}}</li>
							</ul>
							<a href="{{ route('noticiaShow', ['id' =>  $not1->id]) }}"><h3 ALIGN="justify">{{$not1->titulo}}</h3></a>
							<p class="cortar">{{$not1->descripcion}}</p>
							<!-- <a href="blog-single.html">Leer Completo</a> -->
						</div>
					</div>
				</div>
				<!-- /blog -->

				<!-- blog -->
				<div class="col-md-4 ">
					<div class="blog">
						<div class="blog-img">
							<img class="img-responsive" src="{{ asset('img/noticias/'. $not2->imagen)}}" alt="">
						</div>
						<div class="blog-content">
							<ul class="blog-meta">
								<li><i class="fa fa-clock-o"></i>{{$not2->fecha}}</li>
							</ul>
							<a href="{{ route('noticiaShow', ['id' =>  $not2->id]) }}"><h3 ALIGN="justify">{{$not2->titulo}}</h3></a>
							<p class="cortar">{{$not2->descripcion}}</p>
							<!-- <a href="blog-single.html">Leer Completo</a> -->
						</div>
					</div>
				</div>
				<!-- /blog -->

				<!-- blog -->
				<div class="col-md-4 ">
					<div class="blog">
						<div class="blog-img">
							<img class="img-responsive" src="{{ asset('img/noticias/'. $not3->imagen)}}" alt="">
						</div>
						<div class="blog-content">
							<ul class="blog-meta">
								<li><i class="fa fa-clock-o"></i>{{$not2->fecha}}</li>
							</ul>
							<a href="{{ route('noticiaShow', ['id' =>  $not3->id]) }}"><h3 ALIGN="justify">{{$not3->titulo}}</h3></a>
							<p class="cortar">{{$not3->descripcion}}</p>
							<!-- <a href="blog-single.html">Leer Completo</a> -->
						</div>
					</div>
				</div>


			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->
	</div>
	<!-- /Team -->


	<!-- Numbers -->
	<div id="numbers" class="section sm-padding">

		<!-- Background Image -->
		<div class="bg-img" style="background-image: url('./img/background2.jpg');">
			<div class="overlay">

			</div>
		</div>
		<!-- /Background Image -->

		<!-- Container -->
		<div class="container">

			<div class="Row">
					<div class="number">
						<i class="fa fa-users"></i><br>
						<span class="white-text">Eres nuestro visitante numero:</span>
						<h3 class="white-text"><span class="counter">40</span></h3>
					</div>


			</div>
		</div>
		<!-- /Container -->

	</div>
	<!-- /Numbers -->
	<!-- Contact -->
	<div id="contacto" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section-header -->
				<div class="section-header text-center">
					<h2 class="title">CONTÁCTANOS</h2>
				</div>
				<div class="col-sm-4">
					<div class="contact">
						<i class="fa fa-phone"></i>
						<h3>Teléfono</h3>
						<p>+(591) 2 622-2625</p>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="contact">
						<i class="fa fa-envelope"></i>
						<h3>Correo Electrónico</h3>
						<p>feppotosi@gmail.com </p>
					</div>
				</div>

				<a href="" data-toggle="modal" data-target="#exampleModalCenter">
				<div class="col-sm-4">
					<div class="contact">
						<i class="fa fa-map-marker"></i>
						<h3>Dirección</h3>
						<p>Av. Serrudo # 127 Edificio Renovación Piso #2 </p>

					</div>
				</div>
				</a>
			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Contact -->


	<!-- Modal -->
	<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalCenterTitle">NUESTRA UBICACIÓN</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1879.5177971405635!2d-65.75773924195988!3d-19.58297569669979!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x93f94e7422d0f36d%3A0xe1cd4f1bd9b7e37!2sFederaci%C3%B3n+de+Empresarios+Privados+de+Potos%C3%AD!5e0!3m2!1ses-419!2sbo!4v1538018386096" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	      </div>
	    </div>
	  </div>
	</div>

	<!-- Footer -->
	<footer id="footer" class="sm-padding bg-dark">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<div class="col-md-12">

					<!-- footer logo -->
					<div class="footer-logo">
						<a href="index.html"><img src="{{asset('img/logo.png')}}" alt="logo"></a>
					</div>
					<!-- /footer logo -->

					<!-- footer follow -->
					<ul class="footer-follow">
						<li><a href="{{asset('https://www.facebook.com/pages/category/Public-Relations-Agency/Federaci%C3%B3n-de-Empresarios-Privados-de-Potos%C3%AD-228826603847142/')}}" target="_blank"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram"></i></a></li>
						<li><a href="#"><i class="fa fa-youtube"></i></a></li>
					</ul>
					<!-- /footer follow -->

					<!-- footer copyright -->
					<div class="footer-copyright">
						<p>Copyright © 2018. Todos los derechos reservados F.E.P.P. desarrollado por <a href="https://adyctto.com" target="_blank">I S & T</a></p>
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
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="js/jquery.magnific-popup.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<script>
		window.addEventListener('load', ()=>{
			var dat = document.querySelectorAll(".cortar");
			var texto = dat[0].innerHTML.substr(0,100);
			dat[0].innerHTML = texto+" ...";
			var texto = dat[1].innerHTML.substr(0,100);
			dat[1].innerHTML = texto+" ...";
			var texto = dat[2].innerHTML.substr(0,100);
			dat[2].innerHTML = texto+" ...";
		});
	</script>

</body>

</html>
