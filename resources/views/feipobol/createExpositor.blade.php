
@extends('layoutAdmi')

@section('formularios')

<div class="container">

<h1>{{$titulo}}</h1><a href="{{route('nuevoExp')}}" class="btn btn-primary">Crear nuevo</a>
        <table class="table table-hover">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">nombre</th>
                    <th scope="col">direccion</th>
                    <th scope="col">telefono</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($expo as $exp)
                  <tr>
                    <th scope="row"></th>
                    <td>{{$exp->nombre}}</td>
                    <td>{{$exp->direccion}}</td>
                    <td>{{$exp->telefono}}</td>
                  </tr>
                  
                @endforeach
                </tbody>
              </table>
    </div>
</div>
@endsection
