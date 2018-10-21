<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="shortcut icon" href="{{asset('img/logos/feipobol-alt.png')}}">
  <title>FEIPOBOL 2018</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap core CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.11/css/mdb.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/styleFeipobol.css')}}">
</head>
<body>
<header>

  <nav class="navbar navbar-expand-lg navbar-dark color fixed-top scrolling-navbar">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="{{ asset('img/logos/feipobol.png')}}" height="35" class="d-inline-block align-top" alt="FEIPOBOL 2018">
      </a>
      <!-- Collapse button -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
      aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="basicExampleNav">

      <!-- Links -->
      <ul class=" navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#inicio">Inicio
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item dropdown" >
          <a class="nav-link dropdown-toggle" id="feipobol" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">FEIPOBOL 2018</a>
          <div class="dropdown-menu dropdown-primary" aria-labelledby="feipobol">
            <a class="dropdown-item" href="#">Acerca de</a>
            <a class="dropdown-item" href="#">Venta de Stands</a>
            <a class="dropdown-item" href="#">Expositores</a>
            <a class="dropdown-item" href="#">Información</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-scroll href="#noticias">Noticias</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="#">Galeria</a>
          </li>

        <li class="nav-item">
            <a class="nav-link" href="#">Contactos</a>
          </li>

      </ul>
    </div>
  </div>
  <!-- Collapsible content -->
</nav>

<div class="view fondo" id="inicio">
  <!-- Mask & flexbox options-->
  <div class="mask rgba-gradient d-flex justify-content-center align-items-center">
    <!-- Content -->
    <div class="container">
      <!--Grid row-->
      <div class="row mt-5">
        <!--Grid column-->
        <div class="col-md-6 mb-5 mt-md-0 mt-5 white-text text-center text-md-left">
          <h1 class="h1-responsive font-weight-bold wow fadeInLeft" data-wow-delay="0.3s">FEIPOBOL 2018</h1>
          <hr class="hr-light wow fadeInLeft" data-wow-delay="0.3s">
          <h6 class="mb-3 wow fadeInLeft" data-wow-delay="0.3s">La FEIPOBOL, uno de los eventos multisectoriales de negocios más importantes de Bolivia, bajo el modelo de internacionalización del negocio, se ha consolidado como protagonista activa para el intercambio comercial y la movilización del desarrollo productivo, comercial y de servicios a nivel local, nacional e internacional.</h6>
          <a class="btn btn-outline-white wow fadeInLeft" data-wow-delay="0.3s">Saber mas</a>
        </div>
        <!--Grid column-->
        <!--Grid column-->
        <div class="col-md-6 col-xl-5 mb-4">
          <!--Form-->
          <div class="card wow fadeInRight" data-wow-delay="0.3s">
            <div class="text-center">
              <h3 class="white-text">
                <img src="{{ asset('img/logos/feipobol.png')}}" class="logo" alt="" width="60%">
            </div>
            <div class="card-body">
              <!--Body-->
              <div class="md-form">
                <i class="fa fa-calendar prefix white-text active"></i>
                <h4>9 al 18 de noviembre</h4>
              </div>
              <div class="md-form">
                  <a href=""><i class="fa fa-map-marker prefix white-text active"></i>
                <h4>Campo Ferial Multipropósito (Av. Sevilla)
                    Ciudad Potosi, Potosi, Bolivia</h4></a>
              </div>
              <div class="text-center mt-4">
                <hr class="hr-light mb-3 mt-4">
                <div class="inline-ul text-center d-flex justify-content-center">
                  <a class="p-2 m-2 tw-ic">
                    <i class="fa fa-twitter white-text"></i>
                  </a>
                  <a class="p-2 m-2 li-ic">
                    <i class="fa fa-facebook white-text"> </i>
                  </a>
                  <a class="p-2 m-2 ins-ic">
                    <i class="fa fa-instagram white-text"> </i>
                  </a>
                  <a class="p-2 m-2 ins-ic">
                    <i class="fa fa-youtube white-text"> </i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <!--/.Form-->
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </div>
    <!-- Content -->
  </div>
  <!-- Mask & flexbox options-->
</div>
</header>
<!--/.Navbar-->

<div class="container" id="noticias">
  <section class="my-5">

    <!-- Section heading -->
    <h2 class="h1-responsive font-weight-bold text-center my-5">NOTICIAS</h2>
    <!-- Section description -->

    <!-- Grid row -->
    <div class="row wow fadeInLeft">

      <!-- Grid column -->
      <div class="col-lg-5">

        <!-- Featured image -->
        <div class="view overlay rounded z-depth-2 mb-lg-0 mb-4">
          <img class="img-fluid" src="{{asset('img/noticias/'.$not1->imagen)}}" alt="Sample image">
          <a>
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-lg-7 contenido">
        <h3 class="font-weight-bold mb-3"><strong>{{$not1->titulo}}</strong></h3>
        <!-- Excerpt -->
        <p>{{$not1->descripcion}}</p>
        <!-- Post data -->
        <p>Fuente: <a><strong>{{$not1->fuente}}</strong></a>, {{$not1->fecha}}</p>
        <!-- Read more button -->
        <a class="btn btn-success btn-md" href="">Leer mas</a>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

    <hr class="my-5">

    <!-- Grid row -->
    <div class="row wow fadeInRight">

      <!-- Grid column -->
      <div class="col-lg-7 contenido">

        <h3 class="font-weight-bold mb-3"><strong>{{$not2->titulo}}</strong></h3>
        <!-- Excerpt -->
        <p>{{$not2->descripcion}}</p>
        <!-- Post data -->
        <p>Fuente: <a><strong>{{$not2->fuente}}</strong></a>, {{$not2->fecha}}</p>
        <!-- Read more button -->
        <a class="btn btn-pink btn-md mb-lg-0 mb-4">leer mas</a>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-lg-5">

        <!-- Featured image -->
        <div class="view overlay rounded z-depth-2">
          <img class="img-fluid" src="{{asset('img/noticias/'.$not2->imagen)}}" alt="Sample image">
          <a>
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

    <hr class="my-5">



  </section>
</div>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.11/js/mdb.min.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@14/dist/smooth-scroll.polyfills.min.js"></script>
  <script>
    new WOW().init();
    var scroll = new SmoothScroll('a[href*="#"]',{
      offset : 80
    });
  </script>
</body>
</html>
