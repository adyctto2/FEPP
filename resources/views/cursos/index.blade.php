@extends('layout')
@section('formularios')
<div id="portfolio" class="section md-padding2 bg-grey">
		<div class="container">
            <div class="row">
                <div class="col-sm-2 fecha">
                    <h5>inicio: {{$curso1->fecha}}</h5>
                    <h5>Duracion: {{$curso1->duracion}}</h5>
                    <h5>Horaios: {{$curso1->horarios}}</h5>
                    <h5>Lugar: {{$curso1->lugar}}</h5>
                    <h5>Costo: {{$curso1->costo}}</h5>
                    <h5>Expositor: {{$curso1->expositor}}</h5>
                    <h5>{{$curso1->certificacion}}</h5>
                </div>
                <div class="col-sm-7">
                        <h3>{{$curso1->titulo}}</h3>
                    <img src="{{asset('img/cursos/'.$curso1->imagen)}}"  class=" images" alt="">
                    <section class="noticia-contenido">
                        <p>{!! nl2br(e($curso1->descripcion)) !!}</p>
                        <h5>Temario</h5>
                        <li>{!! nl2br(e($curso1->temario)) !!}</li>
                    </section>

                </div>
                <hr>
                <div class="col-sm-3 noticias">
                    <div>
										@foreach($cursos as $curso)
                    <a href="{{ route('cursoShow', ['id' => $curso->id])}}">
                        <div class="blog">
                            <div class="blog-img">
                                <img class="img-responsive" src="{{asset('img/cursos/'.$curso->imagen)}}" alt="">
                            </div>
                            <div class="blog-content">
                                <h3>{{$curso->titulo}}</h3>
                            </div>
                        </div>
                    </a>
										@endforeach
                   </div>
				</div>
            </div>
        </div>
</div>
@endsection
