@extends('layout')
@section('formularios')
<div id="portfolio" class="section md-padding2 bg-grey">
		<div class="container">
            <div class="row">
                <div class="section-header text-center">
                    <h1 class="title">{{$titulo}}</h1>
                </div>
                <div class="col-sm-3">
					<div class="menu-form2">
                        <a href="">2018</a>
                        <a href="">2017</a>
                        <a href="">2016</a>
                    </div>
				</div>
				<div class="col-sm-9">
                        <embed src="{{ asset('doc/RevistaFinal.pdf') }}" width="100%" height="600px">
				</div>
            </div>
        </div>
</div>
@endsection
