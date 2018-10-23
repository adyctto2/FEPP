@extends('layoutFeipobol')
@section('formularios')


<div id="noticias">

  <div class=" container ">
    <div class="row">
      <div class="col-sm-8">
        <section class="row" >
          <img class="card-img-top" src="{{asset('img/noticias/'.$not->imagen)}}" alt="Card image cap">

              <div class="col-sm not  " ALIGN="center"><i class="fa fa-calendar" aria-hidden="true"></i> <small class="font-italic">{{$not->fecha}}</small></div>
              <div class="col-sm not " ALIGN="center"><i class="fa fa-eye" aria-hidden="true"></i><small class="font-italic"> {{ $variable->total_visitas}}</small>  vistas</div>
              <div class="col-sm not " ALIGN="center"><i class="fa fa-file-archive-o" aria-hidden="true"></i>  fuente: <small class="font-italic"><a class="rojo" href="">{{$not->fuente}}</a></small> </div>
          </section>


            <div class="card-body">
                <h3 class="font-weight-bold" ALIGN="justify">{{$not->titulo}}</h3>
                <p class="font-weight-light" ALIGN="justify">{!! nl2br(e($not->descripcion)) !!}</p>
            </div>

      </div>
      <!-- <div class="col-sm-">

      </div> -->
        <div class="col-sm-4 blo ">
          <div class="form-group">
              <!-- <input type="text" placeholder="Buscar" class="form-control"> -->
          </div>
                  <div class="card example-1 square scrollbar-cyan bordered-cyan bloquen">

                    @foreach($notis as $noti)
                      <a href="{{ route('fnoticias', ['id' =>  $noti->id]) }}">
                        <div class="card-body titulo">
                          <img class="card-img-top" src="{{asset('img/noticias/'.$noti->imagen)}}" alt="Card image cap">
                            <h1></h1>
                            <h6 class="font-weight-bold" ALIGN="justify">{{$noti->titulo}} </h6>
                              <hr>
                        </div>
                      </a>
                      @endforeach



                  </div>
                  
                <!-- </div> -->
        </div>


    </div>
  </div>
</div>
    <!-- Section heading -->

@endsection
