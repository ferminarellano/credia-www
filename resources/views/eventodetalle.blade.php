@extends('layouts.layout')

@section('title', 'Evento detalles -')

@section('welcomeedetalle')
	<section class="xs-banner-inner-section parallax-window" style="background-image:url('assets/images/backgrounds/event_bg.jpg')">
		<div class="xs-black-overlay"></div>
		<div class="container">
			<div class="color-white xs-inner-banner-content">
				<h2>Evento</h2>
				<p>Seminario sobre Cambio climático</p>
				<!-- <ul class="xs-breadcumb"> -->
					<!-- <li class="badge badge-pill badge-primary"><a href="{{ URL::route('index') }}" class="color-white"> Inicio /</a> Evento</li> -->
				<!-- </ul> -->
			</div>
		</div>
	</section>
@endsection

@section('eventodetalle')
	<main class="xs-main">
		<!-- event single section -->
	<section class="xs-content-section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="xs-event-banner">
						<img src="assets/images/event/event-banner.jpg" alt="">
					</div>
					<div class="row">
						<div class="col-lg-8 xs-event-wraper">
							<div class="xs-event-content">
								<h4>Detalle de evento</h4>
								<p style="text-align:justify;">Existe un gran desconocimiento de lo que es el cambio climático en realidad, bien por exceso de información, inexactitud en las fuentes o por desinformación interesada, lo que da origen a una serie de falsos mitos sobre el cambio climático. En este espacio abordaremos desde un punto de vista objetivo y científico qué es el cambio climático, cuáles son sus causas, sus consecuencias y cómo se puede combatir. En definitiva, cómo nos afecta el cambio climático.</p>
							</div>
							<!-- horizontal tab -->
							<div class="xs-horizontal-tabs">
		<!-- Nav tabs -->
		<ul class="nav nav-tabs" role="tablist">
			<li class="nav-item">
				<a class="nav-link active" data-toggle="tab" href="#facilities" role="tab">Instalaciones</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#mapLocation" role="tab">Ubicación</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#contactUs" role="tab">Contáctenos</a>
			</li>
		</ul><!-- .nav-tabs END -->

		<!-- Tab panes -->
		<div class="tab-content">
			<div class="tab-pane fade show active" id="facilities" role="tabpanel">
				<p style="text-align:justify;">Antes de profundizar en el detalle de sus causas y consecuencias, te vamos a contar por qué no te importa el cambio climático, ven y obten tan preciada información que sera de beneficio para ti y tus futuras generaciones.</p>
				<div class="row">
					<div class="col-md-6">
						<ul class="xs-unorder-list circle green-icon">
							<li>Causas</li>
							<li>Consecuencias</li>
							<li>¿Qué es el calentamiento global?</li>
						</ul>
					</div>
					<div class="col-md-6">
						<ul class="xs-unorder-list circle green-icon">
							<li>Como poder combatir el cambio climático. </li>
							<li>¿Por qué no te importa el cambio climático?</li>
						</ul>
					</div>
				</div>
			</div><!-- #facilities END -->
			
			<div class="tab-pane" id="mapLocation" role="tabpanel">
				<div id="xs-map"></div>
			</div><!-- #mapLocation END -->
			
			<div class="tab-pane" id="contactUs" role="tabpanel">
				<div class="xs-contact-form-wraper">
					<form action="#" method="POST" id="xs-contact-form" class="xs-contact-form">
						<div class="input-group">
							<input type="text" name="name" id="xs-name" class="form-control" placeholder="Introduzca su nombre.....">
							<div class="input-group-append">
								<div class="input-group-text"><i class="fa fa-user"></i></div>
							</div>
						</div><!-- .input-group END -->
						<div class="input-group">
							<input type="email" name="email" id="xs-email" class="form-control" placeholder="Introduzca su correo electrónico.....">
							<div class="input-group-append">
								<div class="input-group-text"><i class="fa fa-envelope-o"></i></div>
							</div>
						</div><!-- .input-group END -->
						<div class="input-group massage-group">
							<textarea name="massage" placeholder="Introduzca su mensaje....." id="xs-massage" class="form-control" cols="30" rows="10"></textarea>
							<div class="input-group-append">
								<div class="input-group-text"><i class="fa fa-pencil"></i></div>
							</div>
						</div><!-- .input-group END -->
						<button class="btn btn-success" type="submit" id="xs-submit">submit</button>
					</form><!-- .xs-contact-form #xs-contact-form END -->
				</div>
			</div><!-- #contactUs END -->
		</div>
	</div>						
							<!-- End horizontal tab -->
							<div class="row xs-mb-60">
								<div class="col-md-6 xs-about-feature">
									<h3>Event Mission</h3>
									<p>663 million people drink dirty water. Learn how it access to clean water can improve health, boost local econom mies. Lorem ipsum dolor sit amet. consectetur adipisicing elit.</p>
								</div>
								<div class="col-md-6 xs-about-feature">
									<h3>Event Vission</h3>
									<p>663 million people drink dirty water. Learn how it access to clean water can improve health, boost local econom mies. Lorem ipsum dolor sit amet. consectetur adipisicing elit.</p>
								</div>
							</div>
							<div class="xs-about-feature xs-mb-30">
								<h3>Our Vission</h3>
								<p class="lead">The Globian Fund for Charities seeks positive change around the world through support of non-profit organizations dedicated to social, cultural.</p>
							</div>
							<!-- <div class="row"> -->
								<!-- <div class="col-md-4"> -->
									<!-- <div class="xs-service-promo"> -->
										<!-- <span class="icon-water color-orange"></span> -->
										<!-- <h5>Pure Water <br>For Poor People</h5> -->
									<!-- </div> -->
								<!-- </div> -->
								<!-- <div class="col-md-4"> -->
									<!-- <div class="xs-service-promo"> -->
										<!-- <span class="icon-groceries color-red"></span> -->
										<!-- <h5>Healty Food <br>For Poor People</h5> -->
									<!-- </div> -->
								<!-- </div> -->
								<!-- <div class="col-md-4"> -->
									<!-- <div class="xs-service-promo"> -->
										<!-- <span class="icon-open-book color-green"></span> -->
										<!-- <h5>Pure Education <br>For Every Children</h5> -->
									<!-- </div> -->
								<!-- </div> -->
							<!-- </div> -->
						</div>
						<div class="col-lg-4">
							<!-- horizontal tab -->
							<div class="xs-event-schedule-widget">
		<div class="media xs-event-schedule">
			<div class="d-flex xs-evnet-meta-date">
				<span class="xs-event-date">24</span>
				<span class="xs-event-month">Nov</span>
			</div>
			<div class="media-body">
				<h5 style="text-align:justify;">Evento destinado para el público en general</h5>
			</div>
		</div>
		<ul class="list-group xs-list-group">
			<li class="d-flex justify-content-between">
				Organizado por: 
				<span>Fundación CREDIA</span>
			</li>
			<li class="d-flex justify-content-between">
				Inicio: 
				<span>8:00 am</span>
			</li>
			<li class="d-flex justify-content-between">
				Lugar de encuentro: 
				<span>Salón España, Fundación CREDIA</span>
			</li>
			<li class="d-flex justify-content-between">
				Teléfono:  
				<span>(+504) 2442-2610</span>
			</li>
			<li class="d-flex justify-content-between">
				Correo: &nbsp;
				<span style="font-size:12px;"> &nbsp;administracionyeventos@credia.hn</span>
			</li>
		</ul>
	</div><!-- .xs-event-schedule-widget END -->
	<div class="xs-countdown-timer timer-style-2 xs-mb-30" data-countdown="2020/02/07"></div>
	<div class="xs-event-schedule-widget">
		<h3 class="widget-title">Event Sponsor</h3>
		<ul class="xs-event-sponsor clearfix">
			<li><a href="#"><img src="assets/images/partner/client_5.png" alt=""></a></li>
			<li><a href="#"><img src="assets/images/partner/client_4.png" alt=""></a></li>
			<li><a href="#"><img src="assets/images/partner/client_3.png" alt=""></a></li>
			<li><a href="#"><img src="assets/images/partner/client_1.png" alt=""></a></li>
		</ul>
	</div><!-- .xs-event-schedule-widget END -->						<!-- End horizontal tab -->
						</div>
					</div>
				</div>
			</div><!-- .row end -->
		</div><!-- .container end -->
	</section>	<!-- End event single section -->
	</main>
@endsection