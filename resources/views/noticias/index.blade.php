@extends('layout')
@section('formularios')
<div id="portfolio" class="section md-padding2 bg-grey">
		<div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <img src="{{asset('img/noticias/'.$not1->imagen)}}"  class=" images" alt="">
                    <section class="noticia-header">
                        <div class="col-sm-4"><i class="fa fa-calendar" aria-hidden="true"></i>{{$not1->fecha}}</div>
                        <div class="col-sm-4"><i class="fa fa-eye" aria-hidden="true"></i>  451 vistas</div>
                        <div class="col-sm-4"><i class="fa fa-file-archive-o" aria-hidden="true"></i>  fuente: <a href="">{{$not1->fuente}}</a></div>
                    </section>
                    <section class="noticia-contenido">
                        <h2>{{$not1->titulo}}</h2>
                        <p ALIGN="justify">{!! nl2br(e($not1->descripcion)) !!}</p>
                        <!-- <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aperiam, similique! Tenetur, quod assumenda non sint soluta facere fuga illum, laboriosam, sapiente libero qui illo aut mollitia deleniti error earum voluptas? Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime accusamus illo nobis porro, alias aut, neque ex, quaerat minus vitae voluptatem libero laboriosam vero eaque quasi? Delectus in veniam iusto?</p> -->
                        <!-- <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus alias neque obcaecati labore quo? Illum alias, omnis sed earum magnam fugiat aliquid harum, rerum culpa, libero modi nulla perspiciatis officiis?Nihil officia exercitationem voluptatem expedita temporibus sequi quisquam autem eaque saepe aliquam velit ut nulla, fugiat repellat rem tenetur placeat veniam commodi ipsa incidunt, numquam quos reiciendis repellendus qui! Veritatis!</p> -->
                    </section>
                </div>
                <hr>
                <div class="col-sm-3 noticias">
                    <div>
                    <form action="">
                        <div class="form-group">
                            <input type="text" placeholder="Buscar" class="form-control">
                        </div>
                    </form>
										@foreach($noticias as $noticia)
                    <a href="{{ route('noticiaShow', ['id' =>  $noticia->id]) }}">
                        <div class="blog">
                            <div class="blog-img">
                                <img class="img-responsive" src="{{asset('img/noticias/'.$noticia->imagen)}}" alt="">
                            </div>
                            <div class="blog-content">
                                <h5 ALIGN="justify">{{$noticia->titulo}}</h5>
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
