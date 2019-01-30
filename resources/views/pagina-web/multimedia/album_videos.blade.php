@extends('pagina-web.layouts.layout')

@section('title', '| Album de fotos')

@section('banner')
	<section class="xs-banner-inner-section parallax-window" style="background-image:url(/{{$foto}})">
		<div class="xs-black-overlay"></div>
		<div class="container">
			<div class="color-white xs-inner-banner-content">
				<h2>{{$titulo}}</h2>
				<p>{{$contenido}}</p>
				<div class="xs-btn-wraper">
					<a href="{{ URL::route('multimedia') }}#contenido" class="btn btn-outline-primary"><i class="fa fa-reply"> │ </i>
						MULTIMEDIA
					</a>
				</div>
			</div>
		</div>
	</section>
@endsection

@section('album_seccion')
	
	<!-- Album section -->
	<div class="xs-content-section-padding" id="contenido">
		<div class="container">
			<div class="row text-center text-lg-left">
				@foreach($albums as $album)
					<div class="col-lg-3 col-md-4 col-xs-6">
						<div class="zoom-in">
							<a href="{{URL::route('video',['id' => $album->id])}}" class="d-block">
								<div class="img-fluid img-thumbnail" style="background-image:url(/{{$album->cover}})"></div>
							</a>
							<div class="titulo-album text-center">
								<p>{{$album->nombre}}</p>
							</div>						
						</div>						
					</div>
				@endforeach
			</div>
		</div>
	</div><!-- End Album section -->
@endsection