@extends('layouts.layout')

@section('title', 'Proyectos -')

@section('welcomeproyecto')
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

@section('proyectosection')

	<!-- causes section -->
	<section class="xs-content-section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-4">
					<div class="xs-single-causes">
						<img src="assets/images/causes/causes_4.jpg" alt="">
						<div class="xs-causes-footer">
							<h2 class="color-blue-dark">Adpatación, Agua, Bosques y suelos.</h2>
							<p style="text-align:justify;">Incrementar la resiliencia de la población más vulnerable de las zonas rurales del Corredor Biológico del Caribe Hondureño.</p>
						</div>
					</div><!-- .xs-single-causes END -->
				</div>
				<div class="col-md-6 col-lg-4">
					<div class="xs-single-causes">
						<img src="assets/images/causes/causes_5.jpg" alt="">
						<div class="xs-causes-footer">
							<h2 class="color-blue-dark">Educación</h2>
							<p style="text-align:justify;">Introducir en el concepto de Cambio Climático a los niños y niñas del municipio de La Ceiba y aledaños, enriqueciendo a más de 250 escuelas y 10,000 niños.</p>
						</div>
					</div><!-- .xs-single-causes END -->
				</div>
				<div class="col-md-6 col-lg-4">
					<div class="xs-single-causes">
						<img src="assets/images/causes/causes_2.jpg" alt="">
						<div class="xs-causes-footer">
							<h2 class="color-blue-dark">Forestería</h2>
							<p style="text-align:justify;">Desarrollo de las comunidades rurales, donde a partir del uso responsable y sostenible del bosque éstas generan beneficios económicos, ecológicos y sociales que contribuyen a mejorar su calidad de vida.</p>
						</div>
					</div><!-- .xs-single-causes END -->
				</div>
			</div><!-- .row end -->
		</div><!-- .container end -->
	</section>	<!-- End causes section -->

	<!-- popularCauses version 2 section -->
	<section class="bg-gray waypoint-tigger xs-section-padding">
		<div class="container">
			<div class="xs-heading row xs-mb-60">
				<div class="col-md-9 col-xl-9">
					<h2 class="xs-title">Proyectos</h2>
					<!-- <span class="xs-separetor dashed"></span> -->
					<p>Principales proyectos.</p>
				</div><!-- .xs-heading-title END -->
				<!-- <div class="col-xl-3 col-md-3 xs-btn-wraper"> -->
					<!-- <a href="" class="btn btn-primary bg-orange">all Causes</a> -->
				<!-- </div><!-- .xs-btn-wraper END -->
			</div><!-- .row end -->
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="xs-popular-item xs-box-shadow">
						<div class="xs-item-header">

							<img src="assets/images/causes/causes_4.jpg" alt="">

							<div class="xs-skill-bar">
								<div class="xs-skill-track bg-light-red">
									<p><span class="number-percentage-count number-percentage" data-value="60" data-animation-duration="3500">0</span>%</p>
								</div>
							</div>
						</div><!-- .xs-item-header END -->
						<div class="xs-item-content">
							<ul class="xs-simple-tag xs-mb-20">
								<li><a class="color-light-red" href="">Proyecto Fondo De Adaptación (PFA)</a></li>
							</ul>

							<a href="#" class="xs-post-title xs-mb-30" style="text-align:justify;">Incrementar la resiliencia de la población más vulnerable en Honduras</a>

							<ul class="xs-list-with-content">
								<li>L67,000<span>Prometido</span></li>
								<li><span class="number-percentage-count number-percentage" data-value="90" data-animation-duration="3500">0</span>% <span>Financiado</span></li>
								<li>3<span>Días</span></li>
							</ul>
										
							<span class="xs-separetor"></span>
							
							<div class="row xs-margin-0">
								<div class="xs-round-avatar">
									<img src="assets/images/avatar/avatar_1.jpg" alt="">
								</div>
								<div class="xs-avatar-title">
									<a href="#"><span>By</span>Ema Watson</a>
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
								<div class="xs-skill-track bg-purple">
									<p><span class="number-percentage-count number-percentage" data-value="59" data-animation-duration="3500">0</span>%</p>
								</div>
							</div>
						</div><!-- .xs-item-header END -->
						<div class="xs-item-content">
							<ul class="xs-simple-tag xs-mb-20">
								<li><a class="color-purple" href="">Cambio Climático</a></li>
							</ul>

							<a href="#" class="xs-post-title xs-mb-30" style="text-align:justify;">Introducir en el concepto de Cambio Climático a los niños y niñas.</a>

							<ul class="xs-list-with-content">
								<li>L33,600<span>Prometido</span></li>
								<li><span class="number-percentage-count number-percentage" data-value="59" data-animation-duration="3500">0</span>% <span>Financiado</span></li>
								<li>10<span>Días</span></li>
							</ul>
							
							<span class="xs-separetor"></span>
							
							<div class="row xs-margin-0">
								<div class="xs-round-avatar">
									<img src="assets/images/avatar/avatar_2.jpg" alt="">
								</div>
								<div class="xs-avatar-title">
									<a href="#"><span>By</span>Kene Williamson</a>
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
								<div class="xs-skill-track bg-blue">
									<p><span class="number-percentage-count number-percentage" data-value="35" data-animation-duration="3500">0</span>%</p>
								</div>
							</div>
						</div><!-- .xs-item-header END -->
						<div class="xs-item-content">
							<ul class="xs-simple-tag xs-mb-20">
								<li><a class="color-blue" href="">Fortaleciendo De Las Áreas Marinas Protegidas</a></li>
							</ul>

							<a href="#" class="xs-post-title xs-mb-30" style="text-align:justify;">Diseño e implementación del sistema de monitoreo de los ecosistemas marinos</a>

							<ul class="xs-list-with-content">
								<li>L12,760<span>Prometido</span></li>
								<li><span class="number-percentage-count number-percentage" data-value="35" data-animation-duration="3500">0</span>% <span>Financiado</span></li>
								<li>66<span>Días</span></li>
							</ul>
							
							<span class="xs-separetor"></span>
							
							<div class="row xs-margin-0">
								<div class="xs-round-avatar">
									<img src="assets/images/avatar/avatar_3.jpg" alt="">
								</div>
								<div class="xs-avatar-title">
									<a href="#"><span>By</span>Leo Baddabes</a>
								</div>
							</div>
						</div><!-- .xs-item-content END -->
					</div><!-- .xs-popular-item END -->
				</div>
			</div><!-- .row end -->
		</div><!-- .container end -->
	</section>	<!-- End popularCauses version 2 section -->
@endsection
