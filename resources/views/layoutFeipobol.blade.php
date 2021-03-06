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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
  <link rel="stylesheet" href="{{ asset('css/styleFeipobol.css')}}">
    <link rel="stylesheet" href="{{ asset('css/styleNoticias.css')}}">
  <link rel="stylesheet" href="{{ asset('css/animate.min.css')}}">


  <style>
    html,
    body,
    header {
        background: #f1f1f1;
        height: 80px;
        background-image: none;
    }

  </style>
</head>
<body>
<header>

  <nav class="navbar navbar2 navbar-expand-lg navbar-dark color fixed-top scrolling-navbar">
    <div class="container">
      <a class="navbar-brand" href="{{ route('feipobol') }}">
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
          <a class="nav-link" href="{{ route('feipobol') }}">Inicio
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item dropdown" >
          <a class="nav-link dropdown-toggle" id="feipobol" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">FEIPOBOL 2018</a>
          <div class="dropdown-menu dropdown-primary" aria-labelledby="feipobol">
            <a class="dropdown-item" href="{{ route('feipobolAbout')}}">Acerca de</a>
            <a class="dropdown-item" href="{{ route('ventas')}}">Venta de Stands</a>
            <a class="dropdown-item" href="{{route('expositores')}}">Expositores</a>
            <a class="dropdown-item" href="{{ route('resultados')}}">Resultados Feipobol</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-scroll href="{{ route('nferia')}}">Noches de Feria</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" data-scroll href="{{route('fnoticiasShow')}}">Noticias</a>
        </li>

        <li class="nav-item dropdown ">
            <a class="nav-link dropdown-toggle" id="galeria" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Galeria</a>
            <div class="dropdown-menu dropdown-primary" aria-labelledby="galeria">
              <a class="dropdown-item" href="{{ route('fotos')}}">Fotos</a>
              <a class="dropdown-item" href="{{ route('videos')}}">Videos</a>
            </div>
          </li>

        <li class="nav-item">
            <a class="nav-link" href="#contacto">Contactos</a>
          </li>

      </ul>
    </div>
  </div>
  <!-- Collapsible content -->
</nav>

</header>


<div class="section">
        @yield('formularios')
</div>



<footer class="page-footer font-small special-color" id="contacto">
<br>
<br>
  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-3 mx-auto">

        <!-- Links -->

        <h5 class="font-weight-bold text-uppercase mt-3 mb-4 titulo-footer">ORGANIZA</h5>

        <ul class="list-unstyled wow zoomIn" data-wow-delay="0.3s" align="center">
          <a href="{{route('principal')}}" class="organiza">
              <img src="{{asset('img/icon.png')}}" alt="" >

          </a>
            <a href="{{route('principal')}}" class="organiza">
              <H1>FEDERACION DE EMPRESARIOS PRIVADOS DE POTOSI</H1>
            </a>
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-3 mx-auto">

        <!-- Links -->

        <h5 class="font-weight-bold text-uppercase mt-3 mb-4 titulo-footer">AUSPICIADORES</h5>

        <ul class="list-unstyled">

          <li class="wow zoomIn" data-wow-delay="0.3s">
            <a href="{{asset('https://www.facebook.com/GobiernoAutonomoDepartamentalDePotosi/')}}" class="organiza">
                <img src="{{ asset('img/gadp.png')}}" alt="">

            </a>
          </li>
          <li class="wow zoomIn" data-wow-delay="0.3s">
            <a href="{{asset('http://www.potosina.bo')}}" class="organiza">
                <img src="{{ asset('img/cp.jpg')}}" alt="">

            </a>
          </li><li class="wow zoomIn" data-wow-delay="0.3s">
            <a href="{{asset('http://www.potosi.bo')}}" class="organiza">
                <img src="{{ asset('img/gamp.jpg')}}" alt="">

            </a>
          </li>

        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-3 mx-auto">

        <!-- Links -->

        <h5 class="font-weight-bold text-uppercase mt-3 mb-4 titulo-footer">CONTACTOS</h5>

        <ul class="list-unstyled">
          <li class="wow zoomIn" data-wow-delay="0.3s">
            <a href="#!"><i><i class="fa fa-map-marker" aria-hidden="true"></i>
            </i><br> Campo Ferial Multipropósito (Av. Sevilla)
            Ciudad Potosi, Potosi, Bolivia</a>
          </li>
          <br>
          <li class="wow zoomIn" data-wow-delay="0.3s">
            <a href="#!"><i class="fa fa-phone" aria-hidden="true"></i>
              <br> (+591) 2-62-22625
            </a>
          </li>
          <br>
          <li class="wow zoomIn" data-wow-delay="0.3s">
            <a href="#!"><i class="fa fa-envelope-o" aria-hidden="true"></i>
              <br> feipobol@gmail.com
            </a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-3 mx-auto">

        <!-- Links -->

        <h5 class="font-weight-bold text-uppercase mt-3 mb-4 titulo-footer">REDES SOCIALES</h5>

        <ul class="list-unstyled">
          <li class="wow zoomIn" data-wow-delay="0.3s">
            <a href="{{ asset('https://www.facebook.com/Feipobol')}}"><i class="fa fa-facebook red-social facebook" aria-hidden="true"></i>
            </a>
          </li>
          <li class="wow zoomIn" data-wow-delay="0.3s">
            <a href="#!"><i class="fa fa-youtube-play red-social youtube" aria-hidden="true"></i></a>
          </li>
          <li class="wow zoomIn" data-wow-delay="0.3s">
            <a href="#!"><i class="fa fa-twitter red-social twitter" aria-hidden="true"></i></a>
          </li>
          <li class="wow zoomIn" data-wow-delay="0.3s">
            <a href="#!"><i class="fa fa-instagram red-social instagram" aria-hidden="true"></i></a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
    <br>
  <!-- Footer Links -->

  <div class="footer-copyright text-center py-3"><small>© 2018 Copyright:
      Todos los derechos reservados Federación de Empresarios Privados de Potosí <br>
      desarrollado por <a href="https://www.IS&T.com.bo">I S & T</small></a>
  </div>
  <!-- Copyright -->

</footer>
<div class="preloader"><div class="loader"><img src="{{asset('img/logos/feipobol.png')}}" alt=""></div></div>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.11/js/mdb.min.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@14/dist/smooth-scroll.polyfills.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
  <script src="https://code.highcharts.com/highcharts.src.js"></script>
  <script src="{{ asset('js/graficos.js')}}"></script>
  <script>
    new WOW().init();
    baguetteBox.run('.compact-gallery',{animation:'slideIn'});

     $(window).on('load',function(){
      $('.preloader').addClass('complete');
    });
  </script>

</body>
</html>
