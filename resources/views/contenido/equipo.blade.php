@extends('layouts.layout')

@section('title', 'Equipo de trabajo -')

@section('welcome_eq')
	<section class="xs-banner-inner-section parallax-window" style="background-image:url({{ $foto }})">
		<div class="xs-black-overlay"></div>
		<div class="container">
			<div class="color-white xs-inner-banner-content">
				<h2>{{ $titulo }}</h2>
				<p>{{ $contenido }}</p>
			</div>
		</div>
	</section>
@endsection

@section('equipo_eq')
	<!-- equipo section -->
	<section class="xs-section-padding">
		<div class="container">
			<div class="row">
				@if(count($empleados) === 0)
					<div class="col-lg-12">
						<h1 class="resp">ACTUALMENTE NO SE HA INGRESADO EL EQUIPO DE TRABAJO<h1>
					</div>
				@else
					@foreach($empleados as $empleado)
						<div class="col-md-6 col-lg-3">
							<div class="xs-single-team xs-mb-50">
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
				@endif
			</div><!-- .row END -->
		</div><!-- .container end -->
	</section>	<!-- End team section -->

	<!-- content description section -->
	<section class="bg-navy-blue xs-section-padding">
		<div class="container-fulid">
			<div class="xs-feature-content-v2">
				<h2 class="color-white">Cualquier cosa que la mente del hombre puede concebir y creer, puede ser conseguida teniendo el mejor<span> Equipo de Trabajo</span> a disposici&oacute;n.</h2>
			</div><!-- .xs-feature-content END -->
		</div><!-- .container-fulid end -->
	</section>	<!-- End content description section -->
@endsection

@section('principios_eq')
	<!-- principios section -->
	<section class="xs-partner-section" style="background-color:#F9F9F9;">
		<div class="container">
			<div class="row" style="color:#011b58;">
				<div class="xs-heading col-lg-12">
					<h2 class="xs-mb-0 xs-title" style="text-align:center;">Principios institucionales.</h2>
				</div>
				<div class="col-lg-6">
					<div class="xs-partner-content">
						<ul class="xs-unorder-list play green-icon">
							<li>Aprendizaje</li>
						</ul>
						<p align="justify">El centro conforma un espacio de aprendizaje donde todos los que interact&uacute;an, tienen un permanente inter&eacute;s, necesidad y deseo de llegar al conocimiento. A trav&eacute;s 
						del aprovechamiento de amplias fuentes de informaci&oacute;n y transmisi&oacute;n del conocimiento ambiental, cient&iacute;fico, tecnol&oacute;gico y cultural.</p>
						<ul class="xs-unorder-list play green-icon">
							<li>Compromiso socioambiental</li>
						</ul>
						<p align="justify">El CREDIA demostrar&aacute; en todo momento la disposici&oacute;n consciente y responsable con la regi&oacute;n y el pa&iacute;s para el manejo y conservaci&oacute;n de los recursos 
						naturales y la promoci&oacute;n de su desarrollo sostenible. Generar&aacute;, adem&aacute;s, espacios de intercambios y experiencias de convivencia armoniosa con el ambiente y sus recursos.</p>
						<ul class="xs-unorder-list play green-icon">
							<li>Consistencia</li>
						</ul>
						<p align="justify">Para garantizar que el CREDIA cumpla con su cometido de gestor de informaci&oacute;n y conocimiento de la biodiversidad y desarrollo sostenible y promotor de la cultura y la recreaci&oacute;n
						familiar, aplicar&aacute; con absoluta autoridad el principio de consistencia en cuanto a calidad y oportunidad del servicio, calidad de atenci&oacute;n a los usuarios y socios y la innovaci&oacute;n permanente.</p>
						<ul class="xs-unorder-list play green-icon">
							<li>Democracia</li>
						</ul>
						<p align="justify">El centro dar&aacute; igualdad de oportunidades para ninos, ninas, j&oacute;venes y adultos; indistintamente de su edad, sexo, raza o religi&oacute;n, de acceder a la diversidad de servicios
						y productos que conforman su portafolio de ofertas.</p>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="xs-partner-content">
						<ul class="xs-unorder-list play green-icon">
							<li>Eticidad</li>
						</ul>
						<p align="justify">Se guiar&aacute; por un C&oacute;digo de &Eacute;tica profesional y humana acorde a las exigencias de los marcos de pol&iacute;ticas ambientales regulatorias de las acciones en este campo.</p>
						<ul class="xs-unorder-list play green-icon">
							<li>Flexibilidad e innovaci&oacute;n</li>
						</ul>
						<p align="justify">En el actual contexto globalizado, uno principio necesario en toda organizaci&oacute;n es la flexibilidad para adaptarse a los cambios y a las nuevas y permanentes exigencias y desaf&iacute;os 
						que demandas los sistemas actuales, en consecuencia, el CREDIA establece como principio fundamental su flexibilidad e innovaci&oacute;n permanente ante los retos y oportunidades que ofrecen los cambiantes sistemas actuales.</p>
						<ul class="xs-unorder-list play green-icon">
							<li>Pluralismo</li>
						</ul>
						<p align="justify">El CREDIA promover&aacute; en todo momento el respeto a las diferencias ideol&oacute;gicas, pol&iacute;ticas, culturales, religiosas y econ&oacute;micas de sus actores pasivos y activos.</p>
						<ul class="xs-unorder-list play green-icon">
							<li>Transparencia</li>
						</ul>
						<p align="justify">"Es el intento voluntario por parte de la organizaci&oacute;n de crear un entorno de confianza en el cual promocionar el acceso libre a la informaci&oacute;n, la comunicaci&oacute;n abierta, y
						la participaci&oacute;n de todos los profesionales en la toma de decisiones".</p>
					</div>
				</div>
			</div><!-- .row end -->
		</div><!-- .container end -->
	</section>	<!-- End partners section -->
@endsection