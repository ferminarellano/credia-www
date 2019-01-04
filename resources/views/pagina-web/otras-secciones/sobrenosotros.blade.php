@extends('pagina-web.layouts.layout')

<?php
	$pagination_range = 2;
?>

@section('title', 'conocenos -')

@section('welcomesn')
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

@section('video_sn')
	<!-- <div class="xs-video-popup-section"> -->
		<!-- <div class="container"> -->
			<!-- <div class="row"> -->
				<!-- <div class="col-lg-8 content-center"> -->
					<!-- <div class="xs-video-popup-wraper"> -->
						<!-- <img src="assets/images/video_img.jpg" alt=""> -->
						<!-- <div class="xs-video-popup-content"> -->
							<!-- <a href="https://youtu.be/ar1rtzH-CqM" class="xs-video-popup xs-round-btn"> -->
								<!-- <i class="fa fa-play"></i> -->
							<!-- </a> -->
						<!-- </div> -->
					<!-- </div> -->
				<!-- </div> -->
			<!-- </div> -->
		<!-- </div> -->
	<!-- </div>	 -->
@endsection

@section('contenido_video_sn')
	<!-- video popup section section -->
	<section class="xs-content-section-padding-conocenos">
		<div class="container">
			<div class="row">
				<div class="col-lg-11 content-center">
					<div class="xs-heading xs-mb-100 text-center">
						<h2 class="xs-mb-0 xs-title" style="text-align:center;">Somos una organización sin fines de lucro <span class="color-green">apoyamos</span> buenas causas y cambios positivos para la población de Honduras.</h2>
					</div>
				</div>
			</div><!-- .row end -->
			<div class="row">
				<div class="col-md-6">
					<div class="xs-about-feature">
						<h3>Nuestra Misión</h3>
						<p align="justify" class="lead">Promover el desarrollo sostenible mediante la gestión del conocimiento, facilitando la toma de decisiones 
						para la planificación ordenada del territorio, impulsando la educación ambiental, el turismo sostenible, las áreas protegidas, 
						la cultura y la recreación en el Corredor Biológico del Caribe Hondureño.</p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="xs-about-feature">
						<h3>Nuestra Visión</h3>
						<p align="justify" class="lead">Ser un centro innovador de documentación e interpretación ambiental y punto de encuentro 
						con la naturaleza que promueve la gestión del conocimiento del Corredor Biológico del Caribe Hondureño, 
						facilitando la toma de decisiones en el territorio, reconocida nacional e internacionalmente..</p>
					</div>
				</div>
			</div><!-- .row end -->
		</div><!-- .container end -->
	</section>	<!-- End video popup section section -->
@endsection

@section('widget_sn')
	<!-- funfacts section -->
	<div class="xs-funfact-section waypoint-tigger parallax-window" style="background-color:#011b58;">
		<div class="container waypoint-padding">
			<div class="row col-lg-10 xs-heading mx-auto">
				<h2 align="center" class="xs-title color-white small">Nuestra fundación ha estado presente por más de 7 años. Hacemos lo mejor para todos.</h2>
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="xs-single-funFact color-white">
						<i class="icon-donation_2"></i>
						<span class="number-percentage-count number-percentage" data-value="10" data-animation-duration="3500">100</span><span></span>
						<small>Proyectos</small>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="xs-single-funFact color-white">
						<i class="icon-group"></i>
						<span class="number-percentage-count number-percentage" data-value="25" data-animation-duration="3500">100</span><span></span>
						<small>Voluntarios</small>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="xs-single-funFact color-white">
						<i class="icon-children"></i>
						<span class="number-percentage-count number-percentage" data-value="10000" data-animation-duration="3500">100</span><span></span>
						<small>Niños</small>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="xs-single-funFact color-white">
						<i class="icon-planet-earth"></i>
						<span class="number-percentage-count number-percentage" data-value="8" data-animation-duration="3500">8</span><span></span>
						<small>Municipios</small>
					</div>
				</div>
			</div><!-- .row end -->
		</div><!-- .container end -->
	</div>	<!-- End funfacts section -->
@endsection

@section('quehacemos_sn')
	<!-- objetivo section -->
	<section class="xs-section-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="xs-fature-causes-deatils" style="margin-top:45px;">
						<h3>Objetivo estratégico institucional</h3>
						<p style="color:#6acaf0;">
							Fortalecer la gestión ambiental y el desarrollo sostenible, bajo un enfoque de gestión
							del conocimiento como línea conductora vinculada con el manejo del Agua, bosques, suelo,
							cambio climático, gestión integral del riesgo, promocionando el ecoturismo, la cultura y
							la recreación del <span>Corredor Biológico del Caribe</span>
						</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="xs-causes-images">
						<img src="assets/images/causes/causes_12.jpg" class="d-block" alt="">
					</div><!-- .xs-causes-images END -->
				</div>
			</div><!-- .row end -->
		</div><!-- .container end -->
	</section>	<!-- objetivo list section -->
	
	<!-- Antecedentes section -->
	<section class="xs-section-padding bg-gray-2">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="xs-causes-images" style="margin-top:35px;">
						<img src="assets/images/causes/causes_11.jpg" class="d-block" alt="">
					</div><!-- .xs-causes-images END -->
				</div>
				<div class="col-lg-8">
					<div class="xs-fature-causes-deatils">
						<h3> Nuestra <span class="color-green">fundación</span></h3>
						<p>
							Creada el 31 de Octubre 2011, bajo el objetivo de fortalecer el acceso a la información socio ambiental de Honduras, 
							mediante la implementación de un modelo de gestión basado en el fortalecimiento de redes y promoción del análisis
							estratégico de los procesos sociales, económicos y ambientales, para la toma de decisiones participativas.
						</p>
						<h5><span class="color-green">Componentes</span></h5>
						<ul class="xs-unorder-list">
							<li><i class="fa fa-circle color-light-green"></i>Adaptación, Agua, Bosques y Suelos.</li>
							<li><i class="fa fa-circle color-light-green"></i>Cambio Climatico y Gestión Integral de Riesgos.</li>
							<li><i class="fa fa-circle color-light-green"></i>Interpretación y Educación Ambiental.</li>
							<li><i class="fa fa-circle color-light-green"></i>Observatorio de Desarrollo Sostenible (ODS).</li>
						</ul>
					</div>
				</div>
			</div><!-- .row end -->
		</div><!-- .container end -->
	</section>	<!-- Antecedentes section -->
	
	<!-- Organigrama section section -->
	<section class="xs-content-section-padding-conocenos organigram-responsive">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 content-center">
					<h2 class="xs-title" style="color:#011b58;font-weight:900;">Organigrama</h2>
				</div>
				<div class="col-lg-9 content-center">
					<div class="xs-heading xs-mb-100 text-center">
						<div class="organigrama">
							<ul>
								<li>
								  <a href="#" style="width:170px;">Asamblea General</a>
									<ul>
										<li><a href="#" style="width:170px;">Junta Directiva</a>
											<ul>
												<li><a href="#" style="width:170px;">Dirección Ejecutiva</a>
													<ul>
														<li id="line4"><a href="#">Administración y Finanzas</a></li>
															<ul>
																<li id="line5"><a href="#" style="width:170px;">Promoción y Mercadeo</a></li>
																	<ul>
																		<li id="line6" style="float:right;margin-top:-50px;"><a href="#" style="width:170px;">Centro de Documentación</a></li>
																			<ul>		
																				<li><a href="#">Asistencia Técnica y Gestión de proyectos</a>
																					<ul>
																						<li>
																							<a href="#" style="width:170px;">Observatorio de desarrollo sostenible</a>
																						</li>
																						<li>
																							<a href="#" style="width:170px;">Cambio Climático y Gestión Integral de Riesgos</a>
																						</li>
																						<li>
																							<a href="#" style="width:170px;">Interpretación y Educación Ambiental</a>
																						</li>
																						<li>
																							<a href="#" style="width:170px;height: 69.78px">Agua, bosques y Suelos</a>
																						</li>
																					</ul>
																				</li>
																			</ul>
																	</ul>
															</ul>
													</ul>
												</li>
											</ul>
										</li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>	
	<!-- Organigrama section section -->
@endsection

@section('equipo_sn')
	@if(count($empleados) > 0)
		<!-- equipo section -->
		<section class="xs-section-padding bg-gray">
			<div class="container">
				<div class="xs-heading row xs-mb-60">
					<div class="col-md-12 col-xl-12">
						<h2 class="xs-title" style="color:#a6ce39;">Nuestro equipo</h2>
						<!-- <span class="xs-separetor dashed"></span> -->
						<p style="color:#011b58;text-align:justify;">Nuestra fundación esta compuesta por el personal adecuado, los mejores profesionales en su labor, unete se parte de esta gran familia.</p>
					</div><!-- .xs-heading-title END -->
				</div><!-- .row end -->
				<div class="row xs-mb-60">
					@foreach($empleados as $empleado)
						<div class="col-md-6 col-lg-3">
							<div class="xs-single-team">
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
				</div><!-- .row END -->
					@if($empleados->count() > 0)
					<!-- pagination -->
					<div>
						<ul class="pagination justify-content-center xs-pagination">
							<li class="page-item {{ $empleados->previousPageUrl() == null ? 'disabled' : '' }}">
								<a class="page-link" href="{{ $empleados->previousPageUrl() ?? '#' }}" aria-label="Previous">
									<i class="fa fa-angle-left"></i>
								</a>
							</li>
							@if ($empleados->currentPage() > 1+$pagination_range )
								<li class="page-item">
									<a class="page-link" href="{{ $empleados->url(1) ?? '#' }}">{{ 1 }}</a>
								</li>

								@if ($empleados->currentPage() > 1+$pagination_range+1 )
									<li class="page-item disabled">
										<span class="page-link">&hellip;</span>
									</li>
								@endif
							@endif
							@for ($i=-$pagination_range; $i<=$pagination_range; $i++)
								@if ($empleados->currentPage()+$i > 0 && $empleados->currentPage()+$i <= $empleados->lastPage())
									<li class="page-item {{ $i==0 ? 'active' : '' }}">
										<a class="page-link" href="{{ $empleados->url($empleados->currentPage()+$i) }}">{{ $empleados->currentPage()+$i }}</a>
									</li>
								@endif
							@endfor
							@if ($empleados->currentPage() < $empleados->lastPage()-$pagination_range )	
								@if ($empleados->currentPage() < $empleados->lastPage()-$pagination_range-1 )
									<li class="page-item disabled">
										<span class="page-link">&hellip;</span>
									</li>
								@endif
								<li class="page-item">
									<a class="page-link" href="{{ $empleados->url($empleados->lastPage()) ?? '#' }}">{{ $empleados->lastPage() }}</a>
								</li>
							@endif
							<li class="page-item {{ $empleados->nextPageUrl()==null ? 'disabled' : '' }}">
								<a class="page-link " href="{{ $empleados->nextPageUrl() ?? '#' }}" aria-label="Next">
									<i class="fa fa-angle-right"></i>
								</a>
							</li>
						</ul>
					</div><!-- End pagination -->
				@endif
			</div><!-- .container end -->
		</section>	<!-- End team section -->
	@endif
@endsection
