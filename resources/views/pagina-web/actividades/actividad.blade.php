@extends('pagina-web.layouts.layout')

@section('title', '| Actividades')

@section('banner')
	<section class="xs-banner-inner-section parallax-window" style="background-image:url(/{{ $foto }})">
	<div class="xs-black-overlay"></div>
	<div class="container">
		<div class="color-white xs-inner-banner-content">
			<h2>{{ $titulo }}</h2>
			<p>{{ $contenido }}</p>
		</div>
	</div>
</section>
@endsection

@section('actividades_seccion')
	<!-- box promo section -->
	<section class="xs-what-we-do-box" style="background-color:#F9F9F9;">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-3">
					<div class="xs-service-promo-p box-color bg-light-c-green">
						<span class="xs-service-promo-p" style="background: url('assets/images/actividades/jardin_w.png') no-repeat; background-position: bottom;"></span>
						<h5>Jardín botánico<br><small>Sendero Gerardo Rodríguez</small></h5>
						<!-- <p> -->
							<!-- Recorrido interpretado por un guía especializado en el Jardín del CREDIA. -->
						<!-- </p> -->
					</div><!-- .xs-service-promo END -->
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="xs-service-promo-p box-color bg-light-c-green">
						<span class="xs-service-promo-p" style="background: url('assets/images/actividades/pasaporte_w.png') no-repeat;"></span>
						<h5>Pasaporte Verde<br><small>Corredor Biológico</small></h5>
						<!-- <p> -->
							<!-- Mediante esta herramienta se invita a recorrer las 10 áreas protegidas del CBCH. -->
						<!-- </p> -->
					</div><!-- .xs-service-promo END -->
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="xs-service-promo-p box-color bg-light-c-green">
						<span class="xs-service-promo-p" style="background: url('assets/images/actividades/foresteria_w.png') no-repeat; background-position: bottom;"></span>
						<h5>Forestería comunitaria<br><small>Cambio Climático</small></h5>
						<!-- <p> -->
							<!-- Concientización de métodos para mitigar los efectos del cambio climático. -->
						<!-- </p> -->
					</div><!-- .xs-service-promo END -->
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="xs-service-promo-p box-color bg-light-c-green">
						<span class="xs-service-promo-p" style="background: url('assets/images/actividades/videos_w.png') no-repeat; background-position: bottom;"></span>
						<h5>Videos sobre el ambiente<br><small>Proyecciones en 3D</small></h5>
						<!-- <p> -->
							<!-- Enriqueciendo la experiencia de la visita en temas de importancia. -->
						<!-- </p> -->
					</div><!-- .xs-service-promo END -->
				</div>
			</div><!-- .row end -->
		</div><!-- .container end -->
	</section>	<!-- End box promo section -->

	<!-- box promo section -->
	<section class="xs-children-section" style="background-color:#F9F9F9;">
		<div class="container">
			<div class="xs-heading row xs-mb-60">
				<div class="col-md-6 mx-auto text-center">
					<h2 class="xs-title" style="text-align:center;">Otras actividades</h2>
					<p>Charlas, foros, senderismo y demás atracciones que te ofrecemos para planificar y aprovechar al máximo tu tiempo y enriquecer el aprendizaje.</p>
					<span class="xs-separetor v3"></span>
				</div>
			</div><!-- .row end -->
		</div><!-- .container end -->
	</section>	<!-- End box promo section -->

	<!-- service promo section -->
	@if(count($actividades) > 0)
		<section class="xs-content-section-padding xs-service-promo-section" style="background-color:#FFFFFF;">
			<div class="container">
				<div class="row">
					@foreach($actividades as $actividad)
						<div class="col-lg-6 col-md-6" style="margin-bottom:30px;">
							<div class="media xs-single-media xs-service-promo-p">
								<!-- <span class="icon-donation_2 d-flex color-light-red"></span> -->
								<span class="xs-service-promo-p" style="background: url({{ $actividad->foto }}) no-repeat;"></span>
								<div class="media-body">
									<h5 style="text-align:center;">{{ $actividad->titulo }}</h5>
									<p style="text-align:justify;">{{ $actividad->descripcion }}</p>
									<a href="{{URL::route('actividadetalle',['slug' => str_slug($actividad->titulo,'-'),'id' => $actividad->id])}}"><i class="fa fa-play"></i> Saber más</a>
								</div>
							</div><!-- .xs-single-media END -->
						</div>
					@endforeach
				</div><!-- .row end -->
			</div><!-- .container end -->
		</section>	<!-- end service promo section -->
	@endif
@endsection