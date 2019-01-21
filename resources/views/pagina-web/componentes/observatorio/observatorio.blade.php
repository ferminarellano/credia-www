@extends('pagina-web.layouts.layout')

@section('title', '| Observatorio')

@section('banner')
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

@section('observatorio_section')
	<!-- coceptualizacion observatorio section -->
	<section class="xs-section-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="xs-fature-causes-deatils-comp">
						<h3>Conceptualización del ODS</h3>
						<p>
							Se sustenta en la experiencia de observatorios existentes en Iberoamérica, especificamente
							en España, México, Colombia y Argentina. La sistematización y análisis de esta experiencias
							permitió determinar que las funciones del Observatorio deben estar enfocados en la gestión 
							de información mediante el monitoreo, la investigación, la recopilación y divulgación de 
							información documental, complementado con un programa de capacitación en temas relevantes 
							para promover el desarrollo sostenible de CBCH.
						</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="xs-causes-images">
						<img src="assets/images/componentes/observatorio/observatorio_1.jpg" class="d-block" alt="">
					</div>
				</div>
			</div>
			<div class="row" style="margin-top:40px;">
				<div class="col-lg-4">
					<div class="xs-causes-images">
						<img src="assets/images/componentes/observatorio/observatorio_2.jpg" class="d-block" alt="">
					</div>
				</div>
				<div class="col-lg-8">
					<div class="xs-fature-causes-deatils-comp">
						<p style="margin-top:0px;">
							En este sentido, el ODS es considerado una dependencia del CREDIA que monitorea e incide en el proceso 
							de desarrollo sostenible, mediante la generación y difusión de información; on autonomía en su 
							funcionamiento y gestión de la información para garantizar la objetividad de los análisis realizados.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section><!-- End coceptualizacion observatorio section -->
	
	<!-- observatorio misión & visión section -->
	<section class="parallax-window xs-content-section-padding" style="background-image: url('assets/images/backgrounds/parralax_3.jpg')">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="xs-observatorio-feature">
						<h3>Misión</h3>
						<p class="lead">
							"Gestionar el conocimiento y democratizar la información referente a la sostenibilidad del desarrollo en el 
							litoral Atlántico, mediante la investigación científica, la capacitación y el establecimiento de alianzas 
							estratégicas, para fomentar una visión crítica en la sociedad civil y propiciar un cambio social hasta el 
							desarrollo sostenible".
						</p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="xs-observatorio-feature">
						<h3>Visión</h3>
						<p class="lead">
							"Ser un observatorio líder en la gestión de conocimiento e información de calidad, objetiva y transparente 
							referente a la sostenibilidad del desarrollo en el litoral Atlántico, reconocido a nivel nacional e 
							internacional por su contribución al desarrollo de las comunidades locales".
						</p>
					</div>
				</div>
			</div>
		</div>
	</section><!-- End observatorio misión & visión section -->

	<!-- observatorio funciones section -->
	<section class="xs-section-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="xs-causes-images" style="margin-top:35px;">
						<img src="assets/images/componentes/observatorio/observatorio_3.jpg" class="d-block" alt="">
					</div>
				</div>
				<div class="col-lg-8">
					<div class="xs-fature-causes-deatils-comp">
						<h3> Áreas de trabajo del ODS</h3>
						<p>
							La investigación, Capacitación y la Comunicación y Difusión de Información, para lo cual constará de tres unidades: 
							Sistemas de Información Geográfica, Centro de Gestión Documental e Informática.
						</p>
						<h5><span class="color-blue-light-credia">Las funciones identificadas para el ODS son:</span></h5>
						<ul class="xs-unorder-list">
							<li><i class="fa fa-circle color-blue-light-credia"></i><a>Apoyar la integración de los datos provenientes del sistema de monitoreo biológico de las áreas protegidas.</a></li>
							<li><i class="fa fa-circle color-blue-light-credia"></i><a>Desarrollo de capacidades de conocimiento.</a></li>
							<li><i class="fa fa-circle color-blue-light-credia"></i><a>Información sobre los procesos de sostenibilidad.</a></li>
							<li><i class="fa fa-circle color-blue-light-credia"></i><a>Promover y divulgar resultados de la investigación científica.</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-12 cendoc-banner">
					<img src="assets/images/componentes/observatorio/observatorio_banner.jpg" alt="">
				</div>
			</div>
		</div>
	</section>	<!-- End observatorio funciones section -->
@endsection