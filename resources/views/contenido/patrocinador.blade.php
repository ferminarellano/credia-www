@extends('layouts.layout')

@section('title', 'Actividades -')

@section('welcomedonacion')
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

@section('promo')
	<!-- box promo section -->
	<section class="xs-what-we-do-box">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-3">
					<div class="xs-service-promo-p box-color bg-light-c-green">
						<span class="xs-service-promo-p" style="background: url('assets/images/actividades/jardin_w.png') no-repeat; background-position: bottom;"></span>
						<h5>Jardín botánico<br><small>Sendero Gerardo Rodríguez</small></h5>
						<p>
							Recorrido interpretado por un guía especializado en el Jardín del CREDIA.
						</p>
					</div><!-- .xs-service-promo END -->
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="xs-service-promo-p box-color bg-light-c-green">
						<span class="xs-service-promo-p" style="background: url('assets/images/actividades/pasaporte_w.png') no-repeat;"></span>
						<h5>Pasaporte Verde<br><small>Corredor Biológico</small></h5>
						<p>
							Mediante esta herramienta se invita a recorrer las 10 áreas protegidas del CBCH.
						</p>
					</div><!-- .xs-service-promo END -->
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="xs-service-promo-p box-color bg-light-c-green">
						<span class="xs-service-promo-p" style="background: url('assets/images/actividades/foresteria_w.png') no-repeat; background-position: bottom;"></span>
						<h5>Forestería comunitaria<br><small>Cambio Climático</small></h5>
						<p>
							Concientización de métodos para mitigar los efectos del cambio climático.
						</p>
					</div><!-- .xs-service-promo END -->
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="xs-service-promo-p box-color bg-light-c-green">
						<span class="xs-service-promo-p" style="background: url('assets/images/actividades/videos_w.png') no-repeat; background-position: bottom;"></span>
						<h5>Videos sobre el ambiente<br><small>Proyecciones en 3D</small></h5>
						<p>
							Enriqueciendo la experiencia de la visita en temas de importancia.
						</p>
					</div><!-- .xs-service-promo END -->
				</div>
			</div><!-- .row end -->
		</div><!-- .container end -->
	</section>	<!-- End box promo section -->

	<!-- box promo section -->
	<section class="xs-children-section">
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
	<section class="xs-content-section-padding xs-service-promo-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="media xs-single-media">
						<span class="icon-donation_2 d-flex color-light-red"></span>
						<div class="media-body">
							<h5>Receive Donations</h5>
							<p>Each year 27,000 children in the United diagnosed with a life-threatening illness. children, simple surprises.</p>
							<a href="#"><i class="fa fa-play"></i> Saber más</a>
						</div>
					</div><!-- .xs-single-media END -->
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="media xs-single-media">
						<span class="icon-tap-water d-flex color-purple"></span>
						<div class="media-body">
							<h5>Pure Water Supply</h5>
							<p>Each year 27,000 children in the United diagnosed with a life-threatening illness. children, simple surprises.</p>
							<a href="#"><i class="fa fa-play"></i> Saber más</a>
						</div>
					</div><!-- .xs-single-media END -->
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="media xs-single-media">
						<span class="icon-open-book d-flex color-light-green"></span>
						<div class="media-body">
							<h5>Education For Childrens</h5>
							<p>Each year 27,000 children in the United diagnosed with a life-threatening illness. children, simple surprises.</p>
							<a href="#"><i class="fa fa-play"></i> Saber más</a>
						</div>
					</div><!-- .xs-single-media END -->
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="media xs-single-media">
						<span class="icon-first-aid-kit d-flex color-blue"></span>
						<div class="media-body">
							<h5>Medical Care</h5>
							<p>Each year 27,000 children in the United diagnosed with a life-threatening illness. children, simple surprises.</p>
							<a href="#"><i class="fa fa-play"></i> Saber más</a>
						</div>
					</div><!-- .xs-single-media END -->
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="media xs-single-media">
						<span class="icon-sweater d-flex color-burntOrange"></span>
						<div class="media-body">
							<h5>Cloth Donate</h5>
							<p>Each year 27,000 children in the United diagnosed with a life-threatening illness. children, simple surprises.</p>
							<a href="#"><i class="fa fa-play"></i> Saber más</a>
						</div>
					</div><!-- .xs-single-media END -->
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="media xs-single-media">
						<span class="icon-team_2 d-flex color-riptide"></span>
						<div class="media-body">
							<h5>Adoption</h5>
							<p>Each year 27,000 children in the United diagnosed with a life-threatening illness. children, simple surprises.</p>
							<a href="#"><i class="fa fa-play"></i> Saber más</a>
						</div>
					</div><!-- .xs-single-media END -->
				</div>
			</div><!-- .row end -->
		</div><!-- .container end -->
	</section>	<!-- end service promo section -->
@endsection