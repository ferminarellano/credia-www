@extends('layouts.layout')

@section('title', 'Precios -')

@section('welcomeprecio')
	<section class="xs-banner-inner-section parallax-window" style="background-image:url('assets/images/backgrounds/pricing_bg.jpg')">
		<div class="xs-black-overlay"></div>
		<div class="container">
			<div class="color-white xs-inner-banner-content">
				<h2>Pricing</h2>
				<p>Give a helping hand for poor people</p>
				<ul class="xs-breadcumb">
					<li class="badge badge-pill badge-primary"><a href="{{ URL::route('index') }}" class="color-white"> Inicio /</a> Precios</li>
				</ul>
			</div>
		</div>
	</section>
@endsection

@section('emergente')
	<main class="xs-main">
		<!-- video popup section section -->
		<section class="xs-pricing-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="xs-single-pricing-table">
							<div class="xs-pricing-header" style="background-image:url(assets/images/pricing/pricing_1.jpg)">
								<h2>
									$90<sub>/mo</sub>
								</h2>
							</div>
							<div class="xs-pricing-content">
								<h2 class="xs-pricing-title">Basic</h2>
								<ul class="xs-list">
									<li><i class="fa fa-check"></i>Pediaric Facilities</li>
									<li><i class="fa fa-check"></i>Emergancy Care</li>
									<li class="uncheked"><i class="fa fa-times"></i><del>Educational Facilities</del></li>
									<li class="uncheked"><i class="fa fa-times"></i><del>Vaccines Facilities</del></li>
									<li><i class="fa fa-check"></i>Pure Water Facilites</li>
								</ul>
								<a href="#" class="btn btn-primary">
									Choose Plan
								</a>
							</div><!-- .xs-pricing-content END -->
						</div><!-- .xs-single-pricing-table END -->
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="xs-single-pricing-table pricing-red">
							<div class="xs-pricing-header" style="background-image:url(assets/images/pricing/pricing_2.jpg)">
								<h2>
									$189<sub>/mo</sub>
								</h2>
							</div>
							<div class="xs-pricing-content">
								<h2 class="xs-pricing-title">Marchent</h2>
								<ul class="xs-list">
									<li><i class="fa fa-check"></i>Pediaric Facilities</li>
									<li><i class="fa fa-check"></i>Emergancy Care</li>
									<li><i class="fa fa-check"></i>Educational Facilities</li>
									<li class="uncheked"><i class="fa fa-times"></i><del>Vaccines Facilities</del></li>
									<li><i class="fa fa-check"></i>Pure Water Facilites</li>
								</ul>
								<a href="#" class="btn btn-primary">
									Choose Plan
								</a>
							</div><!-- .xs-pricing-content END -->
						</div><!-- .xs-single-pricing-table .v-red END -->
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="xs-single-pricing-table pricing-green">
							<div class="xs-pricing-header" style="background-image:url(assets/images/pricing/pricing_3.jpg)">
								<h2>
									$250<sub>/mo</sub>
								</h2>
							</div>
							<div class="xs-pricing-content">
								<h2 class="xs-pricing-title">Enterprise</h2>
								<ul class="xs-list">
									<li><i class="fa fa-check"></i>Pediaric Facilities</li>
									<li><i class="fa fa-check"></i>Emergancy Care</li>
									<li><i class="fa fa-check"></i>Educational Facilities</li>
									<li><i class="fa fa-check"></i>Vaccines Facilities</li>
									<li><i class="fa fa-check"></i>Pure Water Facilites</li>
								</ul>
								<a href="#" class="btn btn-primary">
									Choose Plan
								</a>
							</div><!-- .xs-pricing-content END -->
						</div><!-- .xs-single-pricing-table .v-green END -->
					</div>
				</div><!-- .row end -->
			</div><!-- .container end -->
		</section>	<!-- End video popup section section -->

			<!-- partners section -->
		<section class="bg-gray xs-partner-section" style="background-image: url('assets/images/map.png');">
			<div class="container">
				<div class="row">
					<div class="col-lg-5">
						<div class="xs-partner-content">
							<div class="xs-heading xs-mb-40">
								<h2 class="xs-mb-0 xs-title">Trusted by the biggest <span class="color-green">brand.</span></h2>
							</div>
							<p>In-kind donations from our donors and partners allow charity: water to pass 100% of public donations straight to water projects. We are deeply grateful for those who have surprised us with their generosity. A big thanks to the following companies and people who have helped make charity: water’s work possible.</p>
							<a href="#" class="btn btn-primary bg-orange">
								join us now
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