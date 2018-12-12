@extends('layouts.layout')

@section('title', 'Servicios -')

@section('welcomeservicio')
	<section class="xs-banner-inner-section parallax-window" style="background-image:url(/{{$foto}})">
		<div class="xs-black-overlay"></div>
		<div class="container">
			<div class="color-white xs-inner-banner-content">
				<h2>{{$titulo}}</h2>
				<p>{{$contenido}}</p>
			</div>
		</div>
	</section>
@endsection

@section('promocionservicio')
	<!-- video popup section section -->
	<section class="xs-pricing-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6">
					<div class="xs-single-pricing-table">
						<div class="xs-pricing-header" style="background-image:url(assets/images/pricing/pricing_1.jpg);background-repeat: round;height: 250px;">
							<!-- <h2> -->
								<!-- $90<sub>/mo</sub> -->
							<!-- </h2> -->
						</div>
						<div class="xs-pricing-content" style="height:300px;">
							<h2 class="xs-pricing-title">Repositorio Digital</h2>
							<!-- <ul class="xs-list"> -->
								<!-- <li><i class="fa fa-check"></i>Pediaric Facilities</li> -->
								<!-- <li><i class="fa fa-check"></i>Emergancy Care</li> -->
								<!-- <li class="uncheked"><i class="fa fa-times"></i><del>Educational Facilities</del></li> -->
								<!-- <li class="uncheked"><i class="fa fa-times"></i><del>Vaccines Facilities</del></li> -->
								<!-- <li><i class="fa fa-check"></i>Pure Water Facilites</li> -->
							<!-- </ul> -->
							<a href="#" class="btn btn-primary">
								Ir
							</a>
						</div><!-- .xs-pricing-content END -->
					</div><!-- .xs-single-pricing-table END -->
				</div>
				<div class="col-lg-6 col-md-6">
					<div class="xs-single-pricing-table pricing-red">
						<div class="xs-pricing-header" style="background-image:url(assets/images/pricing/pricing_1.jpg);background-repeat: round;height: 250px;">
							<!-- <h2> -->
								<!-- $189<sub>/mo</sub> -->
							<!-- </h2> -->
						</div>
						<div class="xs-pricing-content" style="height:300px;">
							<h2 class="xs-pricing-title">Sistema de monitoreo multiproposito</h2>
							<!-- <ul class="xs-list"> -->
								<!-- <li><i class="fa fa-check"></i>Pediaric Facilities</li> -->
								<!-- <li><i class="fa fa-check"></i>Emergancy Care</li> -->
								<!-- <li><i class="fa fa-check"></i>Educational Facilities</li> -->
								<!-- <li class="uncheked"><i class="fa fa-times"></i><del>Vaccines Facilities</del></li> -->
								<!-- <li><i class="fa fa-check"></i>Pure Water Facilites</li> -->
							<!-- </ul> -->
							<a href="#" class="btn btn-primary">
								Ir
							</a>
						</div><!-- .xs-pricing-content END -->
					</div><!-- .xs-single-pricing-table .v-red END -->
				</div>
			</div><!-- .row end -->
		</div><!-- .container end -->
	</section>	<!-- End video popup section section -->
		
	<!-- feature details section -->
	<section class="xs-section-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-7">
					<div class="xs-feature-text-content">
						<div class="xs-heading">
							<h2>With your help</h2>
							<h3 class="xs-title" data-title="Features">We’ve funded 33,537 water projects for 10 million people around the world.</h3>
							<span class="xs-separetor bg-bondiBlue"></span>
						</div>
						<p>Nancee was referred to the Children of the Night shelter home after being rescued from sex trafficking by the Colorado FBI. During her stay she completed her GED (High School Equivalency Exam) and she successfully completed Business 01 and English 28 at the local community college. Nancee enjoyed her boxing hobby.</p>
						<a href="#" class="btn btn-secondary bg-bondiBlue">see more impact</a>
					</div><!-- .xs-feature-text-content END -->
				</div>
				<div class="col-lg-5">
					<div class="xs-feature-image-box image-1">
						<img src="assets/images/feature-image-1.png" alt="">
					</div>
					<div class="xs-feature-image-box image-2">
						<img src="assets/images/feature-image-2.png" alt="">
					</div>
				</div>
			</div><!-- .row END -->
		</div><!-- .container END -->
	</section><!-- End feature details section -->
@endsection
