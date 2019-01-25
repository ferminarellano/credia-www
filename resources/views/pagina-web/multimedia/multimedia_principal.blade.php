@extends('pagina-web.layouts.layout')

@section('title', '| Multimedia')

@section('banner')
	<section class="xs-banner-inner-section parallax-window" style="background-image:url({{$foto}})">
		<div class="xs-black-overlay"></div>
		<div class="container">
			<div class="color-white xs-inner-banner-content">
				<h2>{{$titulo}}</h2>
				<p>{{$contenido}}</p>
			</div>
		</div>
	</section>
@endsection

@section('galeria_seccion')
	<!-- Principal Multimedia section -->
	<div class="xs-content-section-padding" id="contenido">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<a href="{{ URL::route('foto') }}">
						<div class="xs-container-div zoom-in" style="background-image: url('/assets/images/multimedia/fotos-img-1.png');"></div>
					</a>
				</div><!-- END .xs-portafolio-fotos-item -->
				<div class="col-lg-6 col-md-12">
					<a href="{{ URL::route('foto') }}">
						<div class="xs-container-div zoom-in" style="background-image: url('/assets/images/multimedia/fotos-img-2.png');"></div>	
					</a>
				</div><!-- END .xs-portafolio-videos-item -->
			</div>
		</div>
	</div><!-- End Principal Multimedia section -->
@endsection