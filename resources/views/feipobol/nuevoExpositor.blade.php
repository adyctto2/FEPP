
@extends('layoutAdmi')

@section('formularios')

<div class="container">

    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4 green lighten-4" style="padding-top: 20px;padding-bottom: 20px;">
            
            <p style="text-align: center; font-size: 30px;"><strong> {{$titulo}}</strong></p>
            <form method="post" action="{{route('nexp')}}" enctype="multipart/form-data">
             {{csrf_field()}}
                <div class="form-group">
                    <label for="titulo">Nombre</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" aria-describedby="titulo" placeholder="Nombre de la empresa">
                </div>
                <div class="form-group">
                    <label for="direccion">Direccion</label>
                    <input type="text" class="form-control" id="direccion" name="direccion" aria-describedby="fuente" placeholder="Direccion">
                </div>
                <div class="form-group">
                    <label for="telefono">Telefono</label>
                    <input type="number" class="form-control" id="telefono" name="telefono"  aria-describedby="fuente" placeholder="Telefono">
                </div>
                <div class="form-group">
                        <label for="descripcion">Descripcion</label>
                        <textarea class="form-control" id="descripcion" name="descripcion" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Cargar Logo</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="imagen">
                </div>
                <div class="row">
                    <div class="col-md-6">
                            <button type="submit" class="btn btn-primary btn-block">Guardar</button></div>
                    <div class="col-md-6">
                            <a class="btn btn-danger btn-block" href="{{route('adcfStands')}}">Cancelar</a></div>
                </div>
            </form>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>
@endsection
