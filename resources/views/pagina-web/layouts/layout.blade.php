<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>CREDIA @yield('title')</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="_token" content="{{ csrf_token() }}">
		
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7CRoboto+Slab:400,700" rel="stylesheet">

		<link rel="icon" type="image/png" href="favicon.ico"> 
		
		<!-- Place favicon.ico in the root directory -->
		<link rel="apple-touch-icon" href="apple-touch-icon.png">

		<link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
		
		<link rel="stylesheet" href="{{ asset('assets/css/bootstrap-responsive.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/xsIcon.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/isotope.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
		
		<link rel="stylesheet" href="{{ asset('assets/css/jquery.cslider.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/jquery.bxslider.css') }}" />

		<!--For Plugins external css-->
		<link rel="stylesheet" href="{{ asset('assets/css/plugins.css') }}">

		<!--Theme custom css -->
		<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/style_salon.css') }}">

		<!--Theme Responsive css-->
		<link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}"/>
	</head>
	
	<body>
		<div id="preloader">
			<div class="spinner">
				<div class="double-bounce1"></div>
				<div class="double-bounce2"></div>
			</div>
		</div>

		<header class="xs-header header-transparent">
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
						
						<div class="nav-opacity hidden-xs"></div>
						
						<div class="col-lg-8">
							<ul class="nav-menu">
								<li><a href="{{ URL::route('index') }}">Inicio</a></li>
								<li><a href="">Fundación</a>
									<ul class="nav-dropdown">
										<li><a href="{{ URL::route('quienes_somos') }}">¿Quiénes somos?</a></li>
										<li><a href="">Componentes</a>
											<ul class="nav-dropdown" style="position:static;margin-left: 0px;">
												<li><a href="{{ URL::route('cendoc') }}">Centro de Documentación</a></li>
												<li><a href="{{ URL::route('edu_ambiental') }}">Educación Ambiental</a></li>
												<li><a href="{{ URL::route('observatorio') }}">Observatorio de Desarrollo Sostenible</a></li>
											</ul>
										</li>
										<li><a href="{{ URL::route('estructura_organizativa') }}">Estructura Organizativa</a></li>
										<li><a href="{{ URL::route('equipo_trabajo') }}">Equipo de Trabajo</a></li>
										<li><a href="{{ URL::route('convenio') }}">Convenios Interinstitucionales</a></li>
									{{--<li><a href="{{ URL::route('informe') }}">Informes Anuales</a></li>--}}
									</ul>
								</li>
								<li><a href="">Proyectos</a>
									<ul class="nav-dropdown">
										<li><a href="{{URL::route('proyectos',['slug' => str_slug('ejecutados','-')])}}">Proyectos ejecutados</a></li>
										<li><a href="{{URL::route('proyecto_ejecucion',['slug' => str_slug('ejecucion','-')])}}">Proyectos en ejecución</a></li>
									</ul>
								</li>
								<li><a href="{{ URL::route('sistema') }}">Sistemas</a></li>
								<li><a href="{{ URL::route('multimedia') }}#contenido">Multimedia</a></li>
								<li><a href="{{ URL::route('blog') }}">Blog</a></li>
							</ul><!-- .nav-menu END -->
						</div>
						<div class="xs-navs-button d-flex-center-end col-lg-2">
							<a href="{{ URL::route('contacto') }}" class="btn btn-primary right">Contacto</a>
						</div><!-- .xs-navs-button END -->
					</div><!-- .nav-menus-wrapper .row END -->
				</nav><!-- .xs-menus .fundpress-menu END -->
			</div><!-- .container end -->
		</header>
	
		<main class="xs-main">
			<!--      CONTENIDO INDEX      -->
			@yield('slider_index_seccion')
			@yield('articulos_recent')
			@yield('eventos_recent')
			@yield('proyectos_recent')
			@yield('mision_in')
			@yield('descripcion_in')
			@yield('unete_in')
			@yield('texto_in')
			{{--@yield('actividades_in')--}}
			@yield('voluntarios_in')
			@yield('patrocinadores_in')
			<!--    END CONTENIDO INDEX    -->
			
			<!-- 	      BANNERS          -->
			@yield('banner')
			<!-- 	    END BANNERS        -->

			<!--    CONTENIDO FUNDACIÓN    -->
			@yield('mision_vision_qs')
			@yield('widget_qs')
			@yield('objetivo_qs')
			@yield('antecedentes_qs')
				<!--	 COMPONENTES	-->	
				@yield('cendoc_section')
				@yield('educacion_section')
				@yield('observatorio_section')
				<!--   END COMPONENTES  -->	
			@yield('estructura_section')
			@yield('organigrama_eo')
			@yield('convenios_section')
			@yield('equipo_et')
			<!--  END CONTENIDO FUNDACIÓN  -->

			<!--    CONTENIDO PROYECTOS    -->
			@yield('proyecto_seccion')
			<!--  END CONTENIDO PROYECTOS  -->

			<!--     CONTENIDO EVENTOS     -->
			@yield('evento_seccion')
			<!--   END CONTENIDO EVENTOS   -->

			<!--      CONTENIDO BLOG       -->
			@yield('blog_seccion')
			<!--    END CONTENIDO BLOG     -->

			<!--   CONTENIDO ACTIVIDADES   -->
			@yield('actividades_seccion')
			<!-- END CONTENIDO ACTIVIDADES -->

			<!--       CONTENIDO FAQ       -->
			@yield('faq_seccion')
			<!--     END CONTENIDO FAQ     -->

			<!--    CONTENIDO SERVICIOS    -->
			@yield('servicios_alquiler_seccion')
			<!--  END CONTENIDO SERVICIOS  -->

			<!--  CONTENIDO MULTIMEDIA     -->
			@yield('galeria_seccion')
			@yield('album_seccion')
			@yield('foto_seccion')
			<!-- END CONTENIDO MULTIMEDIA  -->

			<!--     CONTENIDO SISTEMA     -->
			@yield('sistemas_seccion')
			<!--   END CONTENIDO SISTEMA   -->

			<!--   CONTENIDO VOLUNTARIOS   -->
			@yield('voluntarios_fotos_seccion')
			@yield('voluntarios_form_seccion')
			<!-- END CONTENIDO VOLUNTARIOS -->

			<!--     CONTENIDO CONTACTO    -->
			@yield('contacto_seccion')
			<!--   END CONTENIDO CONTACTO  -->
		</main>
	
		<!-- Footer -->
		<footer class="xs-footer-section">
			<div style="background-color:rgba(0, 0, 0, 0.1)">
				<div class="container">
					<div class="row py-2 d-flex">
						<div class="col-md-12 text-md-right">
							<ul class="xs-social-list-v2">
								@foreach($redes as $red)
									<li><a href="{{ $red->url }}" target="_blank" class="color-{{ $red->red }} zoom-in"><i class="fa fa-{{ $red->red }}"></i></a></li>
								@endforeach
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="container mt-5">
				<div class="row">
					<div class="col-lg-3 col-md-6 footer-widget">
						<div class="xs-footer-logo"></div>
						<p>
							Nuestra misión es promover el desarrollo sostenible por medio de la gestión del conocimiento, logrando impulsar la educación ambiental.
						</p>
					</div>
					<div class="col-lg-2 col-md-6 footer-widget">
						<h6 class="text-uppercase widget-title">servicios</h6>
						<hr class="mt-1 mb-3 mx-line">
						<ul class="xs-footer-list">
							<li><a href="{{ URL::route('alquiler_s') }}">Alquiler de salones</a></li>
						</ul>
					</div>
					<div class="col-lg-3 col-md-6 footer-widget">
						<h6 class="text-uppercase widget-title">¡Conocenos más!</h6>
						<hr class="mt-1 mb-3 mx-line">
						<ul class="xs-footer-list">
							<li><a href="{{ URL::route('actividad') }}">Actividades</a></li>
							<li><a href="{{ URL::route('blog') }}">Blog</a></li>
							<li><a href="{{ URL::route('contacto') }}">Contacto</a></li>
							<li><a href="{{ URL::route('evento') }}">Eventos</a></li>
							<li><a href="{{ URL::route('proyecto') }}">Proyectos</a></li>
							<li><a href="{{ URL::route('sistema') }}">Sistemas</a></li>
						</ul>
					</div>
					<div class="col-lg-4 col-md-6 footer-widget">
						<h6 class="text-uppercase widget-title">Contáctenos</h6>
						<hr class="mt-1 mb-3 mx-line">
						<ul class="xs-info-list">
							<li><i class="fa fa-map-marker"></i><a>Boulevard Cangrejal, Colonia El Naranjal,  La Ceiba, Atlántida, Honduras.</a></li>
							<li><i class="fa fa-phone"></i>+504 2442-2610</li>
							<li><i class="fa fa-envelope-o"></i><a href="mailto:info@credia.hn">info@credia.hn</a></li>
						</ul>
					</div>
					<div class="col-md-12">
						<nav class="xs-footer-menu">
							<ul>
								<li><a href="{{ URL::route('faq') }}">Preguntas frecuentes</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>

			<!-- Copyright -->
			<div style="background-color:rgba(0, 0, 0, 0.1)">
				<div class="container py-3">
					<div class="row">
						<div class="col-md-12 col-lg-12">
							<div class="xs-copyright-text">
								<p>&copy; Todos los derechos reservados <?php echo date('Y');?> - Centro Regional de Documentación e Interpretación Ambiental</p>
							</div>
						</div>
					</div>
				</div><!-- Copyright -->
			</div>
			<div class="xs-back-to-top-wraper">
				<a href="#"  onclick="topFunction()" id="myBtn"><i class="fa fa-angle-up"></i></a>
			</div>
		</footer><!-- Footer -->
		
		<script src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script>
		<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('assets/js/jquery.js') }}"></script>
		<script src="{{ asset('assets/js/jquery.mixitup.js') }}"></script>
		<script src="{{ asset('assets/js/plugins.js') }}"></script>
		<script src="{{ asset('assets/js/bootstrap.js') }}"></script>
		<script src="{{ asset('assets/js/modernizr.custom.js') }}"></script>
		<script src="{{ asset('assets/js/jquery.bxslider.js') }}"></script>
		<script src="{{ asset('assets/js/jquery.cslider.js') }}"></script>
		<script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
		<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
		<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
		<script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
		<script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
		<script src="{{ asset('assets/js/spectragram.min.js') }}"></script>
		<script src="{{ asset('assets/js/buttontop.js') }}"></script>
		<script src="{{ asset('assets/js/jquery.inview.js') }}"></script>
		<script src="https://maps.googleapis.com/maps/api/js?v=3&key=AIzaSyCy7becgYuLwns3uumNm6WdBYkBpLfy44k"></script>

		<script src="{{ asset('assets/js/main.js') }}"></script>
		<script src="{{ asset('assets/js/app.js') }}"></script>
		
		@stack('scripts')
	</body>
</html>