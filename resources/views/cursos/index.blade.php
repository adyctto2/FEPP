@extends('layout')
@section('formularios')
<div id="portfolio" class="section md-padding2 bg-grey">
		<div class="container">
            <div class="row">
                <div class="col-sm-2 fecha">
                    <h5>inicio: 18 de octubre de 2018</h5>
                    <h5>Duracion: 10 dias</h5>
                    <h5>Horaios: Lunes a Viernes, horas 18:30</h5>
                    <h5>Lugar: Federacion de Empresarios Privados Potosi</h5>
                    <h5>Costo: 300 Bs</h5>
                    <h5>Expositor: Ing Juan perez perez</h5>
                    <h5>Certificado con valor curricullar emitido por la F.E.P.P.</h5>
                </div>
                <div class="col-sm-7">
                        <h3>CURSO DE TÉCNICO CERTIFICADO DE FIBRA ÓPTICA</h3>
                    <img src="{{asset('img/blog2.jpg')}}"  class=" images" alt="">
                    <section class="noticia-contenido">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui beatae debitis molestias mollitia, reprehenderit voluptatum, obcaecati sapiente culpa nostrum voluptas vel. Quidem maxime doloribus, expedita nihil esse ex ad porro.</p>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aperiam, similique! Tenetur, quod assumenda non sint soluta facere fuga illum, laboriosam, sapiente libero qui illo aut mollitia deleniti error earum voluptas? Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime accusamus illo nobis porro, alias aut, neque ex, quaerat minus vitae voluptatem libero laboriosam vero eaque quasi? Delectus in veniam iusto?</p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus alias neque obcaecati labore quo? Illum alias, omnis sed earum magnam fugiat aliquid harum, rerum culpa, libero modi nulla perspiciatis officiis?Nihil officia exercitationem voluptatem expedita temporibus sequi quisquam autem eaque saepe aliquam velit ut nulla, fugiat repellat rem tenetur placeat veniam commodi ipsa incidunt, numquam quos reiciendis repellendus qui! Veritatis!</p>
                        <h5>Temario</h5>
                        <li>tema 1 para exponer</li>
                        <li>tema 2 para exponer</li>
                    </section>

                </div>
                <hr>
                <div class="col-sm-3 noticias">
                    <div>
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
