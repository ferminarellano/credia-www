@extends('layouts.layout')

@section('title', '')

@section('welcomeindex')
	<section class="xs-welcome-slider">
		<div class="xs-banner-slider owl-carousel">
			
			<div class="xs-welcome-content" style="background-image: url(assets/images/slider/slider_7.jpg);">
				<div class="container">
					<div class="xs-welcome-wraper color-white">
						<h2>CREDIA</h2>
						<p>Centro Regional de documentación e interpretación ambiental</p>
					</div><!-- .xs-welcome-wraper END -->
				</div><!-- .container end -->
				<div class="xs-black-overlay"></div>
			</div><!-- .xs-welcome-content END -->
			
			<div class="xs-welcome-content" style="background-image: url(assets/images/slider/slider_2.jpg);">
				<div class="container">
					<div class="xs-welcome-wraper color-white">
						<h2>Naturaleza al servicio de la educación</h2>
						<!-- <p>Es una plataforma de captura integración y análisis de información socioambiental <br> en apoyo a la prospección del desarrollo sostenible de Honduras.</p> -->
					</div><!-- .xs-welcome-wraper END -->
				</div><!-- .container end -->
				<div class="xs-black-overlay"></div>
			</div><!-- .xs-welcome-content END -->
			
			<div class="xs-welcome-content" style="background-image: url(assets/images/slider/slider_3.jpg);">
				<div class="container">
					<div class="xs-welcome-wraper color-white">
						<h2>El punto de encuentro natural</h2>
						<!-- <p>Es una plataforma de captura integración y análisis de información socioambiental <br> en apoyo a la prospección del desarrollo sostenible de Honduras.</p> -->
					</div><!-- .xs-welcome-wraper END -->
				</div><!-- .container end -->
				<div class="xs-black-overlay"></div>
			</div><!-- .xs-welcome-content END -->
		
		</div>
	</section>
@endsection

@section('mision')
	<!-- misión section -->
	<section class="waypoint-tigger xs-section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-6">
					<div class="xs-archive-content">
						<div class="xs-heading">
							<h2 class="xs-line-title">Nuestra Misión</h2>
							<h3 class="xs-title big" data-title="Misión">Misión</h3>
						</div>
						
						<p>Promover el desarrollo sostenible mediante la gestión del conocimiento, 
						facilitando la toma de decisiones para la planificación ordenada del territorio, impulsando 
						la educación ambiental, el turismo sostenible, las áreas protegidas, la cultura y la recreación 
						en el Corredor Biológico del Caribe Hondureño.</p>
						
						<h5>Nuestros componentes estratégicos actuales:</h5>
						
						<ul class="xs-unorder-list arrow">
							<li>Observatorio Nacional de Cambio Climático para el Desarrollo Sostenible (ODS).</li>
							<li>Centro de Documentación.</li>
							<li>Educación Ambiental.</li>
							<li>Innovación de la información y servicios técnicos.</li>
						</ul>
						
						<ul class="xs-funfact-list">
							<li>
								<p>
									<span class="number-percentage-count number-percentage" data-value="120" data-animation-duration="3500">0</span><sup> + </sup>
								</p>
								<span>Escuelas</span>
							</li>
							<li>
								<p>
									<span class="number-percentage-count number-percentage" data-value="48" data-animation-duration="3500">0</span><sup> + </sup>
								</p>
								<span>Colegios</span>
							</li>
							<li>
								<p>
									<span class="number-percentage-count number-percentage" data-value="7" data-animation-duration="3500">0</span><sup> + </sup>
								</p>
								<span>Universidades</span>
							</li>
							<li>
								<p>
									<span class="number-percentage-count number-percentage" data-value="40" data-animation-duration="3500">0</span><sup> + </sup>
								</p>
								<span>Voluntarios</span>
							</li>
							<div class="clearfix"></div>
						</ul>
					</div>
				</div>
				<div class="col-md-12 col-lg-6 row xs-archive-image">
					<div class="col-md-12 xs-mb-30">
						<img src="assets/images/archive-img-1.jpg" alt="" class="rounded">
					</div>
					<div class="col-md-6 col-sm-6">
						<img src="assets/images/archive-img-2.jpg" alt="" class="rounded">
					</div>
					<div class="col-md-6 col-sm-6">
						<img src="assets/images/archive-img-3.jpg" alt="" class="rounded">
					</div>
				</div>
			</div><!-- .row end -->
		</div><!-- .container end -->
	</section><!-- End archive section -->
@endsection

@section('proyectos')
	<section class="bg-gray waypoint-tigger xs-section-padding">
		<div class="container">
			<div class="xs-heading row xs-mb-60">
				<div class="col-md-9 col-xl-9">
					<h2 class="xs-title">Proyectos</h2>
					<span class="xs-separetor dashed"></span>
					<p>Principales proyectos.</p>
				</div><!-- .xs-heading-title END -->
				<div class="col-xl-3 col-md-3 xs-btn-wraper">
					<a href="{{ URL::route('proyecto') }}" class="btn btn-primary">todas los proyectos</a>
				</div><!-- .xs-btn-wraper END -->
			</div><!-- .row end -->
			<div class="row">
				
				<div class="col-lg-4 col-md-6">
					<div class="xs-popular-item xs-box-shadow">
						<div class="xs-item-header">

							<img src="assets/images/causes/causes_4.jpg" alt="">

							<div class="xs-skill-bar">
								<div class="xs-skill-track">
									<p><span class="number-percentage-count number-percentage" data-value="90" data-animation-duration="3500">0</span>%</p>
								</div>
							</div>
						</div><!-- .xs-item-header END -->
						<div class="xs-item-content">
							<ul class="xs-simple-tag xs-mb-20">
								<li><a href="">Proyecto Fondo de Adaptación (PFA)</a></li>
							</ul>

							<a href="#" class="xs-post-title xs-mb-30" align="justify">Incrementar la resiliencia de la población más vulnerable en Honduras</a>

							<ul class="xs-list-with-content" align="center">
								<li>$67,000<span>Prometido</span></li>
								<li><span class="number-percentage-count number-percentage" data-value="60" data-animation-duration="3500">0</span>% <span>financiado</span></li>
								<li>3<span>Días para ir</span></li>
							</ul>
										
							<span class="xs-separetor"></span>
							
							<div class="row xs-margin-0">
								<div class="xs-round-avatar">
									<img src="assets/images/avatar/avatar_1.jpg" alt="">
								</div>
								<div class="xs-avatar-title">
									<a href="#"><span>Por</span>Fundación CREDIA</a>
								</div>
							</div>
						</div><!-- .xs-item-content END -->
					</div><!-- .xs-popular-item END -->
				</div>

				
				<div class="col-lg-4 col-md-6">
					<div class="xs-popular-item xs-box-shadow">
						<div class="xs-item-header">

							<img src="assets/images/causes/causes_5.jpg" alt="">

							<div class="xs-skill-bar">
								<div class="xs-skill-track">
									<p><span class="number-percentage-count number-percentage" data-value="59" data-animation-duration="3500">0</span>%</p>
								</div>
							</div>
						</div><!-- .xs-item-header END -->
						<div class="xs-item-content">
							<ul class="xs-simple-tag xs-mb-20">
								<li><a href="">Cambio climático</a></li>
							</ul>

							<a href="#" class="xs-post-title xs-mb-30" align="justify">Introducir en el concepto de Cambio Climático a los niños y niñas.</a>

							<ul class="xs-list-with-content" align="center">
								<li>$33,600<span>Prometido</span></li>
								<li><span class="number-percentage-count number-percentage" data-value="59" data-animation-duration="3500">0</span>% <span>financiado</span></li>
								<li>10<span>Días para ir</span></li>
							</ul>
							
							<span class="xs-separetor"></span>
							
							<div class="row xs-margin-0">
								<div class="xs-round-avatar">
									<img src="assets/images/avatar/avatar_2.jpg" alt="">
								</div>
								<div class="xs-avatar-title">
									<a href="#"><span>Por</span>Fundación CREDIA</a>
								</div>
							</div>
						</div><!-- .xs-item-content END -->
					</div><!-- .xs-popular-item END -->
				</div>

				<div class="col-lg-4 col-md-6">
					<div class="xs-popular-item xs-box-shadow">
						<div class="xs-item-header">

							<img src="assets/images/causes/causes_6.jpg" alt="">

							<div class="xs-skill-bar">
								<div class="xs-skill-track">
									<p><span class="number-percentage-count number-percentage" data-value="35" data-animation-duration="3500">0</span>%</p>
								</div>
							</div>
						</div><!-- .xs-item-header END -->
						<div class="xs-item-content">
							<ul class="xs-simple-tag xs-mb-20">
								<li><a href="">Fortaleciendo de las áreas marinas protegidas</a></li>
							</ul>

							<a href="#" class="xs-post-title xs-mb-30" align="justify">Diseño e implementación del sistema de monitoreo de los ecosistemas marinos</a>

							<ul class="xs-list-with-content" align="center">
								<li>$12,760<span>Prometido</span></li>
								<li><span class="number-percentage-count number-percentage" data-value="35" data-animation-duration="3500">0</span>% <span>financiado</span></li>
								<li>66<span>Días para ir</span></li>
							</ul>
							
							<span class="xs-separetor"></span>
							
							<div class="row xs-margin-0">
								<div class="xs-round-avatar">
									<img src="assets/images/avatar/avatar_3.jpg" alt="">
								</div>
								<div class="xs-avatar-title">
									<a href="#"><span>Por</span>Fundación CREDIA</a>
								</div>
							</div>
						</div><!-- .xs-item-content END -->
					</div><!-- .xs-popular-item END -->
				</div>

				<!--<div class="col-lg-4 col-md-6">
					<div class="xs-popular-item xs-box-shadow">
						<div class="xs-item-header">

							<img src="assets/images/causes/causes_7.jpg" alt="">

							<div class="xs-skill-bar">
								<div class="xs-skill-track">
									<p><span class="number-percentage-count number-percentage" data-value="85" data-animation-duration="3500">0</span>%</p>
								</div>
							</div>
						</div>
						<div class="xs-item-content">
							<ul class="xs-simple-tag xs-mb-20">
								<li><a href="">Charity</a></li>
							</ul>

							<a href="#" class="xs-post-title xs-mb-30">DACBerry PRO – Professional Soundcard for Raspberry Pi</a>

							<ul class="xs-list-with-content">
								<li>$99,980<span>Pledged</span></li>
								<li><span class="number-percentage-count number-percentage" data-value="85" data-animation-duration="3500">0</span>% <span>Funded</span></li>
								<li>2<span>Days to go</span></li>
							</ul>
							
							<span class="xs-separetor"></span>
							
							<div class="row xs-margin-0">
								<div class="xs-round-avatar">
									<img src="assets/images/avatar/avatar_4.jpg" alt="">
								</div>
								<div class="xs-avatar-title">
									<a href="#"><span>By</span>Jhung Li</a>
								</div>
							</div>
						</div>-->
						<!-- .xs-item-content END -->
					<!--</div>-->
					<!-- .xs-popular-item END -->
				<!--</div>

				<div class="col-lg-4 col-md-6">
					<div class="xs-popular-item xs-box-shadow">
						<div class="xs-item-header">

							<img src="assets/images/causes/causes_8.jpg" alt="">

							<div class="xs-skill-bar">
								<div class="xs-skill-track">
									<p><span class="number-percentage-count number-percentage" data-value="74" data-animation-duration="3500">0</span>%</p>
								</div>
							</div>
						</div>--><!-- .xs-item-header END -->
						<!--<div class="xs-item-content">
							<ul class="xs-simple-tag xs-mb-20">
								<li><a href="">Cave</a></li>
							</ul>

							<a href="#" class="xs-post-title xs-mb-30">BIKI: First Bionic Wireless Under water Fish Drone</a>

							<ul class="xs-list-with-content">
								<li>$40,000<span>Pledged</span></li>
								<li><span class="number-percentage-count number-percentage" data-value="74" data-animation-duration="3500">0</span>% <span>Funded</span></li>
								<li>70<span>Days to go</span></li>
							</ul>
							
							<span class="xs-separetor"></span>
							
							<div class="row xs-margin-0">
								<div class="xs-round-avatar">
									<img src="assets/images/avatar/avatar_5.jpg" alt="">
								</div>
								<div class="xs-avatar-title">
									<a href="#"><span>By</span>Chirstina Perry</a>
								</div>
							</div>
						</div>--><!-- .xs-item-content END -->
					<!--</div>--><!-- .xs-popular-item END -->
				<!--</div>

				<div class="col-lg-4 col-md-6">
					<div class="xs-popular-item xs-box-shadow">
						<div class="xs-item-header">

							<img src="assets/images/causes/causes_11.jpg" alt="">

							<div class="xs-skill-bar">
								<div class="xs-skill-track">
									<p><span class="number-percentage-count number-percentage" data-value="89" data-animation-duration="3500">0</span>%</p>
								</div>
							</div>
						</div>--><!-- .xs-item-header END -->
						<!--<div class="xs-item-content">
							<ul class="xs-simple-tag xs-mb-20">
								<li><a href="">Watar</a></li>
							</ul>

							<a href="#" class="xs-post-title xs-mb-30">Brilliant After All, A New Album by Rebecca: Help poor people</a>

							<ul class="xs-list-with-content">
								<li>$98,980<span>Pledged</span></li>
								<li><span class="number-percentage-count number-percentage" data-value="89" data-animation-duration="3500">0</span>% <span>Funded</span></li>
								<li>2<span>Days to go</span></li>
							</ul>
							
							<span class="xs-separetor"></span>
							
							<div class="row xs-margin-0">
								<div class="xs-round-avatar">
									<img src="assets/images/avatar/avatar_6.jpg" alt="">
								</div>
								<div class="xs-avatar-title">
									<a href="#"><span>By</span>Prekina William</a>
								</div>
							</div>
						</div><!-- .xs-item-content END -->
					<!--</div>--><!-- .xs-popular-item END -->
				<!--</div>-->
			</div><!-- .row end -->
		</div><!-- .container end -->
</section>
@endsection

@section('textoimagen') 
	<!-- text with image section -->
	<section class="xs-section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-6">
					<div class="xs-text-content xs-pr-20">
						<h2 class="color-navy-blue">Levanta tu mano y di presente para el sostenimiento del CREDIA</h2>
						<p> A través de sus componentes la fundación ha logrado convertirse en uno de los principales impulsadores para mejorar la situación de la población 
						del Corredor Biológico del Caribe Hondureño en los aspectos sociales, económicos y ambientales de esta importante región del país.</p>
						
						<blockquote>
							Sus aportes también le benefician a usted, ya que todos somos habitantes de este planeta al cual debemos proteger, conservar y promocionar. Cómo <span>ayudar, Contáctenos.</span>
						</blockquote>
					</div><!-- .xs-text-content END -->
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="xs-feature-image">
						<img src="assets/images/features_1.jpg" alt="">
					</div><!-- .xs-feature-image END -->
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="xs-feature-image">
						<img src="assets/images/features_2.jpg" alt="">
					</div><!-- .xs-feature-image END -->
				</div>
			</div><!-- .row end -->
		</div><!-- .container end -->
	</section><!-- End text with image section -->
@endsection

@section('descripcion')
	<section class="" style="background-image: url('assets/images/backgrounds/background-img.png')">
		<div class="container-fulid">
			<div class="xs-feature-content">
				<h2 class="color-white">
					El <span>CREDIA</span> trabaja en beneficio de los habitantes 
					del <span>Corredor Biológico del Caribe Hondureño</span> promoviendo el desarrollo sostenible, 
					y los métodos de adaptación y mitigación al cambio climático, bajo un enfoque de gestión 
					del conocimiento, promoción del turismo sostenible, la cultura y la recreación.
				</h2>
			</div><!-- .xs-feature-content END -->
		</div><!-- .container-fulid end -->
	</section>
@endsection

@section('caracteristicas')
	<section class="xs-feature-box-fulid">
		<div class="container-fulid">
			<div class="row xs-feature-box-wraper">
				<div class="col-md-12 col-lg-4 xs-feature-box">
					<div class="xs-feature-box-content">
						<h3 class="color-white">La tarea aun no termina, por eso necesitamos de ti</h3>
						<a href="#" class="btn btn-secondary btn-color-alt">
							Apoyanos
						</a>
					</div><!-- .xs-feature-box-content END -->
				</div>
				<div class="col-md-12 col-lg-4 xs-feature-box highlight">
					<div class="xs-feature-box-content">
						<h3 class="color-white">Patrocina uno de nuestros proyectos</h3>
						<p>
							Con tu patrocinio puedes llegar a difundir la percepción de la población hacia la conservación
							de los recursos naturales y de las áreas protegidas del Corredor Biológico del Caribe Hondureño y sus ecosistemas.
						</p>
						<a href="#" class="btn btn-secondary btn-color-alt">
							Patrocina
						</a>
					</div> <!-- .xs-feature-box-content end -->
				</div><!-- .xs-feature-box .highlight END -->
				<div class="col-md-12 col-lg-4 xs-feature-box">
					<div class="xs-feature-box-content">
						<h3 class="color-white">Conéctate con nosotros en las redes sociales</h3>
						<ul class="xs-social-list">
							<li><a href="https://www.facebook.com/crediahonduras/"><i class="fa fa-facebook"></i></a></li>
							<li><a href=""><i class="fa fa-twitter"></i></a></li>
							<li><a href=""><i class="fa fa-instagram"></i></a></li>
							<li><a href=""><i class="fa fa-pinterest-p"></i></a></li>
							<li><a href=""><i class="fa fa-google-plus"></i></a></li>
						</ul><!-- .xs-social-list END -->
					</div><!-- .xs-feature-box-content END -->
				</div><!-- .xs-feature-box END -->
			</div><!-- .row end -->
		</div><!-- .container end -->
	</section>
@endsection

@section('servicios')
	<section class="xs-section-padding">
		<div class="container" align="justify">
			<div class="xs-heading xs-mb-70 text-center">
				<h2 class="xs-mb-0 xs-title">Nuestras actividades y servicios de educación ambiental han beneficiado a más de <span>10,000 niños y niñas</span> de La Ceiba y comunidades vecinas del CBCH. </h2>
			</div>
			
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
	</section>
@endsection

@section('voluntarios')
	<section class="parallax-window xs-become-a-volunteer xs-section-padding" style="background-image: url('assets/images/backgrounds/volunteer-bg.jpg')">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-lg-7">
					<div class="xs-volunteer-form-wraper bg-aqua">
						<h2>Se un voluntario del CREDIA</h2>
						<p>Solo lleva un minuto decidir en que participar. Decida qué hacer. Elige un nombre, elige una foto. Y así, estarás listo para comenzar.</p>
						<form action="#" method="POST" id="volunteer-form" class="xs-volunteer-form">
							<div class="row">
								<div class="col-lg-6">
									<input type="text" id="volunteer_name" class="form-control" placeholder="Su nombre">
								</div>
								<div class="col-lg-6">
									<input type="email" id="volunteer_email" class="form-control" placeholder="Su correo">
								</div>
								<div class="col-lg-6">
									<select name="branch" class="form-control" id="volunteer_brach">
										<option value="">Seleccionar</option>	
										<option value="">Senderismo</option>
										<option value="">Charlas</option>
										<option value="">Capacitaciones</option>
									</select>
								</div>
								<div class="col-lg-6 xs-mb-20">
									<div class="xs-fileContainer">
										<input type="file" id="volunteer_cv" class="form-control" name="file">
										<label for="volunteer_cv">Sube tu CV</label>
									</div>
								</div>
							</div><!-- .row end -->
							<textarea name="massage" id="massage" placeholder="Ingrese su mensaje" cols="30" class="form-control" rows="10"></textarea>
							<button type="submit" class="btn btn-secondary btn-color-alt">aplica ya</button>
						</form><!-- #volunteer-form .xs-volunteer-form END -->
					</div>
				</div>
			</div><!-- .row end -->
		</div><!-- .container end -->
	</section>
@endsection

@section('eventos')
	<section class="xs-section-padding">
		<div class="container">
			<div class="xs-heading row xs-mb-60">
				<div class="col-md-9 col-xl-9">
					<h2 class="xs-title">Nuestros eventos</h2>
					<!--<span class="xs-separetor dashed"></span>-->
					<p>La Fundación CREDIA ha creado una plataforma para que te involucres con el medio ambiente <br> cambio climatico, salud, suelos y agua.</p>
				</div><!-- .xs-heading-title END -->
			</div>
			<div class="row">
				<div class="col-lg-6 row xs-single-event">
					<div class="col-md-5">
						<div class="xs-event-image">
							<img src="assets/images/event/event_1.jpg" alt="">
							<div class="xs-entry-date">
								<span class="entry-date-day">26</span>
								<span class="entry-date-month">Ago</span>
							</div>
							<div class="xs-black-overlay"></div>
						</div><!-- .xs-event-image END -->
					</div>
					<div class="col-md-7">
						<div class="xs-event-content">
							<a href="#">Senderismo</a>
							<p>Caminata para conocer las especies de arboles, hogos y animales que posee la fundación CREDIA.</p>
							<div class="xs-countdown-timer" data-countdown="2018/08/26"></div>
							<a href="#" class="btn btn-primary">
								Aprende más
							</a>
						</div><!-- .xs-event-content END -->
					</div>
				</div><!-- .xs-single-event END -->
				<div class="col-lg-6 row xs-single-event">
					<div class="col-md-5">
						<div class="xs-event-image">
							<img src="assets/images/event/event_2.jpg" alt="">
							<div class="xs-entry-date">
								<span class="entry-date-day">28</span>
								<span class="entry-date-month">Jul</span>
							</div>
							<div class="xs-black-overlay"></div>
						</div><!-- .xs-event-image END -->
					</div>
					<div class="col-md-7">
						<div class="xs-event-content">
							<a href="#">Capacitación.</a>
							<p>Introducción a la mayor amenaza medioambiental a la que se enfrenta la humanidad.</p>
							<div class="xs-countdown-timer" data-countdown="2018/07/28"></div>
							<a href="#" class="btn btn-primary">
								Aprende más
							</a>
						</div><!-- .xs-event-content END -->
					</div>
				</div><!-- .xs-single-event END -->
				<!--<div class="col-lg-6 row xs-single-event">
					<div class="col-md-5">
						<div class="xs-event-image">
							<img src="assets/images/event/event_3.jpg" alt="">
							<div class="xs-entry-date">
								<span class="entry-date-day">24</span>
								<span class="entry-date-month">jan</span>
							</div>
							<div class="xs-black-overlay"></div>
						</div>
					</div>
					<div class="col-md-7">
						<div class="xs-event-content">
							<a href="#">Waterproof drone that</a>
							<p>In a time of overwhelming emotions, sadness, and pain, obligations.</p>
							<div class="xs-countdown-timer" data-countdown="2019/05/24"></div>
							<a href="#" class="btn btn-primary">
								Aprende más
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6 row xs-single-event">
					<div class="col-md-5">
						<div class="xs-event-image">
							<img src="assets/images/event/event_4.jpg" alt="">
							<div class="xs-entry-date">
								<span class="entry-date-day">23</span>
								<span class="entry-date-month">jun</span>
							</div>
							<div class="xs-black-overlay"></div>
						</div>
					</div>
					<!--<div class="col-md-7">
						<div class="xs-event-content">
							<a href="">Braille Literacy Tool for.</a>
							<p>In a time of overwhelming emotions, sadness, and pain, obligations.</p>
							<div class="xs-countdown-timer" data-countdown="2020/02/24"></div>
							<a href="#" class="btn btn-primary">
								Learn More
							</a>
						</div>
					</div>
				</div>-->
			</div><!-- .row end -->
		</div><!-- .container end -->
	</section>
@endsection

@section('afiliados')
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
	</section>
@endsection

@section('diario')
	<section class="xs-section-padding">
		<div class="container">
			<div class="xs-heading row xs-mb-60">
				<div class="col-md-9 col-xl-9">
					<h2 class="xs-title">From the Journal</h2>
					<span class="xs-separetor dashed"></span>
					<p>It allows you to gather monthly subscriptions from fans to help fund your creative projects. They also encourage their users to offer rewards to fans as a way to repay them for their support.</p>
				</div><!-- .xs-heading-title END -->
				<div class="col-xl-3 col-md-3 xs-btn-wraper">
					<a href="" class="btn btn-primary">all Causes</a>
				</div><!-- .xs-btn-wraper END -->
			</div><!-- .row end -->
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="xs-box-shadow xs-single-journal">
						<div class="entry-thumbnail ">
							<img src="assets/images/blog/blog_1.jpg" alt="">
							<div class="post-author">
								<span class="xs-round-avatar">
									<img class="img-responsive" src="assets/images/avatar/avatar_1.jpg" alt="">
								</span>
								<span class="author-name">
									<a href="#">By Simona</a>
								</span>
							</div>
						</div><!-- .xs-item-header END -->
						<div class="entry-header">
							<div class="entry-meta">
								<span class="date">
									<a href=""  rel="bookmark" class="entry-date">
										27th August 2017
									</a>
								</span>
							</div>
							
							<h4 class="entry-title">
								<a href="#">Brilliant After All, A New Album by Rebecca: Help poor people</a>
							</h4>
						</div><!-- .xs-entry-header END -->
						<span class="xs-separetor"></span>
						<div class="post-meta">
							<span class="comments-link">
								<i class="fa fa-comments-o"></i>
								<a href="">300 Comments</a>
							</span><!-- .comments-link -->
							<span class="view-link">
								<i class="fa fa-eye"></i>
								<a href="">1000 Views</a>
							</span>
						</div><!-- .post-meta END -->
					</div><!-- .xs-from-journal END -->
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="xs-box-shadow xs-single-journal">
						<div class="entry-thumbnail ">
							<img src="assets/images/blog/blog_2.jpg" alt="">
							<div class="post-author">
								<span class="xs-round-avatar">
									<img class="img-responsive" src="assets/images/avatar/avatar_2.jpg" alt="">
								</span>
								<span class="author-name">
									<a href="#">By Julian</a>
								</span>
							</div>
						</div><!-- .xs-item-header END -->
						<div class="entry-header">
							<div class="entry-meta">
								<span class="date">
									<a href=""  rel="bookmark" class="entry-date">
										02 May 2017
									</a>
								</span>
							</div>
							
							<h4 class="entry-title">
								<a href="#">South african pre primary school build for children</a>
							</h4>
						</div><!-- .xs-entry-header END -->
						<span class="xs-separetor"></span>
						<div class="post-meta">
							<span class="comments-link">
								<i class="fa fa-comments-o"></i>
								<a href="">300 Comments</a>
							</span><!-- .comments-link -->
							<span class="view-link">
								<i class="fa fa-eye"></i>
								<a href="">1000 Views</a>
							</span>
						</div><!-- .post-meta END -->
					</div><!-- .xs-from-journal END -->
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="xs-box-shadow xs-single-journal">
						<div class="entry-thumbnail ">
							<img src="assets/images/blog/blog_3.jpg" alt="">
							<div class="post-author">
								<span class="xs-round-avatar">
									<img class="img-responsive" src="assets/images/avatar/avatar_3.jpg" alt="">
								</span>
								<span class="author-name">
									<a href="#">By David Willy</a>
								</span>
							</div>
						</div><!-- .xs-item-header END -->
						<div class="entry-header">
							<div class="entry-meta">
								<span class="date">
									<a href=""  rel="bookmark" class="entry-date">
										13 January 2017
									</a>
								</span>
							</div>
							
							<h4 class="entry-title">
								<a href="#">Provide pure water for syrian poor people</a>
							</h4>
						</div><!-- .xs-entry-header END -->
						<span class="xs-separetor"></span>
						<div class="post-meta">
							<span class="comments-link">
								<i class="fa fa-comments-o"></i>
								<a href="">300 Comments</a>
							</span><!-- .comments-link -->
							<span class="view-link">
								<i class="fa fa-eye"></i>
								<a href="">1000 Views</a>
							</span>
						</div><!-- .post-meta END -->
					</div><!-- .xs-from-journal END -->
				</div>
			</div><!-- .row end -->
		</div><!-- .container end -->
	</section>
@endsection

