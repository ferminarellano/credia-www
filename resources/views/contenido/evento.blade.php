@extends('layouts.layout')

<?php

	function diccionario($palabra)
	{	
		$arr = array();
		
		$arr["01"] = "Ene";
		$arr["02"] = "Feb";
		$arr["03"] = "Mar";
		$arr["04"] = "Abr";
		$arr["05"] = "May";
		$arr["06"] = "Jun";
		$arr["07"] = "Jul";
		$arr["08"] = "Ago";
		$arr["09"] = "Sep";
		$arr["10"] = "Oct";
		$arr["11"] = "Nov";
		$arr["12"] = "Dic";
		
		return $arr[$palabra];
	}
?>

@section('title', 'Eventos -')

@section('welcomeevento')
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

@section('eventosection')
	<!-- video popup section section -->
	<section class="xs-content-section-padding">
		<div class="container">
			<div class="row">
				@if(count($eventos) === 0)
					<div class="col-lg-12">
						<h1 class="resp">NO HAY PUBLICACIONES DISPONIBLES<h1>
					</div>
				@endif
				@foreach($eventos as $evento)
					<div class="col-lg-6 row xs-single-event event-blue">
						<div class="col-md-5">
							<div class="xs-event-image">
								<img src="/assets/images/event/event_1.jpg" alt="">
								<div class="xs-entry-date">
									<span class="entry-date-day">{{ date('d', strtotime($evento->fecha)) }}</span>
									<span class="entry-date-month">{{ diccionario(date('m', strtotime($evento->fecha))) }}</span>
								</div>
								<div class="xs-black-overlay"></div>
							</div><!-- .xs-event-image END -->
						</div>
						<div class="col-md-7">
							<div class="xs-event-content-event">
								<a href="{{ URL::route('eventodetalle',['slug' => str_slug($evento->titulo,'-'),'id' => $evento->id]) }}">{{ $evento->titulo }}</a>
								<p>{{ $evento->subtitulo }}</p>
								<div class="xs-countdown-timer" data-countdown="{{ date('Y-m-d', strtotime($evento->fecha)) }}"></div>
								<a href="{{ URL::route('eventodetalle',['slug' => str_slug($evento->titulo,'-'),'id' => $evento->id]) }}" class="btn btn-primary">
									Aprende más
								</a>
							</div><!-- .xs-event-content END -->
						</div>
					</div><!-- .xs-single-event END -->
				@endforeach
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
@endsection