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
            <a class="dropdown-item" href="#expositores">Expositores</a>
            <a class="dropdown-item" href="#estadisticas">Resultados Feipobol</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-scroll href="#NFeria">Noches de Feria</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" data-scroll href="#noticias">Noticias</a>
        </li>
        
        <li class="nav-item dropdown ">
            <a class="nav-link dropdown-toggle" id="galeria" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Galeria</a>
            <div class="dropdown-menu dropdown-primary" aria-labelledby="galeria">
              <a class="dropdown-item" href="#fotos">Fotos</a>
              <a class="dropdown-item" href="#Videos">Videos</a>
            </div>
          </li>

        <li class="nav-item">
            <a class="nav-link" href="#">Contactos</a>
          </li>

      </ul>
    </div>
  </div>
  <!-- Collapsible content -->
</nav>

<header>
  
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
          <h6 class="mb-3 wow fadeInLeft web" data-wow-delay="0.3s">La FEIPOBOL, uno de los eventos multisectoriales de negocios más importantes de Bolivia, bajo el modelo de internacionalización del negocio, se ha consolidado como protagonista activa para el intercambio comercial y la movilización del desarrollo productivo, comercial y de servicios a nivel local, nacional e internacional.</h6>
          <h6 class="mb-3 wow fadeInLeft mobil" data-wow-delay="0.3s">La FEIPOBOL, uno de los eventos multisectoriales de negocios más importantes de Bolivia, bajo el modelo de internacionalización del negocio.</h6>
          
          <a class="btn btn-outline-white wow fadeInLeft" data-wow-delay="0.3s">Saber mas</a>
        </div>
        <!--Grid column-->
        <!--Grid column-->
        <div class="col-md-6 col-xl-5 mb-4">
          <!--Form-->
          <div class="card wow fadeInRight" data-wow-delay="0.3s">
            <div class="text-center">
              <h3 class="white-text">
                <img src="{{ asset('img/logos/feipobol.png')}}" class="logo" alt="">
            </div>
            <div class="card-body">
              <!--Body-->
              <div class="md-form">
                <i class="fa fa-calendar prefix white-text active"></i>
                <h4> 9 al 18 de noviembre</h4>
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
<!-- carousel expositores con ordenadores -->
<div class="" id="expositores">
  <div class=" expositor-web container">
    <h2 class="h1-responsive font-weight-bold text-center my-5">Expositores</h2>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="row formato" >
            <div class="col-sm-4">
              <div class="card">
                <img class="card-img-top" src="{{ asset('img/expositores/1.png')}}" alt="Card image cap">
                <div class="card-body">
                  <a><h5 class="card-title">Card title</h5></a>
                    <div class="inline-ul text-center d-flex card-text justify-content-center">
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
            <div class="col-sm-4" >
              <div class="card" >
                <img class="card-img-top" src="{{ asset('img/expositores/2.png')}}"  alt="Card image cap">
                <div class="card-body">
                  <a><h5 class="card-title">Card title</h5></a>
                    <div class="inline-ul text-center d-flex card-text justify-content-center">
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
            <div class="col-sm-4" >
              <div class="card">
                <img class="card-img-top" src="{{ asset('img/expositores/3.png')}}"  alt="Card image cap">
                <div class="card-body">
                  <a><h5 class="card-title">Card title</h5></a>
                    <div class="inline-ul text-center d-flex card-text justify-content-center">
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
          </div>
        </div>

        <div class="carousel-item">
          <div class="row" >
            <div class="col-sm-4">
              <div class="card">
                <img class="card-img-top" src="{{ asset('img/expositores/4.png')}}"  alt="Card image cap">
                <div class="card-body">
                  <a><h5 class="card-title">Card title</h5></a>
                    <div class="inline-ul text-center d-flex card-text justify-content-center">
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
            <div class="col-sm-4" >
              <div class="card" >
                <img class="card-img-top" src="{{ asset('img/expositores/5.png')}}"  alt="Card image cap">
                <div class="card-body">
                  <a><h5 class="card-title">Card title</h5></a>
                    <div class="inline-ul text-center d-flex card-text justify-content-center">
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
            <div class="col-sm-4" >
              <div class="card">
                <img class="card-img-top" src="{{ asset('img/expositores/6.png')}}"  alt="Card image cap">
                <div class="card-body">
                  <a><h5 class="card-title">Card title</h5></a>
                    <div class="inline-ul text-center d-flex card-text justify-content-center">
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
          </div>
        </div>
      </div>  
    </div>
  </div>
  <div class="container expositor-mobil">

    <h2 class="h1-responsive font-weight-bold text-center my-5">Expositores</h2>
    <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators2" data-slide-to="3"></li>
        <li data-target="#carouselExampleIndicators2" data-slide-to="4"></li>
        <li data-target="#carouselExampleIndicators2" data-slide-to="5"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="card">
            <img class="card-img-top" src="{{ asset('img/expositores/1.png')}}" alt="Card image cap">
            <div class="card-body">
              <a><h5 class="card-title">Card title</h5></a>
                <div class="inline-ul text-center d-flex card-text justify-content-center">
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
      
      <div class="carousel-item">
          <div class="card" >
            <img class="card-img-top" src="{{ asset('img/expositores/2.png')}}"  alt="Card image cap">
            <div class="card-body">
              <a><h5 class="card-title">Card title</h5></a>
                <div class="inline-ul text-center d-flex card-text justify-content-center">
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
      <div class="carousel-item">
          <div class="card" >
            <img class="card-img-top" src="{{ asset('img/expositores/3.png')}}"  alt="Card image cap">
            <div class="card-body">
              <a><h5 class="card-title">Card title</h5></a>
                <div class="inline-ul text-center d-flex card-text justify-content-center">
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
      <div class="carousel-item">
          <div class="card" >
            <img class="card-img-top" src="{{ asset('img/expositores/4.png')}}"  alt="Card image cap">
            <div class="card-body">
              <a><h5 class="card-title">Card title</h5></a>
                <div class="inline-ul text-center d-flex card-text justify-content-center">
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
      <div class="carousel-item">
          <div class="card" >
            <img class="card-img-top" src="{{ asset('img/expositores/5.png')}}"  alt="Card image cap">
            <div class="card-body">
              <a><h5 class="card-title">Card title</h5></a>
                <div class="inline-ul text-center d-flex card-text justify-content-center">
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
      <div class="carousel-item">
          <div class="card" >
            <img class="card-img-top" src="{{ asset('img/expositores/6.png')}}"  alt="Card image cap">
            <div class="card-body">
              <a><h5 class="card-title">Card title</h5></a>
                <div class="inline-ul text-center d-flex card-text justify-content-center">
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
    </div>
  </div>
  </div>

</div>


<!-- carousel para moviles -->
<div id="estadisticas" >
  <div class="container">
      <h2 class="h1-responsive font-weight-bold text-center my-5">RESULTADOS FEIPOBOL 2017</h2>
      <div></div>
  <div class="grafico1" id="grafico1"></div>
  </div>
</div>


<div id="NFeria">
  <div class="trasparente">

    
    <div class="contenido">
        <h2 class="h1-responsive font-weight-bold text-center ">Noches de Feria</h2>
        <p>Muy pronto</p>
    </div>
  </div>
</div>



<div id="noticias">
  <section class=" container">

    <!-- Section heading -->
    <h2 class="h1-responsive font-weight-bold text-center ">NOTICIAS</h2>
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
  </section>
</div>

<div class="entre-pagina">
</div>

<div id="fotos">
    <section class="gallery-block compact-gallery">
        <div class="">
          <div class="">
              <h2 class="h1-responsive font-weight-bold text-center ">Galeria de Fotos</h2>
          </div>
          
          <div class="row no-gutters">
            <div class="col-md-6 col-lg-4 item zoom-on-hover">
              <a class="lightbox" href="{{ asset('img/galeria/1.jpg') }}">
                <img class="img-fluid image" src="{{ asset('img/galeria/1.jpg') }}">
                <span class="description">
                  <span class="description-heading">Lorem Ipsum</span>
                  <span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                </span>
              </a>
            </div>
            
            
            <div class="col-md-6 col-lg-4 item zoom-on-hover">
              <a class="lightbox" href="{{ asset('img/galeria/2.jpg') }}">
                <img class="img-fluid image" src="{{ asset('img/galeria/2.jpg') }}">
                <span class="description">
                  <span class="description-heading">Lorem Ipsum</span>
                  <span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                </span>
              </a>
            </div>
            
            
            <div class="col-md-6 col-lg-4 item zoom-on-hover">
              <a class="lightbox" href="{{ asset('img/galeria/3.jpg') }}">
                <img class="img-fluid image" src="{{ asset('img/galeria/3.jpg') }}">
                <span class="description">
                  <span class="description-heading">Lorem Ipsum</span>
                  <span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                </span>
              </a>
            </div>
            
            <div class="col-md-6 col-lg-4 item zoom-on-hover">
              <a class="lightbox" href="{{ asset('img/galeria/4.jpg') }}">
                <img class="img-fluid image" src="{{ asset('img/galeria/4.jpg') }}">
                <span class="description">
                  <span class="description-heading">Lorem Ipsum</span>
                  <span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                </span>
              </a>
            </div>
            
            
            <div class="col-md-6 col-lg-4 item zoom-on-hover">
              <a class="lightbox" href="{{ asset('img/galeria/5.jpg') }}">
                <img class="img-fluid image" src="{{ asset('img/galeria/5.jpg') }}">
                <span class="description">
                  <span class="description-heading">Lorem Ipsum</span>
                  <span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                </span>
              </a>
            </div>
            
            
            <div class="col-md-6 col-lg-4 item zoom-on-hover">
              <a class="lightbox" href="{{ asset('img/galeria/6.jpg') }}">
                <img class="img-fluid image" src="{{ asset('img/galeria/6.jpg') }}">
                <span class="description">
                  <span class="description-heading">Lorem Ipsum</span>
                  <span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                </span>
              </a>
            </div>
            
          </div>
        </div>

        <a href=""> Ver todo</a>
      </section>
</div>

<div id="Videos">


</div>




<div class="modal fade right" id="modalRelatedContent" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true" data-backdrop="false">
  <div class="modal-dialog modal-side modal-bottom-right modal-notify modal-info" role="document">
    <!--Content-->
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header">
        <p class="heading">Video Sugerido</p>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="white-text">&times;</span>
        </button>
      </div>

      <!--Body-->
      <div class="modal-body">

        <div class="row">
          <div class="col-5">
            <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(55).jpg" class="img-fluid"
               width="100%" height="100px" alt="">
          </div>

          <div class="col-7">
            <p><strong>Spot Publicitario FEIPOBOL 2018</strong></p>
            <button type="button" class="btn-outline-danger waves-effect btn-md btn-block"  data-toggle="modal" data-target="#exampleModalCenter" data-dismiss="modal">Ver Video</button>

          </div>
        </div>
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
<div class="modal fade bd-example-modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content ">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">Spot Publicitario FEIPOBOL 2018</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" id="video">
          <video controls width="100%;" >
            <source src="{{asset('video/video1.mp4')}}" type="video/mp4">
          </video>
        </div>
      </div>
    </div>
  </div>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.11/js/mdb.min.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@14/dist/smooth-scroll.polyfills.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>}
  <script src="https://code.highcharts.com/highcharts.src.js"></script>
  <script>
    new WOW().init();
    var scroll = new SmoothScroll('a[href*="#"]',{
      offset : 60
    });
    $('#modalRelatedContent').modal('toggle')
    var pausa = document.querySelector("#close");
    pausa.addEventListener(('click'),function(){
      $("#video").empty();
      
    });
    baguetteBox.run('.compact-gallery',{animation:'slideIn'});



    // Build the chart
Highcharts.chart('grafico1', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Browser market shares in January, 2018'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: false
            },
            showInLegend: true
        }
    },
    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [{
            name: 'Chrome',
            y: 61.41,
            sliced: true,
            selected: true
        }, {
            name: 'Internet Explorer',
            y: 11.84
        }, {
            name: 'Firefox',
            y: 10.85
        }, {
            name: 'Edge',
            y: 4.67
        }, {
            name: 'Safari',
            y: 4.18
        }, {
            name: 'Other',
            y: 7.05
        }]
    }]
});

  </script>
</body>
</html>
