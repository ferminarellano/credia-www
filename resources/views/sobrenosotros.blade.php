@extends('layouts.layout')

@section('title', 'Sobre nosotros -')

@section('welcomesn')
	<section class="xs-banner-inner-section parallax-window" style="background-image:url('assets/images/backgrounds/about_bg.jpg')">
		<div class="xs-black-overlay"></div>
		<div class="container">
			<div class="color-white xs-inner-banner-content">
				<h2>Sobre nosotros</h2>
				<p>Conoce más sobre la fundación</p>
				<ul class="xs-breadcumb">
					<li class="badge badge-pill badge-primary"><a href="{{ URL::route('index') }}" class="color-white"> Inicio /</a> Conócenos</li>
				</ul>
			</div>
		</div>
	</section>
@endsection

@section('snsection')
	<main class="xs-main">
		<!-- video popup section section -->
	<div class="xs-video-popup-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 content-center">
					<div class="xs-video-popup-wraper">
						<img src="assets/images/video_img.jpg" alt="">
						<div class="xs-video-popup-content">
							<a href="https://www.youtube.com/watch?v=Jha2VAu6fJI" class="xs-video-popup xs-round-btn">
								<i class="fa fa-play"></i>
							</a>
						</div><!-- .xs-video-popup-content end -->
					</div><!-- .xs-video-popup-wraper end -->
				</div>
			</div><!-- .row end -->
		</div><!-- .container end -->
	</div>	<!-- End video popup section section -->

		<!-- video popup section section -->
		<section class="xs-content-section-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-11 content-center">
					<div class="xs-heading xs-mb-100 text-center">
						<h2 class="xs-mb-0 xs-title">Somos una organización sin fines de lucro <span class="color-green">apoyamos</span> buenas causas y cambios positivos para la población de Honduras.</h2>
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
			<div style="padding-top: 50px;" class="row">
					<div class="col-md-4">
						<div class="xs-about-feature">
							<h3>Nuestros Valores</h3>
							<ul class="xs-unorder-list play green-icon">
								<li>Laboriosidad</li>
								<li>Respeto</li>
								<li>Justicia y Responsabilidad</li>
								<li>Honestidad</li>
								<li>Creatividad</li>
							</ul>
						</div>
					</div>
			</div><!-- .row end -->
		</div><!-- .container end -->
	</section>	<!-- End video popup section section -->

		<!-- funfacts section -->
		<div class="xs-funfact-section xs-content-section-padding waypoint-tigger parallax-window" style="background-image: url('assets/images/backgrounds/parallax_1.jpg')">
		<div class="container">
			<div class="row col-lg-10 xs-heading mx-auto">
				<h2 align="center" class="xs-title color-white small">Nuestra fundación ha estado presente por más de 7 años. Hacemos lo mejor para todos.</h2>
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="xs-single-funFact color-white">
						<i class="icon-donation_2"></i>
						<span class="number-percentage-count number-percentage" data-value="10" data-animation-duration="3500">100</span><span>M</span>
						<small>Proyectos</small>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="xs-single-funFact color-white">
						<i class="icon-group"></i>
						<span class="number-percentage-count number-percentage" data-value="25" data-animation-duration="3500">100</span><span>k</span>
						<small>Voluntarios</small>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="xs-single-funFact color-white">
						<i class="icon-children"></i>
						<span class="number-percentage-count number-percentage" data-value="30" data-animation-duration="3500">100</span><span>k</span>
						<small>Niños</small>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="xs-single-funFact color-white">
						<i class="icon-planet-earth"></i>
						<span class="number-percentage-count number-percentage" data-value="14" data-animation-duration="3500">8</span><span>k</span>
						<small>Municipios</small>
					</div>
				</div>
			</div><!-- .row end -->
		</div><!-- .container end -->
		<div class="xs-black-overlay"></div>
	</div>	<!-- End funfacts section -->

		<!-- what we do section -->
		<section class="xs-section-padding">
		<div class="container">
			<div class="xs-heading row xs-mb-60">
				<div class="col-md-9 col-xl-9">
					<h2 class="xs-title">Qué hacemos</h2>
					<!--<span class="xs-separetor dashed"></span>-->
					<!--<p>It allows you to gather monthly subscriptions from fans to help fund your creative projects. They also encourage their users to offer rewards to fans as a way to repay them for their support.</p>-->
				</div><!-- .xs-heading-title END -->
			</div><!-- .row end -->
			<div class="row">
				<div class="col-md-6 col-lg-3">
					<div class="xs-service-promo">
						<span class="icon-water color-orange"></span>
						<h5>Desarrollo <br>y sostenibilidad</h5>
						<p>663 million people drink dirty water. Learn how access to clean water can improve health, boost local economies.</p>
					</div><!-- .xs-service-promo END -->
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="xs-service-promo">
						<span class="icon-groceries color-red"></span>
						<h5>Cultura <br>y recreación</h5>
						<p>663 million people drink dirty water. Learn how access to clean water can improve health, boost local economies.</p>
					</div><!-- .xs-service-promo END -->
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="xs-service-promo">
						<span class="icon-heartbeat color-purple"></span>
						<h5>Ecoturismo <br>y educación ambiental</h5>
						<p>663 million people drink dirty water. Learn how access to clean water can improve health, boost local economies.</p>
					</div><!-- .xs-service-promo END -->
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="xs-service-promo">
						<span class="icon-open-book color-green"></span>
						<h5>Gestión <br>del conocimiento</h5>
						<p>663 million people drink dirty water. Learn how access to clean water can improve health, boost local economies.</p>
					</div><!-- .xs-service-promo END -->
				</div>
			</div><!-- .row end -->
		</div><!-- .container end -->
	</section>	<!-- End what we do section -->

		<!-- team section -->
		<section class="xs-section-padding bg-gray">
		<div class="container">
			<div class="xs-heading row xs-mb-60">
				<div class="col-md-9 col-xl-9">
					<h2 class="xs-title">Nuestro equipo</h2>
					<span class="xs-separetor dashed"></span>
					<p>Nuestra fundación esta compuesta por el personal adecuado, los mejores profesionales en su labor, unete se parte de esta gran familia con voluntariados y más.</p>
				</div><!-- .xs-heading-title END -->
			</div><!-- .row end -->
			<div class="row xs-mb-60">
				<div class="col-md-6 col-lg-3">
					<div class="xs-single-team">
						<img src="assets/images/team/team_1.png" alt="">
						<div class="xs-team-content">
							<h4>Lic. Roberto Calix</h4>
							<small>Director Ejecutivo</small>
							<svg class="xs-svgs" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 270 138">
								<path class="fill-red" d="M375,3294H645v128a10,10,0,0,1-10,10l-250-20a10,10,0,0,1-10-10V3294Z" transform="translate(-375 -3294)"/>
							</svg>
						</div><!-- .xs-team-content END -->
					</div><!-- .xs-single-team END -->
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="xs-single-team">
						<img src="assets/images/team/team_2.png" alt="">
						<div class="xs-team-content">
							<h4>Lic. Mirian López</h4>
							<small>Administración</small>
							<svg class="xs-svgs" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 270 138">
								<path class="fill-purple" d="M375,3294H645v128a10,10,0,0,1-10,10l-250-20a10,10,0,0,1-10-10V3294Z" transform="translate(-375 -3294)"/>
							</svg>
						</div><!-- .xs-team-content END -->
					</div><!-- .xs-single-team END -->
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="xs-single-team">
						<img src="assets/images/team/team_3.png" alt="">
						<div class="xs-team-content">
							<h4>Lic. Cenaida Moncada</h4>
							<small>Educación Ambiental</small>
							<svg class="xs-svgs" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 270 138">
								<path class="fill-blue" d="M375,3294H645v128a10,10,0,0,1-10,10l-250-20a10,10,0,0,1-10-10V3294Z" transform="translate(-375 -3294)"/>
							</svg>
						</div><!-- .xs-team-content END -->
					</div><!-- .xs-single-team END -->
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="xs-single-team">
						<img src="assets/images/team/team_4.png" alt="">
						<div class="xs-team-content">
							<h4>Ing. Fermin Arellano</h4>
							<small>Centro de Documentación</small>
							<svg class="xs-svgs" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 270 138">
								<path class="fill-orange" d="M375,3294H645v128a10,10,0,0,1-10,10l-250-20a10,10,0,0,1-10-10V3294Z" transform="translate(-375 -3294)"/>
							</svg>
						</div><!-- .xs-team-content END -->
					</div><!-- .xs-single-team END -->
				</div>
			</div><!-- .row END -->
			<div class="text-center">
				<a href="#" class="btn btn-success">
					Unete a nosotros
				</a>
			</div>
		</div><!-- .container end -->
	</section>	<!-- End team section -->

		<!-- partners section -->
		<section class="xs-partner-section" style="background-image: url('assets/images/map.png');">
		<div class="container">
			<div class="row">
				<div class="col-lg-5">
					<div class="xs-partner-content">
						<div class="xs-heading xs-mb-40">
							<h2 class="xs-mb-0 xs-title">Principios <span class="color-green">institucionales.</span></h2>
						</div>
						<p align="justify">Los principios que guian el accionar de la fundación en cuanto a conducta por parte de cada uno de los miembros de esta gran familia son los siguientes.</p>
						
						<ul style="padding-bottom:35px;" class="xs-unorder-list play green-icon">
							<li>Compromiso Socio-ambiental</li>
							<li>Democracia</li>
							<li>Transparencia</li>
							<li>Flexibilidad e innovación</li>
							<li>Eticidad</li>
							<li>Pluralismo</li>
						</ul>
						
						<a href="#" class="btn btn-primary bg-orange">
							Únete a nosotros ahora
						</a>
					</div>
				</div>
				<div class="col-lg-7">
					<ul class="fundpress-partners">
						<li><a href="#"><img src="assets/images/partner/client_1.png" alt=""></a></li>
						<li><a href="#"><img src="assets/images/partner/client_2.png" alt=""></a></li>
						<li><a href="#"><img src="assets/images/partner/client_3.png" alt=""></a></li>
						<li><a href="#"><img src="assets/images/partner/client_4.png" alt=""></a></li>
						<li><a href="#"><img src="assets/images/partner/client_5.png" alt=""></a></li>
					</ul>
				</div>
			</div><!-- .row end -->
		</div><!-- .container end -->
	</section>	<!-- End partners section -->
	</main>
@endsection