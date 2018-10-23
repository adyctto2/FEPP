@extends('layoutFeipobol')
@section('formularios')
<div id="fotos">
    <section class="gallery-block compact-gallery">
        <div class="">
          <div class="">
              <h2 class="h1-responsive font-weight-bold text-center ">GALERIA DE FOTOS</h2>
          </div>

          <div class="row no-gutters">
            @foreach($fotos as $foto)
            <div class="col-md-6 col-lg-4 item zoom-on-hover wow zoomIn" data-wow-delay="0.3s">
              <a class="lightbox" href="{{ asset('img/galeria/'.$foto->img) }}">
                <img class="img-fluid image" src="{{ asset('img/galeria/'.$foto->img) }}">
                <span class="description">
                  <!-- <span class="description-heading">Lorem Ipsum</span> -->
                  <span class="description-body">{{$foto->nombre}}</span>
                </span>
              </a>
            </div>
            @endforeach


          </div>
        </div>

        <!-- <a href=""> Ver todo</a> -->
      </section>
</div>

@endsection
