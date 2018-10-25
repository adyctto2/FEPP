
@extends('layoutAdmi')

@section('formularios')


<div class="container">
    
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4 grey lighten-2" style="padding-top: 20px;padding-bottom: 20px;">
            
            <p style="text-align: center; font-size: 30px;"><strong> {{$titulo}}</strong></p>
            <form method="post" action="{{route('crearnoticia')}}" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="titulo">Titulo</label>
                    <input type="text" class="form-control" id="titulo"  name="titulo" aria-describedby="titulo" placeholder="Ingrese titulo de la noticia">
                </div>
                <div class="form-group">
                    <label for="fuente">Fuente</label>
                    <input type="text" class="form-control" id="fuente" name="fuente"aria-describedby="fuente" placeholder="Fuente de la noticia">
                </div>
                <div class="form-group">
                        <label for="descripcion">Descripcion</label>
                        <textarea class="form-control" id="descripcion" name="descripcion" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Cargar Imagen</label>
                    <input type="file" class="form-control-file" name="imagen" id="exampleFormControlFile1">
                </div>
                
                <div class="row">
                    <div class="col-md-6">
                            <button type="submit" class="btn btn-primary btn-block">Guardar</button></div>
                    <div class="col-md-6">
                            <a class="btn btn-danger btn-block" href="{{route('adcfNoticia')}}">Cancelar</a></div>
                </div>
            </form>
        </div>
        <div class="col-md-4"></div>
    </div>

</div>
@endsection


