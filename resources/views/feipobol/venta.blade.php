@extends('layoutFeipobol')
@section('formularios')
    <div class="container stands">
        <h1 class="h1-responsive font-weight-bold text-center ">{{ $titulo }}</h1>
        
        <h2 class="h1-responsive text-center">Ejecutivos de Ventas</h2>
        <div class="row">
            <div class="col-md-3">
                <div class="card vendedor">
                    <div class="view overlay icono">
                            <i class="fa fa-user" aria-hidden="true"></i>

                        </a>
                    </div>
                    <div class="card-body">

                        <!-- Title -->
                        <h4 class="card-title"><strong>Litze Clara</strong> Condori Moncayo</h4>
                        <!-- Text -->
                        <p class="card-text"><i class="fa fa-mobile" aria-hidden="true"></i> (+591) 78632343</p>
                        <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> (591-2) 62-22625</p>
                        <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i> feipobol@gmail.com</p>

                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card vendedor">
                    <div class="view overlay icono">
                            <i class="fa fa-user" aria-hidden="true"></i>

                        </a>
                    </div>
                    <div class="card-body">

                        <!-- Title -->
                        <h4 class="card-title"><strong>Geovana</strong> Fuertes Quispe</h4>
                        <!-- Text -->
                        <p class="card-text"><i class="fa fa-mobile" aria-hidden="true"></i> (+591) 75730150</p>
                        <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> (591-2) 62-22625</p>
                        <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i> feipobol@gmail.com</p>

                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card vendedor">
                    <div class="view overlay icono">
                            <i class="fa fa-user" aria-hidden="true"></i>

                        </a>
                    </div>
                    <div class="card-body">
                        <!-- Title -->
                        <h4 class="card-title"><strong>Helen</strong> Fuertes Arando</h4>
                        <!-- Text -->
                        <p class="card-text"><i class="fa fa-mobile" aria-hidden="true"></i> (+591) 76178906</p>
                        <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> (591-2) 62-22625</p>
                        <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i> feipobol@gmail.com</p>

                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card vendedor">
                    <div class="view overlay icono">
                            <i class="fa fa-user" aria-hidden="true"></i>

                        </a>
                    </div>
                    <div class="card-body">
                        <!-- Title -->
                        <h4 class="card-title"><strong>Jose Miguel</strong> Cardenas Gutierrez</h4>
                        <!-- Text -->
                        <p class="card-text"><i class="fa fa-mobile" aria-hidden="true"></i> (+591) 69616123</p>
                        <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> (591-2) 62-22625</p>
                        <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i> feipobol@gmail.com</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="fotos">
            <section class="gallery-block compact-gallery">
                <div class="">
                  <div class="">
                      <h2 class="h1-responsive font-weight-bold text-center ">Mapa de Stands</h2>
                  </div>
        
                  <div class="row no-gutters">
                    <div class="col-md-6 col-lg-4 item zoom-on-hover">
                      <a class="lightbox" href="{{ asset('img/mapas/1.png') }}">
                        <img class="img-fluid image" src="{{ asset('img/mapas/1.png') }}">
                        <span class="description">
                          <span class="description-heading">Lorem Ipsum</span>
                          <span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                        </span>
                      </a>
                    </div>
        
        
                    <div class="col-md-6 col-lg-4 item zoom-on-hover">
                      <a class="lightbox" href="{{ asset('img/mapas/2.png') }}">
                        <img class="img-fluid image" src="{{ asset('img/mapas/2.png') }}">
                        <span class="description">
                          <span class="description-heading">Lorem Ipsum</span>
                          <span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                        </span>
                      </a>
                    </div>
        
        
                    <div class="col-md-6 col-lg-4 item zoom-on-hover">
                      <a class="lightbox" href="{{ asset('img/mapas/3.png') }}">
                        <img class="img-fluid image" src="{{ asset('img/mapas/3.png') }}">
                        <span class="description">
                          <span class="description-heading">Lorem Ipsum</span>
                          <span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                        </span>
                      </a>
                    </div>
        
                    <div class="col-md-6 col-lg-4 item zoom-on-hover">
                      <a class="lightbox" href="{{ asset('img/mapas/4.png') }}">
                        <img class="img-fluid image" src="{{ asset('img/mapas/4.png') }}">
                        <span class="description">
                          <span class="description-heading">Lorem Ipsum</span>
                          <span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                        </span>
                      </a>
                    </div>
        
        
                    <div class="col-md-6 col-lg-4 item zoom-on-hover">
                      <a class="lightbox" href="{{ asset('img/mapas/5.png') }}">
                        <img class="img-fluid image" src="{{ asset('img/mapas/5.png') }}">
                        <span class="description">
                          <span class="description-heading">Lorem Ipsum</span>
                          <span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                        </span>
                      </a>
                    </div>
        
        
                    <div class="col-md-6 col-lg-4 item zoom-on-hover">
                      <a class="lightbox" href="{{ asset('img/mapas/6.png') }}">
                        <img class="img-fluid image" src="{{ asset('img/mapas/6.png') }}">
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
        
@endsection
