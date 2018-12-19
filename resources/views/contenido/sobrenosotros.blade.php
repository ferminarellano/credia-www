@extends('layouts.layout')

@section('title', 'conocenos -')

@section('welcomesn')
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

@section('video_sn')
	<!-- video popup section section -->
	<div class="xs-video-popup-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 content-center">
					<div class="xs-video-popup-wraper">
						<img src="assets/images/video_img.jpg" alt="">
						<div class="xs-video-popup-content">
							<a href="#" class="xs-video-popup xs-round-btn">
								<i class="fa fa-play"></i>
							</a>
						</div><!-- .xs-video-popup-content end -->
					</div><!-- .xs-video-popup-wraper end -->
				</div>
			</div><!-- .row end -->
		</div><!-- .container end -->
	</div>	<!-- End video popup section section -->
@endsection

@section('contenido_video_sn')
	<!-- video popup section section -->
	<section class="xs-content-section-padding-conocenos">
		<div class="container">
			<div class="row">
				<div class="col-lg-11 content-center">
					<div class="xs-heading xs-mb-100 text-center">
						<h2 class="xs-mb-0 xs-title" style="text-align:center;">Somos una organización sin fines de lucro <span class="color-green">apoyamos</span> buenas causas y cambios positivos para la población de Honduras.</h2>
					</div>
				</div>
			</div><!-- .row end -->
			<div class="row">
				<div class="col-md-6">
					<div class="xs-about-feature">
						<h3>Nuestra Misión</h3>
						<p align="justify" class="lead">Promover el desarrollo sostenible mediante la gestión del conocimiento, facilitando la toma de decisiones 
						para la planificación ordenada del territorio, impulsando la educación ambiental, el turismo sostenible, las áreas protegidas, 
						la cultura y la recreación en el Corredor Biológico del Caribe Hondureño.</p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="xs-about-feature">
						<h3>Nuestra Visión</h3>
						<p align="justify" class="lead">Ser un centro innovador de documentación e interpretación ambiental y punto de encuentro 
						con la naturaleza que promueve la gestión del conocimiento del Corredor Biológico del Caribe Hondureño, 
						facilitando la toma de decisiones en el territorio, reconocida nacional e internacionalmente..</p>
					</div>
				</div>
			</div><!-- .row end -->
		</div><!-- .container end -->
	</section>	<!-- End video popup section section -->
@endsection

@section('widget_sn')
	<!-- funfacts section -->
	<div class="xs-funfact-section waypoint-tigger parallax-window" style="background-color:#011b58;">
		<div class="triangle"></div>
		<div class="container waypoint-padding">
			<div class="row col-lg-10 xs-heading mx-auto">
				<h2 align="center" class="xs-title color-white small">Nuestra fundación ha estado presente por más de 7 años. Hacemos lo mejor para todos.</h2>
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="xs-single-funFact color-white">
						<i class="icon-donation_2"></i>
						<span class="number-percentage-count number-percentage" data-value="10" data-animation-duration="3500">100</span><span></span>
						<small>Proyectos</small>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="xs-single-funFact color-white">
						<i class="icon-group"></i>
						<span class="number-percentage-count number-percentage" data-value="25" data-animation-duration="3500">100</span><span></span>
						<small>Voluntarios</small>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="xs-single-funFact color-white">
						<i class="icon-children"></i>
						<span class="number-percentage-count number-percentage" data-value="10000" data-animation-duration="3500">100</span><span></span>
						<small>Niños</small>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="xs-single-funFact color-white">
						<i class="icon-planet-earth"></i>
						<span class="number-percentage-count number-percentage" data-value="8" data-animation-duration="3500">8</span><span></span>
						<small>Municipios</small>
					</div>
				</div>
			</div><!-- .row end -->
		</div><!-- .container end -->
	</div>	<!-- End funfacts section -->
	<div class="triangle-2"></div>
@endsection

@section('quehacemos_sn')
	<!-- what we do section -->
	<section class="xs-section-padding">
		<div class="container" align="justify">
			<!-- .xs-heading row -->
			<div class="xs-heading row xs-mb-60"> 
				<div class="col-md-9 col-xl-9">
					<h2 class="xs-title" style="color:#a6ce39;">¿Qué hacemos?</h2>
					<hr style="width:220px;float:left;margin-bottom:20px;margin-top:10px;">
				</div>
				<div class="xs-heading xs-mb-70 text-center">
					<h2 class="xs-mb-0 xs-title">Nuestras actividades y servicios de educación ambiental han beneficiado a más de <span>10,000 niños y niñas</span> de La Ceiba y comunidades vecinas del CBCH. </h2>
				</div>
			</div><!-- .xs-heading row END -->
			
			<div class="row">
				<div class="col-md-6 col-lg-3">
					<div class="xs-service-promo">
						<span class="xs-service-promo" style="background: url('assets/images/actividades/jardin.png') no-repeat; background-position: bottom;"></span>
						<h5>Jardín botánico y Sendero<br> Gerardo Rodríguez</h5>
						<p>Ofrece un recorrido interpretado por un guía especializado que ofrece conocimiento acerca de las diversas especies de flora, aves, pequeños mamíferos y anfibios de diversas clases que habitan el Jardín del CREDIA.</p>
					</div><!-- .xs-service-promo END -->
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="xs-service-promo">
						<span class="xs-service-promo" style="background: url('assets/images/actividades/pasaporte.png') no-repeat;"></span>
						<h5>Pasaporte Verde del<br>Corredor Biológico</h5>
						<p>Mediante esta herramienta se invita a recorrer las 10 áreas protegidas del CBCH, al tiempo que se adquieren conocimientos que son certificados mediante los diferentes sellos que acreditan las visitas a las áreas.</p>
					</div><!-- .xs-service-promo END -->
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="xs-service-promo">
						<span class="xs-service-promo" style="background: url('assets/images/actividades/foresteria.png') no-repeat; background-position: bottom;"></span>
						<h5>Forestería comunitaria y<br>Cambio Climático</h5>
						<p>Mediante la realización de charlas, y visitas a la parcela demostrativa dentro del Jardín Botánico se concientiza acerca de la implementación de métodos amigables para mitigar los efectos del cambio climático.</p>
					</div><!-- .xs-service-promo END -->
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="xs-service-promo">
						<span class="xs-service-promo" style="background: url('assets/images/actividades/videos.png') no-repeat; background-position: bottom;"></span>
						<h5>Videos sobre el ambiente<br>y proyecciones en 3D</h5>
						<p>La sala de proyecciones audiovisuales enriquese la experiencia de la visita con la presentación de videos, e imagenes 3D basados en temas de importancia para la conservación del ambiete.</p>
					</div><!-- .xs-service-promo END -->
				</div>
			</div><!-- .row end -->
		</div><!-- .container end -->
	</section>	<!-- End what we do section -->
@endsection

@section('equipo_sn')
	@if(count($empleados) > 0)
		<!-- equipo section -->
		<section class="xs-section-padding bg-gray">
			<div class="container">
				<div class="xs-heading row xs-mb-60">
					<div class="col-md-12 col-xl-12">
						<h2 class="xs-title" style="color:#a6ce39;">Nuestro equipo</h2>
						<!-- <span class="xs-separetor dashed"></span> -->
						<p style="color:#011b58;text-align:justify;">Nuestra fundación esta compuesta por el personal adecuado, los mejores profesionales en su labor, unete se parte de esta gran familia.</p>
					</div><!-- .xs-heading-title END -->
				</div><!-- .row end -->
				<div class="row xs-mb-60">
					@foreach($empleados as $empleado)
						<div class="col-md-6 col-lg-3">
							<div class="xs-single-team">
								<img src="{{ $empleado->foto }}" alt="">
								<div class="xs-team-content">
									<h4>{{ $empleado->nombre }}</h4>
									<small>{{ $empleado->cargo }}</small>
									<svg class="xs-svgs" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 270 138">
										<path class="fill-green" d="M375,3294H645v128a10,10,0,0,1-10,10l-250-20a10,10,0,0,1-10-10V3294Z" transform="translate(-375 -3294)"/>
									</svg>
								</div><!-- .xs-team-content END -->
							</div><!-- .xs-single-team END -->
						</div>
					@endforeach
				</div><!-- .row END -->
				<div class="text-center">
					<a href="{{ URL::route('equipo') }}" class="btn btn-success">
						Ver más
					</a>
				</div>
			</div><!-- .container end -->
		</section>	<!-- End team section -->
	@endif
@endsection
