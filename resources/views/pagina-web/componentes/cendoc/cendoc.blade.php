@extends('pagina-web.layouts.layout')

@section('title', '| CENDOC')

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

@section('organigrama_eo')
	<!-- Antecedentes section -->
	<section class="xs-section-padding bg-gray-2">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="xs-causes-images" style="margin-top:35px;">
						<img src="assets/images/causes/causes_11.jpg" class="d-block" alt="">
					</div><!-- .xs-causes-images END -->
				</div>
				<div class="col-lg-8">
					<div class="xs-fature-causes-deatils">
						<h3> Nuestra <span class="color-green">fundación</span></h3>
						<p>
							Creada el 31 de Octubre 2011, bajo el objetivo de fortalecer el acceso a la información socio ambiental de Honduras, 
							mediante la implementación de un modelo de gestión basado en el fortalecimiento de redes y promoción del análisis
							estratégico de los procesos sociales, económicos y ambientales, para la toma de decisiones participativas.
						</p>
						<h5><span class="color-green">Componentes</span></h5>
						<ul class="xs-unorder-list">
							<li><i class="fa fa-circle color-light-green"></i>Adaptación, Agua, Bosques y Suelos.</li>
							<li><i class="fa fa-circle color-light-green"></i>Cambio Climatico y Gestión Integral de Riesgos.</li>
							<li><i class="fa fa-circle color-light-green"></i>Interpretación y Educación Ambiental.</li>
							<li><i class="fa fa-circle color-light-green"></i>Observatorio de Desarrollo Sostenible (ODS).</li>
						</ul>
					</div>
				</div>
			</div><!-- .row end -->
		</div><!-- .container end -->
	</section>	<!-- Antecedentes section -->
	
	<!-- actividades section -->
	{{--@if(count($actividades) > 0)--}}
		<section class="xs-content-section-padding xs-service-promo-section" style="background-color:#FFFFFF;">
			<div class="container">
				<div class="row">
				{{--@foreach($actividades as $actividad)--}}
						<div class="col-lg-6 col-md-6" style="margin-bottom:30px;">
							<div class="media xs-single-media xs-service-promo-p">
								<!-- <span class="icon-donation_2 d-flex color-light-red"></span> -->
								{{--<span class="xs-service-promo-p" style="background: url({{ $actividad->foto }}) no-repeat;"></span>
								<div class="media-body">
									<h5 style="text-align:center;">{{ $actividad->titulo }}</h5>
									<p style="text-align:justify;">{{ $actividad->descripcion }}</p>
									<a href="{{URL::route('actividadetalle',['slug' => str_slug($actividad->titulo,'-'),'id' => $actividad->id])}}"><i class="fa fa-play"></i> Saber más</a>
								</div>--}}
							</div><!-- .xs-single-media END -->
						</div>
						{{--@endforeach--}}
				</div><!-- .row end -->
			</div><!-- .container end -->
		</section>	<!-- end service promo section -->
		{{--@endif--}}
@endsection