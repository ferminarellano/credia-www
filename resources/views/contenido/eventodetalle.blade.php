@extends('layouts.layout_other')

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

@section('title', 'Evento detalles -')

@section('eventodetalle')
	
	<section class="xs-banner-inner-section-other"></section>
	
	<!-- event single section -->
	<section class="xs-content-section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="xs-event-banner">
						<img src="/{{$evento->first()->foto}}">
					</div>
					<div class="row event-slyle">
						<div class="col-lg-8 xs-event-wraper">
							<div class="xs-event-content">
								<h4>Detalle de evento</h4>
								{!! $evento->first()->contenido !!}
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
							<!-- <div class="row xs-mb-12 margin-event-style"> -->
								<!-- <div class="col-md-6 xs-about-feature"> -->
									<!-- <h3>Event Mission</h3> -->
									<!-- <p>663 million people drink dirty water. Learn how it access to clean water can improve health, boost local econom mies. Lorem ipsum dolor sit amet. consectetur adipisicing elit.</p> -->
								<!-- </div> -->
								<!-- <div class="col-md-6 xs-about-feature"> -->
									<!-- <h3>Event Vission</h3> -->
									<!-- <p>663 million people drink dirty water. Learn how it access to clean water can improve health, boost local econom mies. Lorem ipsum dolor sit amet. consectetur adipisicing elit.</p> -->
								<!-- </div> -->
							<!-- </div> -->
						</div>
						<div class="col-lg-4">
							<!-- horizontal tab -->
							<div class="xs-event-schedule-widget">
								<div class="media xs-event-schedule">
									<div class="d-flex xs-evnet-meta-date">
										<span class="xs-event-date">{{date('d', strtotime($evento->first()->fecha))}}</span>
										<span class="xs-event-month">{{ diccionario(date('m', strtotime($evento->first()->fecha)))}}</span>
									</div>
									<div class="media-body">
										<h5>{{ $evento->first()->subtitulo }}</h5>
									</div>
								</div>
								<ul class="list-group xs-list-group">
									<li class="d-flex justify-content-between">
										Organizado por: 
									</li>
									<li class="d-flex justify-content-between">
										<span>{{ $evento->first()->organizador }}</span>
									</li>
									<li class="d-flex justify-content-between">
										Inicio: 
										<span>{{ date('h:i A', strtotime($evento->first()->horaInicio)) }}</span>
										Final:
										<span>{{ date('h:i A', strtotime($evento->first()->horaFinal)) }}</span>
									</li>
									<li class="d-flex justify-content-between">
										Lugar de encuentro: 
									</li>
									<li class="d-flex justify-content-between">
										<span class="justify">{{ $evento->first()->direccion }}</span>
									</li>
									<li class="d-flex justify-content-between">
										Teléfono/Celular:
										<span>+504 &nbsp;{{ $evento->first()->telefono }}</span>										
									</li>
									<li class="d-flex justify-content-between">
										Correo: 
									</li>
									<li class="d-flex justify-content-between">
										<span>{{ $evento->first()->correo }}</span>
									</li>
								</ul>
							</div><!-- .xs-event-schedule-widget END -->
							
							<div class="xs-countdown-timer timer-style-2 xs-mb-30" data-countdown="{{ date('Y-m-d', strtotime($evento->first()->fecha)) }}"></div>
							
							<div class="xs-event-schedule-widget">
								<h3 class="widget-title">Event Sponsor</h3>
								<ul class="xs-event-sponsor clearfix">
									<li><a href="#"><img src="/assets/images/partner/client_5.png" alt=""></a></li>
									<li><a href="#"><img src="/assets/images/partner/client_4.png" alt=""></a></li>
									<li><a href="#"><img src="/assets/images/partner/client_3.png" alt=""></a></li>
									<li><a href="#"><img src="/assets/images/partner/client_1.png" alt=""></a></li>
								</ul>
							</div><!-- .xs-event-schedule-widget END -->						<!-- End horizontal tab -->
						</div>
					</div>
				</div>
			</div><!-- .row end -->
		</div><!-- .container end -->
	</section>	<!-- End event single section -->
@endsection