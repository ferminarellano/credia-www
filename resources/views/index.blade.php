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

@section('title','')

@section('welcome_in')	
	<section class="xs-welcome-slider">
		<div class="xs-banner-slider owl-carousel">
			@foreach($sliders as $slide)
				<div class="xs-welcome-content" style="background-image: url({{ $slide->foto }});">
					<div class="container">
						<div class="xs-welcome-wraper color-white">
							<h2>{{ $slide->titulo }}</h2>
							<p>{{ $slide->descripcion }}</p>
						</div><!-- .xs-welcome-wraper END -->
					</div><!-- .container end -->
					<div class="xs-black-overlay"></div>
				</div>
			@endforeach
		</div>
	</section>
@endsection

@section('mision_in')
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
							<li>Adaptación, Agua, Bosques y Suelos.</li>
							<li>Cambio Climatico y Gestión Integral de Riesgos.</li>
							<li>Interpretación y Educación Ambiental.</li>
							<li>Observatorio de Desarrollo Sostenible (ODS).</li>
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
						<img src="assets/images/mision-img-1.jpg" alt="" class="rounded">
					</div>
					<div class="col-md-6 col-sm-6">
						<img src="assets/images/mision-img-2.jpg" alt="" class="rounded">
					</div>
					<div class="col-md-6 col-sm-6">
						<img src="assets/images/mision-img-3.jpg" alt="" class="rounded">
					</div>
				</div>
			</div><!-- .row end -->
		</div><!-- .container end -->
	</section><!-- End archive section -->
@endsection

@section('proyectos_in')
	<section class="bg-gray waypoint-tigger xs-section-padding">
		<div class="container">
			<div class="xs-heading row xs-mb-60">
				<div class="col-md-10 col-xl-10">
					<h2 class="xs-title">Proyectos</h2>
				</div>
				<div class="col-xl-2 col-md-2">
					<a href="{{ URL::route('proyecto') }}" class="btn btn-primary">Ver todos</a>
				</div><!-- .xs-btn-wraper END -->
			</div><!-- .row end -->
			<div class="row">
				@if(count($proyectos) === 0)
					<div class="col-lg-12">
						<h1 class="resp">NO HAY PUBLICACIONES DISPONIBLES<h1>
					</div>
				@endif
				@foreach($proyectos as $proyecto)
					<div class="col-lg-4 col-md-6">
						<div class="xs-popular-item xs-box-shadow">
							<div class="xs-item-header">

								<img src="/{{$proyecto->foto}}" alt="">

								<div class="xs-skill-bar">
									<div class="xs-skill-track bg-light-green">
										<p><span class="number-percentage-count number-percentage" data-value="{{ $proyecto->avance }}" data-animation-duration="3500">0</span>%</p>
									</div>
								</div>
							</div><!-- .xs-item-header END -->
							<div class="xs-item-content">
								<div class="xs-margin-1">
									<ul class="xs-simple-tag xs-mb-20">
										<li><a class="color-light-black" href="{{URL::route('proyectodetalle',['slug' => str_slug($proyecto->titulo,'-'),'id' => $proyecto->id])}}">{{ $proyecto->subtitulo }}</a></li>
									</ul>
									<span class="xs-separetor"></span>
									<a href="{{URL::route('proyectodetalle',['slug' => str_slug($proyecto->titulo,'-'),'id' => $proyecto->id])}}" class="xs-post-title xs-mb-30" style="text-align:justify;">{{ $proyecto->titulo }}</a>
								</div>
							</div><!-- .xs-item-content END -->
						</div><!-- .xs-popular-item END -->
					</div>
				@endforeach
			</div><!-- .row end -->
		</div><!-- .container end -->
	</section>
@endsection

@section('texto_in') 
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
						<img src="assets/images/caracteristicas_1.jpg" alt="">
					</div><!-- .xs-feature-image END -->
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="xs-feature-image">
						<img src="assets/images/caracteristicas_2.jpg" alt="">
					</div><!-- .xs-feature-image END -->
				</div>
			</div><!-- .row end -->
		</div><!-- .container end -->
	</section><!-- End text with image section -->
@endsection

@section('descripcion_in')
	<section class="" style="background-image: url('assets/images/backgrounds/background-img.jpg')">
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

@section('unete_in')
	<section class="xs-feature-box-fulid">
		<div class="container-fulid">
			<div class="row xs-feature-box-wraper">
				<div class="col-md-12 col-lg-4 xs-feature-box">
					<div class="xs-feature-box-content">
						<h3 class="color-white">La tarea aun no termina, por eso necesitamos de ti</h3>
						<a href="{{ URL::route('voluntario') }}" class="btn btn-secondary btn-color-alt">
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
						<a href="{{ URL::route('donacion') }}" class="btn btn-secondary btn-color-alt">
							Patrocina
						</a>
					</div> <!-- .xs-feature-box-content end -->
				</div><!-- .xs-feature-box .highlight END -->
				<div class="col-md-12 col-lg-4 xs-feature-box">
					<div class="xs-feature-box-content">
						<h3 class="color-white">Conéctate con nosotros en las redes sociales</h3>
						<ul class="xs-social-list">
							@foreach($redes as $red)
								<li><a href="{{ $red->url }}" target="_blank"><i class="fa fa-{{ $red->red }}"></i></a></li>
							@endforeach
						</ul><!-- .xs-social-list END -->
					</div><!-- .xs-feature-box-content END -->
				</div><!-- .xs-feature-box END -->
			</div><!-- .row end -->
		</div><!-- .container end -->
	</section>
@endsection

@section('actividades_in')
	<section class="xs-section-padding">
		<div class="container" align="justify">
			<div class="xs-heading xs-mb-70 text-center">
				<h2 class="xs-mb-0 xs-title-sv">Nuestras actividades y servicios de educación ambiental han beneficiado a más de <span>10,000 niños y niñas</span> de La Ceiba <br>y comunidades vecinas del CBCH. </h2>
			</div>
			
			<div class="row">
				<div class="col-md-6 col-lg-3">
					<div class="xs-service-promo">
						<span class="xs-service-promo" style="background: url('assets/images/actividades/jardin.png') no-repeat; background-position:bottom;"></span>
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
						<span class="xs-service-promo" style="background: url('assets/images/actividades/foresteria.png') no-repeat; background-position:bottom;"></span>
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

@section('voluntarios_in')

	<section class="-index xs-become-a-volunteer xs-section-padding" style="background-image: url('assets/images/backgrounds/voluntarios-bg.jpg')">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-lg-7">
					<div class="xs-volunteer-form-wraper bg-aqua">
						<h2>Se un voluntario del CREDIA</h2>
						<br><br><br>
						<p>
							Solo lleva un minuto decidir en que participar. Decida qué hacer. Elige un nombre, elige una foto. 
							Y así, estarás listo para comenzar.
						</p>
						
						<form action="{{URL::to('/')}}" method="post" id="volunteer-form" class="xs-volunteer-form" enctype="multipart/form-data">
							 {{ csrf_field() }}
							<div class="row">
								<div class="col-lg-6">
									<input type="text" name="nombre" id="nombre" value="{{ old('nombre') }}" class="form-control" placeholder="Nombre completo" required>
								</div>
								<div class="col-lg-6">	
									<input type="email" name="correo" id="correo" value="{{ old('correo') }}" class="form-control" placeholder="Correo" required>
								</div>
								<div class="col-lg-6">
									<select name="actividad_id" id="actividad_id" value="{{ old('actividad_id') }}" class="form-control" required>
											<option value="">Seleccionar</option>
										@foreach($actividades as $actividad)
											<option value="{{$actividad->id}}">{{$actividad->actividad}}</option>
										@endforeach
									</select>
								</div>
								<div class="col-lg-6 xs-mb-20">
									<div class="xs-fileContainer">
										<input type="file" name="file" class="form-control">
										<label for="archivo">Sube tu CV</label>
									</div>
									<small style="padding-left:85px;color:white;">Formato <b>PDF</b> 100kb máximo.</small>
								</div>
							</div><!-- .row end -->
							<textarea name="descripcion" id="descripcion" value="{{ old('descripcion') }}" placeholder="Ingrese su mensaje" cols="30" class="form-control" rows="10" required></textarea>
							<button type="submit" class="btn btn-secondary btn-color-alt">aplica ya</button>
						</form><!-- #volunteer-form .xs-volunteer-form END -->
					</div>
				</div>
			</div><!-- .row end -->
		</div><!-- .container end -->
	</section>
@endsection

@section('eventos_in')
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
				@if(count($eventos) === 0)
					<div class="col-lg-12">
						<h1 class="resp">NO HAY PUBLICACIONES DISPONIBLES<h1>
					</div>
				@endif
				@foreach($eventos as $evento)
					<div class="col-lg-6 row xs-single-event event-blue">
						<div class="col-md-5">
							<div class="xs-event-image">
								<img src="/{{$evento->foto}}" alt="">
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
	</section>
@endsection

@section('patrocinadores_in')
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

@section('revista_in')
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

