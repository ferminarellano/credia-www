@extends('layouts.layout')

@section('title', 'Patrocina -')

@section('welcomedonacion')
	<section class="xs-banner-inner-section parallax-window" style="background-image:url('assets/images/backgrounds/about_bg.jpg')">
	<div class="xs-black-overlay"></div>
	<div class="container">
		<div class="color-white xs-inner-banner-content">
			<h2>Conviertete en patrocinador</h2>
			<p>Engrandece tu empresa, apoyando nuestras actividades</p>
			<!-- <ul class="xs-breadcumb"> -->
				<!-- <li class="badge badge-pill badge-primary"><a href="{{ URL::route('index') }}" class="color-white"> Inicio /</a> Donación</li> -->
			<!-- </ul> -->
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
					<h2 class="xs-title">Otras actividades</h2>
					<p>Excursiones, charlas, foros, senderismo y demás atracciones que te ofrecemos para planificar y aprovechar al máximo tu tiempo y enriquecer el aprendizaje.</p>
					<span class="xs-separetor v3"></span>
				</div>
			</div><!-- .row end -->
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="xs-single-children">
						<img src="assets/images/childrens/baby_1.jpg" alt="">
						<div class="xs-children-details">
							<a href="#">Julian Dow</a>
							<h4>New York, USA</h4>
						</div><!-- .xs-children-details END -->
					</div><!-- .xs-single-children END -->
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="xs-single-children">
						<img src="assets/images/childrens/baby_2.jpg" alt="">
						<div class="xs-children-details">
							<a href="#">Anjelina</a>
							<h4>Buljistan, UK</h4>
						</div><!-- .xs-children-details END -->
					</div><!-- .xs-single-children END -->
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="xs-single-children">
						<img src="assets/images/childrens/baby_3.jpg" alt="">
						<div class="xs-children-details">
							<a href="#">Pilaro Mikao</a>
							<h4>Frakina, Uganda</h4>
						</div><!-- .xs-children-details END -->
					</div><!-- .xs-single-children END -->
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="xs-single-children">
						<img src="assets/images/childrens/baby_4.jpg" alt="">
						<div class="xs-children-details">
							<a href="#">Jhon Hestings</a>
							<h4>Bull Land, Iceland</h4>
						</div><!-- .xs-children-details END -->
					</div><!-- .xs-single-children END -->
				</div>
			</div>
			<div class="xs-height-separetor"></div>
			<div class="row">
				<div class="col-md-6 col-lg-3">
					<div class="xs-single-children">
						<img src="assets/images/childrens/baby_5.jpg" alt="">
						<div class="xs-children-details">
							<a href="#">Midado</a>
							<h4>Zooka, France</h4>
						</div><!-- .xs-children-details END -->
					</div><!-- .xs-single-children END -->
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="xs-single-children">
						<img src="assets/images/childrens/baby_6.jpg" alt="">
						<div class="xs-children-details">
							<a href="#">Anjella</a>
							<h4>Linda, Brazil</h4>
						</div><!-- .xs-children-details END -->
					</div><!-- .xs-single-children END -->
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="xs-single-children">
						<img src="assets/images/childrens/baby_7.jpg" alt="">
						<div class="xs-children-details">
							<a href="#">Pirlo Kemin</a>
							<h4>Lora ken, USA</h4>
						</div><!-- .xs-children-details END -->
					</div><!-- .xs-single-children END -->
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="xs-single-children">
						<img src="assets/images/childrens/baby_8.jpg" alt="">
						<div class="xs-children-details">
							<a href="#">Jhuman Li</a>
							<h4>Pranklin, UK</h4>
						</div><!-- .xs-children-details END -->
					</div><!-- .xs-single-children END -->
				</div>
			</div>
			</div><!-- .row end -->
		</div><!-- .container end -->
	</section>	<!-- End box promo section -->
@endsection