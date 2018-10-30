@extends('layouts.layout')

@section('title', 'Contacto -')

@section('welcomecontacto')
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

@section('contacto')
	<!-- contact section -->
	<section class="xs-contact-section-v2">
		<div class="container">
			<div class="xs-contact-container">
				<div class="row">
					<div class="col-lg-6">
						<div class="xs-contact-form-wraper">
							<h4>Escríbanos</h4>
							<form action="{{URL::to('/contactos')}}" method="post" class="xs-contact-form contact-form-v2">
								{{ csrf_field() }}
								<div class="row">
									<div class="col-lg-12 input-group">
										<input type="text" name="nombre" id="nombre" value="{{ old('nombre') }}" class="form-control" placeholder="Nombre completo">
										<div class="input-group-append">
											<div class="input-group-text"><i class="fa fa-user"></i></div>
										</div>
									</div><!-- .input-group END -->
									<div class="col-lg-12 input-group">
										<input type="email" name="correo" id="correo" value="{{ old('correo') }}" class="form-control" placeholder="Correo">
										<div class="input-group-append">
											<div class="input-group-text"><i class="fa fa-envelope-o"></i></div>
										</div>
									</div><!-- .input-group END -->
									<div class="col-lg-12 input-group massage-group">
										<textarea name="mensaje" id="mensaje" value="{{ old('mensaje') }}" placeholder="Ingrese su mensaje" class="form-control" cols="30" rows="10"></textarea>
										<div class="input-group-append">
											<div class="input-group-text"><i class="fa fa-pencil"></i></div>
										</div>
									</div><!-- .input-group END -->
								</div><!-- .row end -->
								<button type="submit" class="btn btn-success">Enviar</button>
							</form><!-- .xs-contact-form #xs-contact-form END -->
						</div><!-- .xs-contact-form-wraper END -->
					</div>
					<div class="col-lg-6">
						<div class="xs-maps-wraper map-wraper-v2">
							<div id="xs-map" class="xs-box-shadow-2"></div>
						</div>
					</div>
				
				</div><!-- .row end -->
			</div><!-- .xs-contact-container END -->
		</div><!-- .container end -->
	
		<!-- contact details section -->
		<!-- <section class="xs-contact-details"> -->
			<!-- <div class="container"> -->
				<!-- <div class="row"> -->
					<!-- <div class="col-md-6 col-lg-4"> -->
						<!-- <div class="xs-contact-details"> -->
							<!-- <div class="xs-widnow-wraper"> -->
								<!-- <div class="xs-window-top"> -->
									<!-- <img src="assets/images/contact/contact-info-img-1.png" alt=""> -->
								<!-- </div> -->
								<!-- <div class="xs-window-back"> -->
									<!-- <div id="xs-multiple-map-1" class="xs-map"></div> -->
								<!-- </div> -->
								<!-- <div class="xs-window-nav"> -->
									<!-- <a href="#" class="xs-window-opener"> -->
										<!-- <i class="fa fa-angle-right"></i> -->
									<!-- </a> -->
								<!-- </div> -->
							<!-- </div> -->
							<!-- xs-widnow-wraper -->
							<!-- <ul class="xs-unorder-list"> -->
								<!-- <li><i class="fa fa-phone color-green"></i>+88 00 11 22 33</li> -->
								<!-- <li><i class="fa fa-envelope-o color-green"></i>name@yourdomain.com</li> -->
								<!-- <li><i class="fa fa-map-marker color-green"></i>Welington City, Beside Pull, Australia</li> -->
							<!-- </ul> -->
						<!-- </div> -->
						<!-- xs-contact-details -->
					<!-- </div> -->
					<!-- <div class="col-md-6 col-lg-4"> -->
						<!-- <div class="xs-contact-details"> -->
							<!-- <div class="xs-widnow-wraper"> -->
								<!-- <div class="xs-window-top"> -->
									<!-- <img src="assets/images/contact/contact-info-img-2.png" alt=""> -->
								<!-- </div> -->
								<!-- <div class="xs-window-back"> -->
									<!-- <div id="xs-multiple-map-2" class="xs-map"></div> -->
								<!-- </div> -->
								<!-- <div class="xs-window-nav"> -->
									<!-- <a href="#" class="xs-window-opener"> -->
										<!-- <i class="fa fa-angle-right"></i> -->
									<!-- </a> -->
								<!-- </div> -->
							<!-- </div> -->
							<!-- xs-widnow-wraper -->
							<!-- <ul class="xs-unorder-list"> -->
								<!-- <li><i class="fa fa-phone color-green"></i>+09 56 43 768</li> -->
								<!-- <li><i class="fa fa-envelope-o color-green"></i>name@yourdomain.com</li> -->
								<!-- <li><i class="fa fa-map-marker color-green"></i>10/A, Hesting City, USA</li> -->
							<!-- </ul> -->
						<!-- </div> -->
						<!-- xs-contact-details -->
					<!-- </div> -->
					<!-- <div class="col-md-6 col-lg-4"> -->
						<!-- <div class="xs-contact-details"> -->
							<!-- <div class="xs-widnow-wraper"> -->
								<!-- <div class="xs-window-top"> -->
									<!-- <img src="assets/images/contact/contact-info-img-3.png" alt=""> -->
								<!-- </div> -->
								<!-- <div class="xs-window-back"> -->
									<!-- <div id="xs-multiple-map-3" class="xs-map"></div> -->
								<!-- </div> -->
								<!-- <div class="xs-window-nav"> -->
									<!-- <a href="#" class="xs-window-opener"> -->
										<!-- <i class="fa fa-angle-right"></i> -->
									<!-- </a> -->
								<!-- </div> -->
							<!-- </div> -->
							<!-- xs-widnow-wraper -->
							<!-- <ul class="xs-unorder-list"> -->
								<!-- <li><i class="fa fa-phone color-green"></i>+00 876 54 34</li> -->
								<!-- <li><i class="fa fa-envelope-o color-green"></i>name@yourdomain.com</li> -->
								<!-- <li><i class="fa fa-map-marker color-green"></i>Protus Thom, Prekunak, Africa</li> -->
							<!-- </ul> -->
						<!-- </div> -->
						<!-- xs-contact-details -->
					<!-- </div> -->
				<!-- </div> -->
			<!-- </div> -->
		<!-- </section>	--><!-- End contact details section --> 
	</section>	<!-- End contact section -->
@endsection

