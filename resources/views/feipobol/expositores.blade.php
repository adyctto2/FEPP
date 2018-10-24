@extends('layoutFeipobol')
@section('formularios')
<div id="noticias">

  <div class=" container ">
    <div class="contenido">
        <h2 class="h1-responsive font-weight-bold text-center ">EXPOSITORES <hr> </h2>
    </div>

    <div class="row">
      <div class="col-sm-3">
        <div class="form-group row wow ">
          <div id="global">
            <div id="mensajes">
              @foreach($expo as $exp)
              <a class="move"href="{{route('expositoresShow',['id'=>$exp->id])}}"><div class="texto "><h6 class="font-weight-light"ALIGN="center">{{$exp->nombre}}</h6></div></a>
              @endforeach

            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-1">

      </div>
      <div class="col-sm-8">
        <div class="row wow fadeInRight">

          <!-- Grid column -->
          <div class="col-lg-5">

            <!-- Featured image -->
            <div class="view overlay rounded z-depth-2 mb-lg-0 mb-4">
              <img class="img-fluid" src="{{asset('img/expositores/'.$exp1->img)}}" alt="Sample image">
              <a>
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>

          </div>
          <!-- Grid column -->
          <!-- Grid column -->
          <div class="col-lg-7 contenido">
            <h3 class="font-weight-bold mb-3"><strong>{{$exp1->nombre}}</strong></h3>
            <!-- Excerpt -->
            <P>{{ $exp1->descripcion }}</P>

            <!-- Post data -->
            <p><i class="fa fa-phone" aria-hidden="true"></i><strong>   | </strong><i class="fa fa-envelope-o" aria-hidden="true"> </i><strong></strong> | <i class="fa fa-map-marker" aria-hidden="true"></i></p>
            <a target="_blank" href="{{ $exp1->webpage}}"><i class="fa fa-globe" aria-hidden="true"></i></a> | <a target="_blank" href="{{ $exp1->facebook}}"><i class="fa fa-facebook" aria-hidden="true"></i></a> | <a target="_blank"  href="{{ $exp1->twitter}}"><i class="fa fa-twitter" aria-hidden="true"></i></a>

            <!-- Read more button -->
            <!-- <a class="btn btn-success btn-md" href="">Leer mas</a> -->

          </div>
          <!-- Grid column -->

        </div>



      </div>
      <div class="row">

      </div>
      <div class="row">

      </div>

    </div>
  </div>
</div>




    <!-- Section heading -->

@endsection
