@extends('layout')
@section('formularios')
<div id="contacto" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section-header -->
				<div class="section-header text-center">
					<h2 class="title">{{$titulo}}</h2>
				</div>
				<div class="col-sm-4">
					<div class="contact">
						<i class="fa fa-phone"></i>
						<h3>Teléfono</h3>
						<p>+(591) 2 622-2625</p>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="contact">
						<i class="fa fa-envelope"></i>
						<h3>Correo Electrónico</h3>
						<p>feppotosi@gmail.com </p>
					</div>
				</div>

				<a href="" data-toggle="modal" data-target="#exampleModalCenter">
				<div class="col-sm-4">
					<div class="contact">
						<i class="fa fa-map-marker"></i>
						<h3>Dirección</h3>
						<p>Av. Serrudo # 127 Edificio Renovación Piso #2 </p>

					</div>
				</div>
				</a>
			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Contact -->


	<!-- Modal -->
	<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalCenterTitle">NUESTRA UBICACIÓN</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1879.5177971405635!2d-65.75773924195988!3d-19.58297569669979!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x93f94e7422d0f36d%3A0xe1cd4f1bd9b7e37!2sFederaci%C3%B3n+de+Empresarios+Privados+de+Potos%C3%AD!5e0!3m2!1ses-419!2sbo!4v1538018386096" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	      </div>
	    </div>
	  </div>
	</div>
@endsection
