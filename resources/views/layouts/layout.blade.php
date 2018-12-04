<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>@yield('title') CREDIA</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7CRoboto+Slab:400,700" rel="stylesheet">

		<link rel="icon" type="image/png" href="favicon.ico"> 
		
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
		
		<!--<link rel="stylesheet" href="{{ asset('assets/css/colors/color1.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/colors/color2.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/colors/color3.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/colors/color4.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/colors/color5.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/colors/color6.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/colors/color7.css') }}">-->
	
		<!--For Plugins external css-->
		<link rel="stylesheet" href="{{ asset('assets/css/plugins.css') }}">

		<!--Theme custom css -->
		<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

		<!--Theme Responsive css-->
		<link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" />
		
		<!-- use only color version -->
		<!-- <link rel='stylesheet' type='text/css' href='assets/css/colors/color-1.css' > -->
	</head>
	<body>
	<!--[if lt IE 10]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->

	<div id="preloader">
		<div class="spinner">
			<div class="double-bounce1"></div>
			<div class="double-bounce2"></div>
		</div>
	</div> <!-- #preloader -->
	
	<!--<div class="colors">
		<a href="#" class="btn btn-primary panel_opener"><i class="colors_panel"></i></a>
		<div class="colors_panel">
			<h5>Colors</h5>
			<a class="color1" data-val="color1"></a>
			<a class="color2" data-val="color2"></a>
			<a class="color3 active" data-val="color3"></a>
			<a class="color4" data-val="color4"></a>
			<a class="color5" data-val="color5"></a>
			<a class="color6" data-val="color6"></a>
			<a class="color7" data-val="color7"></a>
		</div>
	</div>-->

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
							<!-- <li><a href="{{ URL::route('sobrenosotros') }}">Fundación</a></li> -->
							<li><a href="">Fundación</a>
								<ul class="nav-dropdown">
									{{--<li><a href="{{ URL::route('equipo') }}">Equipo</a></li>--}}
									<li><a href="{{ URL::route('sobrenosotros') }}">Fundación</a></li>
									{{--<li><a href="{{ URL::route('mision') }}">misión</a></li>--}}
								</ul>
							</li>
							<li><a href="{{ URL::route('proyecto') }}">Proyectos</a></li>
							<li><a href="{{ URL::route('evento') }}">Eventos</a>
								<!-- <ul class="nav-dropdown"> -->
									{{-- <li><a href="{{ URL::route('evento') }}">Eventos</a></li> --}}
									{{-- <li><a href="{{ URL::route('eventodetalle') }}">Evento detalle</a></li> --}}
								<!-- </ul> -->
							</li>
							<li><a href="{{ URL::route('blog') }}">Blog</a>
								<!-- <ul class="nav-dropdown"> -->
									{{-- <li><a href="{{ URL::route('blog') }}">Blog</a></li> --}}
									{{-- <li><a href="{{ URL::route('blogdetalle') }}">Blog detalle</a></li> --}}
								<!-- </ul> -->
							</li>
							<li><a href="{{ URL::route('index') }}">Sistemas</a></li>
							<!-- <li><a href="#">Páginas</a> -->
								<!-- <ul class="nav-dropdown"> -->
									{{-- <li><a href="{{ URL::route('donacion') }}">donación</a></li> --}}
									{{-- <li><a href="{{ URL::route('galeria') }}">galería</a></li> --}}
									{{-- <li><a href="{{ URL::route('precio') }}">precio</a></li> --}}
									{{-- <li><a href="{{ URL::route('servicio') }}">servicios</a></li> --}}
									{{-- <li><a href="{{ URL::route('voluntario') }}">voluntarios</a></li> --}}
								<!-- </ul> -->
							<!-- </li> -->
						</ul><!-- .nav-menu END -->
					</div>
					<div class="xs-navs-button d-flex-center-end col-lg-2">
						<a href="{{ URL::route('contacto') }}" class="btn btn-primary right">Contacto</a>
					</div><!-- .xs-navs-button END -->
				</div><!-- .nav-menus-wrapper .row END -->
			</nav><!-- .xs-menus .fundpress-menu END -->
		</div><!-- .container end -->
	</header>

<!--   CONTENIDO INDEX   -->
	@yield('welcome_in')
	@yield('mision_in')
	@yield('proyectos_in')
	@yield('texto_in')
	@yield('descripcion_in')
	@yield('unete_in')
	@yield('actividades_in')
	@yield('voluntarios_in')
	@yield('eventos_in')
	@yield('patrocinadores_in')
	{{--@yield('revista_in')--}}
<!-- END CONTENIDO INDEX -->

<!--   CONTENIDO SOBRE NOSOTROS   -->
	@yield('welcomesn')
	@yield('video_sn')
	@yield('contenido_video_sn')
	@yield('funfacts_sn')
	@yield('quehacemos_sn')
	@yield('team_sn')
<!-- END CONTENIDO SOBRE NOSOTROS -->

<!--   CONTENIDO PROYECTOS   -->
	@yield('welcomeproyecto')
	@yield('proyectosection')
<!-- END CONTENIDO PROYECTOS -->

<!--   CONTENIDO EVENTOS   -->
	@yield('welcomeevento')
	@yield('eventosection')
<!-- END CONTENIDO EVENTOS -->

<!--   CONTENIDO EVENTO DETALLE   -->
	@yield('welcomeedetalle')
<!-- END CONTENIDO EVENTO DETALLE -->

<!--   CONTENIDO BLOG   -->
	@yield('welcomeblog')
	@yield('blogsection')
<!-- END CONTENIDO BLOG -->

<!--   CONTENIDO BLOG DETALLE   -->
	@yield('welcomebdetalle')
<!-- END CONTENIDO BLOG DETALLE -->

<!--   CONTENIDO DONACION-NOW   -->
	@yield('welcomedonacion')
	@yield('promo')
<!-- END CONTENIDO DONACION-NOW -->

<!--   CONTENIDO FAQ   -->
	@yield('welcomefaq')
	@yield('newsletter')
<!-- END CONTENIDO FAQ -->

<!--   CONTENIDO MISION   -->
	@yield('welcomemision')
	@yield('loquehacemos')
<!-- END CONTENIDO MISION -->

<!--   CONTENIDO GALERIA   -->
	@yield('welcomegaleria')
	@yield('galeria')
<!-- END CONTENIDO GALERIA -->

<!--   CONTENIDO PRECIO   -->
	@yield('welcomeprecio')
	@yield('emergente')
<!-- END CONTENIDO PRECIO -->

<!--   CONTENIDO SERVICIO   -->
	@yield('welcomeservicio')
	@yield('promocionservicio')
<!-- END CONTENIDO SERVICIO -->

<!--   CONTENIDO EQUIPO   -->
	@yield('welcometeam')
	@yield('team')
<!-- END CONTENIDO EQUIPO -->

<!--   CONTENIDO VOLUNTARIOS   -->
	@yield('welcome_vol')
	@yield('team_vol')
	@yield('voluntarios_vol')
<!-- END CONTENIDO VOLUNTARIOS -->

<!--   CONTENIDO CONTACTO   -->
	@yield('welcomecontacto')
	@yield('contacto')
<!-- END CONTENIDO CONTACTO -->

	<footer class="xs-footer-section">
		<div class="container">
			<div class="xs-footer-top-layer">
				<div class="row">
					<div class="col-lg-3 col-md-6 footer-widget xs-pr-20">
						<a href="{{ URL::route('index') }}" class="xs-footer-logo">
							<img src="/assets/images/footer_logo.png">
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
								<li><a href="{{ URL::route('blog') }}">Blog</a></li>
								<li><a href="#">Componentes</a></li>
								<li><a href="{{ URL::route('contacto') }}">Contacto</a></li>
								<li><a href="{{ URL::route('equipo') }}">Equipo de trabajo</a></li>
								<li><a href="{{ URL::route('proyecto') }}">Proyectos</a></li>
								<li><a href="#">Sostenibilidad</a></li>
							</ul>
					</div>
					<div class="col-lg-3 col-md-6 footer-widget">
						<div class="widget-footer recent-posts">
							<h3 class="widget-title">Tendencias</h3> 
								<ul class="xs-recent-post-widget">
									<li>
										<div class="posts-thumb float-left"> 
											<a href="#">
												<img alt="img" class="img-responsive" src="/assets/images/news_feeds_1.jpg">
												<div class="xs-entry-date">
													<span class="entry-date d-block">21</span>
													<span class="entry-month d-block">dec</span>
												</div>
												<div class="xs-black-overlay bg-aqua"></div>
											</a>
										</div><!-- .posts-thumb END -->
										<div class="post-info">
											<h4 class="entry-title">
												<a href="#">Child Care Centers</a>
											</h4>
											<div class="post-meta">
												<span class="comments-link">
													<i class="fa fa-comments-o"></i>
													<a href="">300 Comments</a>
												</span><!-- .comments-link -->
											</div>
										</div><!-- .post-info END -->
											<div class="clearfix"></div>
									</li><!-- 1st post end-->
									<li>
										<div class="posts-thumb float-left"> 
											<a href="#">
												<img alt="img" class="img-responsive" src="/assets/images/news_feeds_1.jpg">
												<div class="xs-entry-date">
													<span class="entry-date d-block">23</span>
													<span class="entry-month d-block">sep</span>
												</div>
												<div class="xs-black-overlay bg-aqua"></div>
											</a>
										</div><!-- .posts-thumb END -->
										<div class="post-info">
											<h4 class="entry-title">
												<a href="#">Disaster Relief</a>
											</h4>
											<div class="post-meta">
												<span class="comments-link">
													<i class="fa fa-comments-o"></i>
													<a href="">35 Comments</a>
												</span><!-- .comments-link -->
											</div>
										</div><!-- .post-info END -->
										<div class="clearfix"></div>
									</li><!-- 2nd post end-->
								</ul>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 footer-widget">
						<h3 class="widget-title">Contáctenos</h3>
							<ul class="xs-info-list">
								<li><i class="fa fa-map-marker" aria-hidden="true"></i>Boulevard Cangrejal, Colonia El Naranjal,  La Ceiba, Atlántida, Honduras.</li>
								<li><i class="fa fa-phone"></i>(+504) 2442-2610</li>
								<li><i class="fa fa-envelope-o"></i><a href="mailto:administracionyeventos@credia.hn">administracionyeventos@credia.hn</a></li>
							</ul><!-- .xs-list-with-icon END -->
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
								<li><a href="#">Ayuda</a></li>
								<li><a href="#">Soporte</a></li>
							</ul>
						</nav>
					</div>
				</div>
				<!--<div class="xs-back-to-top-wraper">
					<a href="#" class="xs-back-to-top"><i class="fa fa-angle-up"></i></a>
				</div>-->
				
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