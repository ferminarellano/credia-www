@extends('pagina-web.layouts.layout')

@section('title', '| CENDOC')

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

@section('cendoc_section')
	<!-- cendoc section -->
	<section class="xs-section-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="xs-fature-causes-deatils">
						<h3>El Centro de Documentación</h3>
						<p>
							Forma parte del modelo de gestión de conocimiento del Centro Regional de Documentación 
							e Interpretación Ambiental (CREDIA), como plataforma dinámica e integradora para la gestión y
							administración de información socioambiental de Honduras.
						</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="xs-causes-images">
						<img src="assets/images/componentes/cendoc/cendoc_1.jpg" class="d-block" alt="">
					</div>
				</div>
			</div>
			<div class="row" style="margin-top:40px;">
				<div class="col-lg-4">
					<div class="xs-causes-images" style="margin-top:30px;">
						<img src="assets/images/componentes/cendoc/cendoc_2.jpg" class="d-block" alt="">
					</div>
				</div>
				<div class="col-lg-8">
					<div class="xs-fature-causes-deatils">
						<p style="margin-top:0px;">
							Constituye la base operativa del modelo, en la cual se integran una gama de socios estratégicos que ejercen
							acción sobre los elementos biológicos y socioambientales, como hacedores directos en la generación y 
							retroalimentan de la información, la cual es publicada oficialmente a través del Observatorio de Desarrollo 
							Sostenible, todo esto contribuyendo transversalmente a la Educación para la Sostenibilidad.
						</p>
						<p>
							Operativamente es el componente encargado de la captura, recopilación y difusión de información documental 
							referente al desarrollo sostenible de Honduras, con el propósito de contribuir a satisfacer las necesidades
							de información de tomadores de decisiones, investigadores, técnicos, administraciones, docentes, estudiantes en general.
						</p>
					</div>
				</div>
			</div>
			<div class="row" style="margin-top:40px;">
				<div class="col-lg-8">
					<div class="xs-fature-causes-deatils">
						<p>
							Así mismo constituye una de las plataformas virtuales innovadoras gracias al uso de sistemas de información
							libre que permite la divulgación de documentos generados y compartidos por organizaciones vinculadas a este Centro.
						</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="xs-causes-images">
						<img src="assets/images/componentes/cendoc/cendoc_3.jpg" class="d-block" alt="">
					</div>
				</div>
			</div>
		</div>
	</section><!-- cendoc section -->
	
	<!-- objetivo cendoc section -->
	<section class="parallax-window xs-content-section-padding" style="background-image: url('assets/images/backgrounds/parralax_3.jpg')">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="xs-service-slider-content">
						<h2 class="xs-title-underline">Objetivo General</h2>
						<div class="xs-service-grow row">
							<div class="col-md-12">
								<p class="float-left text-p">
									Recopilar, digitalizar, clasificar, almacenar y difundir la información disponible sobre estudios,
									investigaciones y otros productos relacionados al estado de los recursos naturales en el marco del 
									desarrollo sostenible y la gestión del conocimiento en Honduras.
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="xs-single-item-slider owl-carousel">
						<div class="xs-single-slider-item">
							<img src="assets/images/componentes/cendoc/objetivo.jpg" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- end objetivo cendoc section -->
	
	<!-- Enfoque cendoc section -->
	<section class="xs-cendoc-section" style="background-image: url('assets/images/map.png');">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div>
						<div class="xs-heading xs-mb-40">
							<h2 class="xs-mb-0 xs-title text-center">Beneficios</h2>
						</div>
						<ul class="xs-unorder-cendoc-list play green-icon">
							<li>Concentración y organización de los documentos que han sido generados por diferentes actores.</li>
							<li>Respaldo automático de la información, contribuyendo de esta manera a disminuir la pérdida de esta.</li>
							<li>Mayor disposición, promoción y difusión de los productos generados en el país.</li>
							<li>Software de uso libre, no presenta costos por licencia.</li>
							<li>Capacidad de intercambio institucionales.</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-6">
					<div>
						<div class="xs-heading xs-mb-40">
							<h2 class="xs-mb-0 xs-title text-center">Enfoque de organización</h2>
						</div>
						<p class="p-cendoc-enfoque">
							En la actualidad, la conciencia de que es necesario preservar y mantener el medio ambiente se refleja 
							prácticamente en todos los ámbitos de trabajo. La colaboración dinámica entre el estado, la cooperación
							internacional, organizaciones de sociedad civil, academia, comunidad científica, gobiernos municipales 
							y comunidades en general, están generando nuevos conocimientos y medidas concretas para solucionar 
							los problemas ambientales globales.
						</p>
					</div>
				</div>
				<div class="col-lg-12 cendoc-banner">
					<img src="assets/images/componentes/cendoc/cendoc_banner.jpg" alt="">
				</div>
			</div>
		</div>
	</section><!-- End Enfoque cendoc section -->
@endsection