@extends('layoutFeipobol')
@section('formularios')
<div id="Videos">
  <div class="container">
    <h2 class="h1-responsive font-weight-bold text-center ">GALERIA DE VIDEOS <hr>   </h2>
    <div class="row">
      <div class="col-md-9 wow slideInLeft" data-wow-delay="0.2s" id="principal">
        <iframe  src="https://www.youtube.com/embed/x4K6mLncJuc" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
      </div>
      <div class="col-md-3" id="secundario">
          <a href="#principal" id="video1" >
            <div class="wow slideInRight" data-wow-delay="0.2s">
              <img src="{{ asset('img/blog1.jpg')}}" alt="">
              <i class="fa fa-play" aria-hidden="true"></i>

            </div>
          </a>
          <a href="#principal" id="video2">
            <div class="wow slideInRight" data-wow-delay="0.2s">
              <img src="{{ asset('img/blog2.jpg')}}" alt="">
              <i class="fa fa-play" aria-hidden="true"></i>

            </div>
          </a>
          <a href="#principal" id="video3">
            <div class="wow slideInRight" data-wow-delay="0.2s">
              <img src="{{ asset('img/blog3.jpg')}}" alt="">
              <i class="fa fa-play" aria-hidden="true"></i>

            </div>
          </a>


      </div>
    </div>
  </div>
</div>
@endsection
