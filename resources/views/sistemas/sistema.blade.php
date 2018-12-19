@extends('layouts.layout')

@section('title', 'Sistemas -')

@section('welcome_ss')
	<section class="xs-banner-inner-section parallax-window" style="background-image:url(/{{$foto}})">
		<div class="xs-black-overlay"></div>
		<div class="container">
			<div class="color-white xs-inner-banner-content">
				<h2>{{$titulo}}</h2>
				<p>{{$contenido}}</p>
			</div>
		</div>
	</section>
@endsection

@section('recuadro_ss')
	<!-- video popup section section -->
	<section class="xs-pricing-section" style="background-color:#F9F9F9;">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6">
					<div class="xs-single-pricing-table">
						<div class="xs-pricing-header" style="background-image:url(assets/images/pricing/pricing_1.jpg);background-repeat: round;height: 250px;">
							<!-- <h2> -->
								<!-- $90<sub>/mo</sub> -->
							<!-- </h2> -->
						</div>
						<div class="xs-pricing-content" style="height:300px;">
							<h2 class="xs-pricing-title">Repositorio Digital</h2>
							<!-- <ul class="xs-list"> -->
								<!-- <li><i class="fa fa-check"></i>Pediaric Facilities</li> -->
								<!-- <li><i class="fa fa-check"></i>Emergancy Care</li> -->
								<!-- <li class="uncheked"><i class="fa fa-times"></i><del>Educational Facilities</del></li> -->
								<!-- <li class="uncheked"><i class="fa fa-times"></i><del>Vaccines Facilities</del></li> -->
								<!-- <li><i class="fa fa-check"></i>Pure Water Facilites</li> -->
							<!-- </ul> -->
							<a href="#" class="btn btn-primary">
								Ir
							</a>
						</div><!-- .xs-pricing-content END -->
					</div><!-- .xs-single-pricing-table END -->
				</div>
				<div class="col-lg-6 col-md-6">
					<div class="xs-single-pricing-table pricing-red">
						<div class="xs-pricing-header" style="background-image:url(assets/images/pricing/pricing_1.jpg);background-repeat: round;height: 250px;">
							<!-- <h2> -->
								<!-- $189<sub>/mo</sub> -->
							<!-- </h2> -->
						</div>
						<div class="xs-pricing-content" style="height:300px;">
							<h2 class="xs-pricing-title">Sistema de monitoreo multiproposito</h2>
							<!-- <ul class="xs-list"> -->
								<!-- <li><i class="fa fa-check"></i>Pediaric Facilities</li> -->
								<!-- <li><i class="fa fa-check"></i>Emergancy Care</li> -->
								<!-- <li><i class="fa fa-check"></i>Educational Facilities</li> -->
								<!-- <li class="uncheked"><i class="fa fa-times"></i><del>Vaccines Facilities</del></li> -->
								<!-- <li><i class="fa fa-check"></i>Pure Water Facilites</li> -->
							<!-- </ul> -->
							<a href="#" class="btn btn-primary">
								Ir
							</a>
						</div><!-- .xs-pricing-content END -->
					</div><!-- .xs-single-pricing-table .v-red END -->
				</div>
			</div><!-- .row end -->
		</div><!-- .container end -->
	</section>	<!-- End video popup section section -->
@endsection

@section('sistemas_ss')
	
	<div class="section secondary-section">
		<div class="triangle"></div>
		<div class="container centered">
			<p class="large-text">
				El <span>CREDIA</span> cuenta con diferentes sistemas de información que comprenden un conjunto de elementos
				orientados a tratamiento y administración de datos e información, los cuales estan organizados 
				y disponibles para uso público.
			</p>
		</div>
	</div>
	@if(count($sistemas) > 0)
		<div class="triangle-1"></div>
		@foreach($sistemas as $sistema)
			<!-- sistemas section -->
			<section class="xs-section-padding">
				<div class="container">
					<div class="row">
						<div class="col-lg-7">
							<div class="xs-feature-text-content">
								<div class="xs-heading">
									<h2 style="color:#a6ce39;">{{ $sistema->texto_mini }}</h2>
									<h3 class="xs-title" data-title="{{ $sistema->nombre_sistema }}">{{ $sistema->nombre_sistema }}</h3>
									<span class="xs-separetor bg-bondiBlue"></span>
								</div>
								<p style="text-align:justify;">{{ $sistema->descripcion }}</p>
								<a href="#" class="btn btn-primary bg-bondiBlue">Más detalles</a>
								<a href="{{ $sistema->url }}" target="_blank" class="btn btn-primary bg-bondiGreen">Ir</a>
							</div><!-- .xs-feature-text-content END -->
						</div>
						<div class="col-lg-5">
							<div class="xs-feature-image-box image-1">
								<img src="{{ $sistema->foto }}" alt="">
							</div>
						</div>
					</div><!-- .row END -->
				</div><!-- .container END -->
			</section><!-- End feature details section -->
		@endforeach
	@endif
@endsection
