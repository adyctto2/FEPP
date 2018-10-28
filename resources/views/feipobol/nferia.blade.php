@extends('layoutFeipobol')
@section('formularios')
<div id="NFeria">

        <div class="evento-principal">
          <div class="container ">

              <h5 class="opcion">{{ $mensaje }}</h5>
              <br>
            <div class="row wow fadeInLeft">
                <div class="col-md-3">

                </div>
                  <div class="col-md-6">
                    <h2><strong> {{ $importante->nombre}}</strong></h2>
                    <hr>
                    <div class="row">
                      <div class="col-md-2">

                         <p> <span>Dia: </span> {{ \Carbon\Carbon::parse($importante->fecha)->format('d') }}</p>
                         <p> <span>Mes: </span> {{ \Carbon\Carbon::parse($importante->fecha)->format('m') }}</p>
                         <p><span>Año: </span> {{ \Carbon\Carbon::parse($importante->fecha)->format('y') }}</p>
                      </div>
                      <div class="col-md-10 grupos">

                          @foreach($grupos as $grupo)
                        <div class="row">



                           <div class="col-md-6 img">

                              <img class="img-rounded" src="{{ asset('img/eventos/'.$grupo->img)}}" alt="">
                           </div>

                           <div class="col-md-6 details">
                             <blockquote ALIGN="center">
                               <br>
                               <h5 align="center" class="letra">{{$grupo->nombre}}</h5>
                               <br>

                                  <a href="{{$grupo->trabajo1}}" target="_blank" ><i  class=" 	fa fa-youtube-play red-text" style="font-size:20px;"></i></a>
                                     |
                                  <a href="{{$grupo->red_social}}" target="_blank"><i class="fa fa-facebook-f indigo-text pr-3" style="font-size:20px;"></i></a>




                             </blockquote>
                             <p>
                             </p>
                           </div>



                        </div>
                        <hr>
                          @endforeach

                      </div>
                    </div>
                    @if(strlen($importante->auspiciador)>0)
                    <div class="auspicio">Auspiciador: <strong> {{ $importante->auspiciador }}</strong></div>
                    @endif
                  </div>
                  <div class="col-md-2 ">
                      <img class="d-none d-lg-block" src="{{asset('img/eventos/'.$importante->img)}}" alt="">
                  </div>
            </div>

          </div>
        </div>
        <div class="contenido ">
          <br>
            <h2 class="h1-responsive  text-center text-white ">NOCHES DE FERIA</h2>
            <br><hr>
        </div>
        <div class="evento-secundario container wow fadeInUp">
          <div class="row">
            @foreach($todo as  $td)
               <div class="card col-md-3 quitar" style="padding: 10px;"><a class="hovers" href="{{ route('nferiashow',['id' =>  $td->id])}}">
                  <img class="card-img-top" src="{{asset('img/eventos/'.$td->img)}}" alt="{{$td->nombre}}">
                  <div class="card-body">
                    <h5 align="center" class="card-title">{{$td->nombre}}</h5>
                    <p align="center" class="card-text">Fecha: <strong>{{ \Carbon\Carbon::parse($td->fecha)->format('d')}} de {{ $fecha[\Carbon\Carbon::parse($td->fecha)->format('m')-1]}}</strong></p>
                    {{--  <p class="card-text">costo: <strong>{{$td->costo}} Bs.</strong></p>  --}}
                  </div>
                </a> </div>
            @endforeach
          </div>
        </div>



</div>

@endsection
