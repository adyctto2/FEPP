@extends('layout')
@section('formularios')


<div id="portfolio" class="section md-padding bg-grey">
		<div>
            <div class="row">
                <div class="section-header text-center">
                    <h1 class="title">{{$titulo}}</h1>
                </div>
                <div class="col-sm-3">
					<div class="menu-form">
											@foreach ($entidades as $entidad)
                        <a href="{{ route('entidadeshow', ['id' =>  $entidad->id]) }}">{{ $entidad->nombre }}</a>
												@endforeach
                    </div>
				</div>


				<div class="col-sm-3">
                        <img src="{{ asset('img/logos/alinvest.png')}}"  class="img-thumbnail" alt="Al-Invest">
				</div>
                <DIV class="col-sm-5 descripcion">
                    <h2>{{$entidad->nombre }}</h2>
                    <P>{{ $entidad->descripcion }}</P>
										<p><strong>Gerente: </strong>{{ $entidad->gerente}}</p>
										<p><strong>Presidente: </strong>{{$entidad->presidente}}</p>
                    <p><i class="fa fa-phone" aria-hidden="true"></i><strong>  {{ $entidad->telefono }} | </strong><i class="fa fa-envelope-o" aria-hidden="true"></i><strong> {{ $entidad-> email}}</strong> | <i class="fa fa-map-marker" aria-hidden="true"></i>   {{ $entidad->direccion}}</p>
                    <a href=""><i class="fa fa-globe" aria-hidden="true"></i></a> | <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a> | <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                </DIV>
                <div class="col-sm-1"></div>
            </div>
        </div>
</div>
@endsection
