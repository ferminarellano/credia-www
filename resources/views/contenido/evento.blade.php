@extends('layouts.layout')

@section('title', 'Eventos -')

@section('welcomeevento')
	<section class="xs-banner-inner-section parallax-window" style="background-image:url('assets/images/backgrounds/event_bg.jpg')">
		<div class="xs-black-overlay"></div>
		<div class="container">
			<div class="color-white xs-inner-banner-content">
				<h2>Eventos</h2>
				<!-- <p>Give a helping hand for poor people</p> -->
				<!-- <ul class="xs-breadcumb"> -->
					<!-- <li class="badge badge-pill badge-primary"><a href="{{ URL::route('index') }}" class="color-white"> Inicio /</a> Eventos</li> -->
				<!-- </ul> -->
			</div>
		</div>
	</section>
@endsection

@section('eventosection')
	<main class="xs-main">
		<!-- video popup section section -->
	<section class="xs-content-section-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 row xs-single-event event-green">
					<div class="col-md-5">
						<div class="xs-event-image">
							<img src="assets/images/event/event_1.jpg" alt="">
							<div class="xs-entry-date">
								<span class="entry-date-day">24</span>
								<span class="entry-date-month">Nov</span>
							</div>
							<div class="xs-black-overlay"></div>
						</div><!-- .xs-event-image END -->
					</div>
					<div class="col-md-7">
						<div class="xs-event-content">
							<a href="{{ URL::route('eventodetalle') }}">Seminario</a>
							<p style="text-align:justify;">El cambio climático es uno de los grandes desafíos del siglo XXI.</p>
							<div class="xs-countdown-timer" data-countdown="2018/11/24"></div>
							<a href="{{ URL::route('eventodetalle') }}" class="btn btn-primary">
								Aprende más
							</a>
						</div><!-- .xs-event-content END -->
					</div>
				</div><!-- .xs-single-event END -->
				<div class="col-lg-6 row xs-single-event event-purple">
					<div class="col-md-5">
						<div class="xs-event-image">
							<img src="assets/images/event/event_2.jpg" alt="">
							<div class="xs-entry-date">
								<span class="entry-date-day">15</span>
								<span class="entry-date-month">aug</span>
							</div>
							<div class="xs-black-overlay"></div>
						</div><!-- .xs-event-image END -->
					</div>
					<div class="col-md-7">
						<div class="xs-event-content">
							<a href="#">Arsenal, the intelligent.</a>
							<p>In a time of overwhelming emotions, sadness, and pain, obligations.</p>
							<div class="xs-countdown-timer" data-countdown="2020/08/24"></div>
							<a href="#" class="btn btn-primary">
								Learn More
							</a>
						</div><!-- .xs-event-content END -->
					</div>
				</div><!-- .xs-single-event END -->
				<div class="col-lg-6 row xs-single-event event-red">
					<div class="col-md-5">
						<div class="xs-event-image">
							<img src="assets/images/event/event_3.jpg" alt="">
							<div class="xs-entry-date">
								<span class="entry-date-day">24</span>
								<span class="entry-date-month">jan</span>
							</div>
							<div class="xs-black-overlay"></div>
						</div><!-- .xs-event-image END -->
					</div>
					<div class="col-md-7">
						<div class="xs-event-content">
							<a href="#">Waterproof drone that</a>
							<p>In a time of overwhelming emotions, sadness, and pain, obligations.</p>
							<div class="xs-countdown-timer" data-countdown="2019/05/24"></div>
							<a href="#" class="btn btn-primary">
								Learn More
							</a>
						</div><!-- .xs-event-content END -->
					</div>
				</div><!-- .xs-single-event END -->
				<div class="col-lg-6 row xs-single-event event-blue">
					<div class="col-md-5">
						<div class="xs-event-image">
							<img src="assets/images/event/event_4.jpg" alt="">
							<div class="xs-entry-date">
								<span class="entry-date-day">23</span>
								<span class="entry-date-month">jun</span>
							</div>
							<div class="xs-black-overlay"></div>
						</div><!-- .xs-event-image END -->
					</div>
					<div class="col-md-7">
						<div class="xs-event-content">
							<a href="">Braille Literacy Tool for.</a>
							<p>In a time of overwhelming emotions, sadness, and pain, obligations.</p>
							<div class="xs-countdown-timer" data-countdown="2020/02/24"></div>
							<a href="#" class="btn btn-primary">
								Learn More
							</a>
						</div><!-- .xs-event-content END -->
					</div>
				</div><!-- .xs-single-event END -->
			</div><!-- .row end -->
		</div><!-- .container end -->
	</section>	<!-- End video popup section section -->

		<!-- partners section -->
		<section class="bg-gray xs-partner-section" style="background-image: url('assets/images/map.png');">
			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<div class="xs-partner-content">
							<div class="xs-heading xs-mb-40">
								<h2 class="xs-mb-0 xs-title">La fundación <span>CREDIA </span>está conformada por destacadas instituciones públicas y civiles</h2>
							</div>
							<p>
								Creada el 31 de octubre de 2011, bajo el objetivo de fortalecer el acceso a la información socio ambiental de Honduras, mediante la 
								implementación de un módelo de gestión basado en el fortalecimiento de redes y promoción del análisis estratégico de los procesos 
								sociales, económicas y ambientales, para la toma de decisiones participativas.
							</p>
							<!-- <a href="#" class="btn btn-primary"> -->
								<!-- join us now -->
							<!-- </a> -->
						</div>
					</div>
					<div class="col-md-7">
						<ul class="fundpress-partners">
							<li><a href="#"><img src="assets/images/partner/client_1.png" style="width: 90%;" alt=""></a></li>
							<li><a href="#"><img src="assets/images/partner/client_2.png" style="width: 90%;" alt=""></a></li>
							<li><a href="#"><img src="assets/images/partner/client_3.png" style="width: 90%;" alt=""></a></li>
							<li><a href="#"><img src="assets/images/partner/client_4.png" style="width: 90%;" alt=""></a></li>
							<li><a href="#"><img src="assets/images/partner/client_5.png" style="width: 90%;" alt=""></a></li>
							<li><a href="#"><img src="assets/images/partner/client_6.png" style="width: 90%; padding-right:0px;" alt=""></a></li>
						</ul>
					</div>
				</div><!-- .row end -->
			</div><!-- .container end -->
		</section>	<!-- End partners section -->
	</main>
@endsection