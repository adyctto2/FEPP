@extends('layout')
@section('formularios')
<div id="portfolio" class="section md-padding bg-grey">
		<div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <img src="{{asset('img/blog2.jpg')}}"  class=" images" alt="">
                    <section class="noticia-header">
                        <div class="col-sm-4"><i class="fa fa-calendar" aria-hidden="true"></i>  18 octubre de 2018</div>
                        <div class="col-sm-4"><i class="fa fa-eye" aria-hidden="true"></i>  451 vistas</div>
                        <div class="col-sm-4"><i class="fa fa-file-archive-o" aria-hidden="true"></i>  fuente: <a href="">el Potosi</a></div>
                    </section>
                    <section class="noticia-contenido">
                        <h3>Titulo de la noticia</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui beatae debitis molestias mollitia, reprehenderit voluptatum, obcaecati sapiente culpa nostrum voluptas vel. Quidem maxime doloribus, expedita nihil esse ex ad porro.</p>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aperiam, similique! Tenetur, quod assumenda non sint soluta facere fuga illum, laboriosam, sapiente libero qui illo aut mollitia deleniti error earum voluptas? Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime accusamus illo nobis porro, alias aut, neque ex, quaerat minus vitae voluptatem libero laboriosam vero eaque quasi? Delectus in veniam iusto?</p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus alias neque obcaecati labore quo? Illum alias, omnis sed earum magnam fugiat aliquid harum, rerum culpa, libero modi nulla perspiciatis officiis?Nihil officia exercitationem voluptatem expedita temporibus sequi quisquam autem eaque saepe aliquam velit ut nulla, fugiat repellat rem tenetur placeat veniam commodi ipsa incidunt, numquam quos reiciendis repellendus qui! Veritatis!</p>
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
                    <a href="">
                        <div class="blog">
                            <div class="blog-img">
                                <img class="img-responsive" src="./img/blog2.jpg" alt="">
                            </div>
                            <div class="blog-content">
                                <h3>El viceministro comio caca el dia de ayer</h3>
                            </div>
                        </div>
                    </a>
                    <a href="">
                        <div class="blog">
                            <div class="blog-img">
                                <img class="img-responsive" src="./img/blog2.jpg" alt="">
                            </div>
                            <div class="blog-content">
                                <h3>El viceministro comio caca el dia de ayer</h3>
                            </div>
                        </div>
                    </a>
                    <a href="">
                        <div class="blog">
                            <div class="blog-img">
                                <img class="img-responsive" src="./img/blog2.jpg" alt="">
                            </div>
                            <div class="blog-content">
                                <h3>El viceministro comio caca el dia de ayer</h3>
                            </div>
                        </div>
                    </a>
                   </div>
				</div>
            </div>
        </div>
</div>
@endsection
