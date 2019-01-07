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
								<li><a>Fundación</a>
									<ul class="nav-dropdown">
										<li><a href="{{ URL::route('quienes_somos') }}">¿Quiénes somos?</a></li>
										<!-- <li><a>Componentes</a> -->
											<!-- <ul class="nav-dropdown" style="overflow:visible !important;"> -->
												<!-- <li><a href="#">Centro de Documentación</a></li> -->
												<!-- <li><a href="#">Educación Ambiental</a></li> -->
												<!-- <li><a href="#">Observatorio de Desarrollo Sostenible</a></li> -->
											<!-- </ul> -->
										<!-- </li> -->
										<li><a href="{{ URL::route('estructura_organizativa') }}">Estructura Organizativa</a></li>
										<li><a href="{{ URL::route('equipo_trabajo') }}">Equipo de Trabajo</a></li>
										<!-- <li><a href="#">Convenios Interinstitucionales</a></li> -->
										<!-- <li><a href="#">Informes Anuales</a></li> -->
									</ul>
								</li>
								<li><a>Proyectos</a>
									<ul class="nav-dropdown">
										<li><a href="{{URL::route('proyectos',['slug' => str_slug('proyectos ejecutados','-')])}}">Proyectos ejecutados</a></li>
										<li><a href="{{URL::route('proyectos',['slug' => str_slug('proyectos en ejecucion','-')])}}">Proyectos en ejecución</a></li>
									</ul>
								</li>
								<li><a>Sistemas</a>
									<ul class="nav-dropdown">
										<!-- <li><a href="#">Sistema de Monitoreo Multipropósito</a></li> -->
										<li><a href="{{ URL::route('sistema') }}">Repositorio Digital</a></li>
									</ul>
								</li>
								<!-- <li><a>Multimedia</a> -->
									<!-- <ul class="nav-dropdown"> -->
										<!-- <li><a href="#">Videoteca</a></li> -->
										<!-- <li><a href="{{ URL::route('galeria') }}">Galeríade fotos</a></li> -->
									<!-- </ul> -->
								<!-- </li> -->
								<li><a href="{{ URL::route('blog') }}">Blog</a></li>
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
			<!--    CONTENIDO PROYECTOS    -->
			@yield('proyecto_detalle')
			<!--  END CONTENIDO PROYECTOS  -->

			<!--     CONTENIDO EVENTOS     -->
			@yield('evento_detalle')
			<!--    END CONTENIDO EVENTO   -->

			<!--       CONTENIDO BLOG      -->
			@yield('blog_detalle')
			<!--     END CONTENIDO BLOG    -->
			
			<!--   CONTENIDO ACTIVIDADES   -->
			@yield('actividad_detalle')
			<!-- END CONTENIDO ACTIVIDADES -->
			
			<!--     CONTENIDO SISTEMA     -->
			@yield('sistema_detalle')
			<!--   END CONTENIDO SISTEMA   -->
		</main>

		<!-- Footer -->
		<footer class="xs-footer-section page-footer font-small blue-grey lighten-5">
			<div style="background-color: rgba(0, 0, 0, 0.1);">
				<div class="container">
					<!-- Grid row-->
					<div class="row py-2 d-flex align-items-center">
						<!-- Grid column -->
						<div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
							<h6 class="mb-0"></h6>
						</div><!-- Grid column -->
						<!-- Grid column -->
						<div class="col-md-6 col-lg-7 text-center text-md-right">
							<ul class="xs-social-list-v2">
								@foreach($redes as $red)
									<li><a href="{{ $red->url }}" target="_blank" class="color-{{ $red->red }}"><i class="fa fa-{{ $red->red }}"></i></a></li>
								@endforeach
							</ul><!-- .xs-social-list END -->
						</div><!-- Grid column -->
					</div><!-- Grid row-->
				</div>
			</div>
			<!-- Footer Links -->
			<div class="container text-center text-md-left mt-5">
			  <!-- Grid row -->
				<div class="row mt-3 dark-grey-text">
					<!-- Grid column -->
					<div class="col-md-3 col-lg-4 col-xl-3 mb-4 footer-widget">
						<!-- Content -->
						<div class="xs-footer-logo"></div>
						<p>
							Nuestra misión es promover el desarrollo sostenible por medio de la gestión del conocimiento, logrando impulsar la educación ambiental.
						</p>
					</div><!-- Grid column -->
					<!-- Grid column -->
					<div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
						<!-- Links -->
						<h6 class="text-uppercase font-weight-bold">servicios</h6>
						<hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 100%;background-color: #565656;">
						<ul class="xs-footer-list">
							<li><a href="{{ URL::route('alquiler_s') }}">Alquiler de salones</a></li>
						</ul>
					</div><!-- Grid column -->
					<!-- Grid column -->
					<div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
						<!-- Links -->
						<h6 class="text-uppercase font-weight-bold">¡Conocenos más!</h6>
						<hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 100%;background-color: #565656;">
						<ul class="xs-footer-list">
							<li><a href="{{ URL::route('actividad') }}">Actividades</a></li>
							<li><a href="{{ URL::route('blog') }}">Blog</a></li>
							<li><a href="{{ URL::route('contacto') }}">Contacto</a></li>
							<li><a href="{{ URL::route('evento') }}">Eventos</a></li>
							<li><a href="{{ URL::route('proyecto') }}">Proyectos</a></li>
							<li><a href="{{ URL::route('sistema') }}">Sistemas</a></li>
						</ul>
					</div><!-- Grid column -->
					<!-- Grid column -->
					<div class="col-md-4 col-lg-3 col-xl-4 mx-auto mb-md-0 mb-4">
						<!-- Links -->
						<h6 class="text-uppercase font-weight-bold">Contáctenos</h6>
						<hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 100%;background-color: #565656;">
						<ul class="xs-info-list">
							<li><i class="fa fa-map-marker" aria-hidden="true"></i>Boulevard Cangrejal, Colonia El Naranjal,  La Ceiba, Atlántida, Honduras.</li>
							<li><i class="fa fa-phone"></i>+504 2442-2610</li>
							<li><i class="fa fa-envelope-o"></i><a href="mailto:administracionyeventos@credia.hn">info@credia.hn</a></li>
						</ul><!-- .xs-list-with-icon END -->
					</div><!-- Grid column -->
				</div><!-- Grid row -->
			</div><!-- Footer Links -->
			
			<!-- Copyright -->
			<div class="footer-copyright text-black-50 py-3">
				<div class="xs-copyright">
					<div class="row">
						<div class="col-sm-6">
							<div class="xs-copyright-text">
								<p>&copy; Todos los derechos reservados <?php echo "2018 - ".date('Y');?></p>
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
			</div><!-- Copyright -->
		</footer><!-- Footer -->		
		
		
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