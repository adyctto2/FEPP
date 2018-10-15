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
                        <a href="">AL - INVEST 5.0</a>
                        <a href="">BANCO BISA</a>
                        <a href="">BANCO NACIONAL DE BOLIVIA</a>
                        <a href="">CADECO</a>
                        <a href="">CADEMIN</a>
                        <a href="">CAMARA TEXTIL</a>
                        <a href="">CAMARA GRAFICA</a>
                        <a href="">CEPB</a>
                        <a href="">CLAUDIA HOTEL</a>
                        <a href="">CERVECERIA NACIONAL POTOSI</a>
                        <a href="">CAMARA HOTELERA</a>
                        <a href="">LA PREDILECTA</a>
                        <a href="">CAINCO</a>
                        <a href="">CONSULTORA CONTABLE</a>
                        <a href="">HOTEL GRAN LIBERTADOR</a>
                        <a href="">OBSERVATORIO RSE</a>
                        <a href="">SAN BARTOLOME</a>
                        <a href="">SAN CRISTOBAL</a>
                        <a href="">EL POTOSI</a>
                    </div>
				</div>
				<div class="col-sm-3">
                        <img src="{{ asset('img/logos/alinvest.png')}}"  class="img-thumbnail" alt="Al-Invest">
				</div>
                <DIV class="col-sm-5 descripcion">
                    <h2>AL-INVEST 5.0</h2>
                    <P>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deleniti voluptate quisquam molestias harum voluptates libero commodi nemo tempora nostrum consequuntur, enim blanditiis ex quas, praesentium voluptatem pariatur corrupti natus eius.</P>
                    <p><i class="fa fa-phone" aria-hidden="true"></i><strong> 62-24587 | </strong><i class="fa fa-envelope-o" aria-hidden="true"></i><strong> email@gmail.com</strong> | <i class="fa fa-map-marker" aria-hidden="true"></i>  Calle tal N° 123</p>
                    <a href=""><i class="fa fa-globe" aria-hidden="true"></i></a> | <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a> | <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                </DIV>
                <div class="col-sm-1"></div>
            </div>
        </div>
</div>
@endsection
