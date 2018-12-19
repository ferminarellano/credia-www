<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>@yield('title') CREDIA</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7CRoboto+Slab:400,700" rel="stylesheet">

		<link rel="icon" type="image/png" href="/favicon.ico"> 
		
		<!-- Place favicon.ico in the root directory -->
		<link rel="apple-touch-icon" href="apple-touch-icon.png">

		<link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">

		<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/xsIcon.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/isotope.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
	
		<!--For Plugins external css-->
		<link rel="stylesheet" href="{{ asset('assets/css/plugins.css') }}">

		<!--Theme custom css -->
		<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

		<!--Theme Responsive css-->
		<link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" />
	</head>
	
	<body>
		<div id="preloader">
			<div class="spinner">
				<div class="double-bounce1"></div>
				<div class="double-bounce2"></div>
			</div>
		</div> <!-- #preloader -->

		<header class="xs-header-other header-transparent-other">
			<div class="container">
				<nav class="xs-menus">
					<div class="nav-header">
						<div class="nav-toggle"></div>
						<a href="{{ URL::route('index') }}" class="nav-logo">
							<img src="/assets/images/logo.png" alt="CREDIA">
						</a>
					</div> <!-- .nav-header END -->
					
					<div class="nav-menus-wrapper row">
						<div class="xs-logo-wraper col-lg-2 xs-padding-0">
							<a class="nav-brand" href="{{ URL::route('index') }}">
								<img src="/assets/images/logo.png" alt="">
							</a>
						</div><!-- .xs-logo-wraper END -->
						
						<div class="col-lg-9 nav-opacity-other"></div> <!-- .nav-opacity END -->
						
						<div class="col-lg-8">
							<ul class="nav-menu">
								<li><a href="{{ URL::route('index') }}">Inicio</a></li>
								<li><a href="">Fundación</a>
									<ul class="nav-dropdown">
										<li><a href="{{ URL::route('sobrenosotros') }}">¿Quiénes somos?</a></li>
									{{--<li><a href="{{ URL::route('mision') }}">misión</a></li>--}}
									</ul>
								</li>
								<li><a href="{{ URL::route('proyecto') }}">Proyectos</a></li>
								<li><a href="{{ URL::route('evento') }}">Eventos</a></li>
								<li><a href="{{ URL::route('blog') }}">Blog</a></li>
									{{--<li><a href="{{ URL::route('sistema') }}">Sistemas</a></li>--}}
							</ul><!-- .nav-menu END -->
						</div>
						<div class="xs-navs-button d-flex-center-end col-lg-2">
							<a href="{{ URL::route('contacto') }}" class="btn btn-primary right btn-other">Contacto</a>
						</div><!-- .xs-navs-button END -->
					</div><!-- .nav-menus-wrapper .row END -->
				</nav><!-- .xs-menus .fundpress-menu END -->
			</div><!-- .container end -->
		</header>

		<main class="xs-main">
			<!--   CONTENIDO PROYECTOS   -->
			@yield('proyectodetalle')
			<!-- END CONTENIDO PROYECTOS -->

			<!--   CONTENIDO EVENTOS   -->
			@yield('eventodetalle')
			<!-- END CONTENIDO EVENTO-->

			<!--   CONTENIDO BLOG   -->
			@yield('blogdetalle')
			<!-- END CONTENIDO BLOG -->
		</main>

		<footer class="xs-footer-section">
			<div class="container">
				<div class="xs-footer-top-layer">
					<div class="row">
						<div class="col-lg-3 col-md-6 footer-widget xs-pr-20">
							<a href="{{ URL::route('index') }}" class="xs-footer-logo">
								<img src="/assets/images/footer_logo.png" style="">
							</a>
							<p>Nuestra misión es promover el desarrollo sostenible por medio de la gestión del conocimiento, logrando impulsar la educación ambiental.</p>
							<ul class="xs-social-list-v2">
								@foreach($redes as $red)
								<li><a href="{{ $red->url }}" target="_blank" class="color-{{ $red->red }}"><i class="fa fa-{{ $red->red }}"></i></a></li>
								@endforeach
							</ul><!-- .xs-social-list END -->
						</div>
						<div class="col-lg-2 col-md-6 footer-widget">
							<h3 class="widget-title">¡Conocenos más!</h3>
								<ul class="xs-footer-list">
									<li><a href="{{ URL::route('actividad') }}">Actividades</a></li>
									<li><a href="{{ URL::route('blog') }}">Blog</a></li>
									<li><a href="{{ URL::route('contacto') }}">Contacto</a></li>
									<li><a href="{{ URL::route('equipo') }}">Equipo de trabajo</a></li>
									<li><a href="{{ URL::route('proyecto') }}">Proyectos</a></li>
									<li><a href="{{ URL::route('Sistemas') }}">Sistemas</a></li>
								</ul>
						</div>
						<div class="col-lg-4 col-md-6 footer-widget">
							<h3 class="widget-title">Contáctenos</h3>
								<ul class="xs-info-list">
									<li><i class="fa fa-map-marker" aria-hidden="true"></i>Boulevard Cangrejal, Colonia El Naranjal,  La Ceiba, Atlántida, Honduras.</li>
									<li><i class="fa fa-phone"></i>(+504) 2442-2610</li>
									<li><i class="fa fa-envelope-o"></i><a href="mailto:administracionyeventos@credia.hn">info@credia.hn</a></li>
								</ul><!-- .xs-list-with-icon END -->
						</div>
						<div class="col-lg-3 col-md-6 footer-widget">
							<div class="xs-contact-details">
								<div class="xs-widnow-wraper">
									<div class="xs-window-top" style="background-image: url('/assets/images/contacto/contacto-img-1.jpg')"></div>
									<div class="xs-window-back">
										<div id="xs-multiple-map-1" class="xs-map"></div>
									</div>
									<div class="xs-window-nav">
										<a href="#" class="xs-window-opener">
											<i class="fa fa-angle-right"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="xs-copyright">
					<div class="row">
						<div class="col-sm-6">
							<div class="xs-copyright-text">
								<p>&copy; Todos los derechos reservados 2018</p>
							</div>
						</div>
						<div class="col-sm-6">
							<nav class="xs-footer-menu">
								<ul>
									<li><a href="{{ URL::route('faq') }}">Preguntas frecuentes</a></li>
								</ul>
							</nav>
						</div>
					</div>
					
					<div class="xs-back-to-top-wraper">
						<a href="#"  onclick="topFunction()" id="myBtn"><i class="fa fa-angle-up"></i></a>
					</div>
				</div>
			</div>
		</footer>		
		
		
		<script src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script>
		<script src="{{ asset('assets/js/plugins.js') }}"></script>
		<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
		<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
		<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
		<script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
		<script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
		<script src="{{ asset('assets/js/spectragram.min.js') }}"></script>
		<script src="{{ asset('assets/js/buttontop.js') }}"></script>
		<script src="https://maps.googleapis.com/maps/api/js?v=3&key=AIzaSyCy7becgYuLwns3uumNm6WdBYkBpLfy44k"></script>

		<script src="{{ asset('assets/js/main.js') }}"></script>
	</body>
</html>