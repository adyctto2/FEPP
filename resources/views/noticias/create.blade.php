
@extends('layoutAdmi')

@section('formularios')


<div class="container">
        <h1>{{$titulo}}</h1><a href="{{route('nuevo')}}" class="btn btn-primary">Crear nuevo</a>
        <table class="table table-hover">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">nombre</th>
                    <th scope="col">Fuente</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Visitas</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($noticias as $noticia)
                  <tr>
                    <th scope="row"></th>
                    <td>{{$noticia->titulo}}</td>
                    <td>{{$noticia->fuente}}</td>
                    <td>{{$noticia->fecha}}</td>
                    <td>{{$noticia->total_visitas}}</td>
                  </tr>
                  
                @endforeach
                </tbody>
              </table>

</div>
@endsection
