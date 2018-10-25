@extends('layouts.layout')

@section('title', 'Servicios -')

@section('welcomeservicio')
	<section class="xs-banner-inner-section parallax-window" style="background-image:url('assets/images/backgrounds/service_bg.jpg')">
		<div class="xs-black-overlay"></div>
		<div class="container">
			<div class="color-white xs-inner-banner-content">
				<h2>Our Services</h2>
				<p>Give a helping hand for poor people</p>
				<ul class="xs-breadcumb">
					<li class="badge badge-pill badge-primary"><a href="{{ URL::route('index') }}" class="color-white"> Inicio /</a> Servicios</li>
				</ul>
			</div>
		</div>
	</section>
@endsection

@section('promocionservicio')
	<main class="xs-main">
		<!-- service promo section -->
		<section class="xs-content-section-padding xs-service-promo-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="media xs-single-media">
							<span class="icon-donation_2 d-flex color-light-red"></span>
							<div class="media-body">
								<h5>Receive Donations</h5>
								<p>Each year 27,000 children in the United diagnosed with a life-threatening illness. children, simple surprises.</p>
								<a href="#"><i class="fa fa-play"></i> Learn More</a>
							</div>
						</div><!-- .xs-single-media END -->
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="media xs-single-media">
							<span class="icon-tap-water d-flex color-purple"></span>
							<div class="media-body">
								<h5>Pure Water Supply</h5>
								<p>Each year 27,000 children in the United diagnosed with a life-threatening illness. children, simple surprises.</p>
								<a href="#"><i class="fa fa-play"></i> Learn More</a>
							</div>
						</div><!-- .xs-single-media END -->
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="media xs-single-media">
							<span class="icon-open-book d-flex color-light-green"></span>
							<div class="media-body">
								<h5>Education For Childrens</h5>
								<p>Each year 27,000 children in the United diagnosed with a life-threatening illness. children, simple surprises.</p>
								<a href="#"><i class="fa fa-play"></i> Learn More</a>
							</div>
						</div><!-- .xs-single-media END -->
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="media xs-single-media">
							<span class="icon-first-aid-kit d-flex color-blue"></span>
							<div class="media-body">
								<h5>Medical Care</h5>
								<p>Each year 27,000 children in the United diagnosed with a life-threatening illness. children, simple surprises.</p>
								<a href="#"><i class="fa fa-play"></i> Learn More</a>
							</div>
						</div><!-- .xs-single-media END -->
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="media xs-single-media">
							<span class="icon-sweater d-flex color-burntOrange"></span>
							<div class="media-body">
								<h5>Cloth Donate</h5>
								<p>Each year 27,000 children in the United diagnosed with a life-threatening illness. children, simple surprises.</p>
								<a href="#"><i class="fa fa-play"></i> Learn More</a>
							</div>
						</div><!-- .xs-single-media END -->
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="media xs-single-media">
							<span class="icon-team_2 d-flex color-riptide"></span>
							<div class="media-body">
								<h5>Adoption</h5>
								<p>Each year 27,000 children in the United diagnosed with a life-threatening illness. children, simple surprises.</p>
								<a href="#"><i class="fa fa-play"></i> Learn More</a>
							</div>
						</div><!-- .xs-single-media END -->
					</div>
				</div><!-- .row end -->
			</div><!-- .container end -->
		</section>	<!-- end service promo section -->

			<!-- service slider section -->
		<section class="parallax-window xs-content-section-padding" style="background-image: url('assets/images/backgrounds/parralax_3.jpg')">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="xs-service-slider-content">
							<h2>Meeting People's Needs</h2>
							<div class="xs-service-grow row">
								<div class="col-md-7">
									<h3 class="float-left xs-title-underline">120,504</h3>
								</div>
								<div class="col-md-5">
									<h4>Poor Peoples Impacted in 2017</h4>
								</div>
							</div><!-- .xs-service-grow END -->
							<div class="row">
								<div class="col-md-6">
									<ul class="xs-unorder-list check">
										<li>Pure Water Supply</li>
										<li>Educational Program</li>
									</ul><!-- .xs-unorder-list .check END -->
								</div>
								<div class="col-md-6">
									<ul class="xs-unorder-list check">
										<li>Shelter</li>
										<li>Fund Collect</li>
									</ul><!-- .xs-unorder-list .check END -->
								</div>
							</div>
						</div><!-- .xs-service-slider-content END -->
					</div>
					<div class="col-lg-6">
						<div class="xs-single-item-slider owl-carousel">
							<div class="xs-single-slider-item">
								<img src="assets/images/family_2.jpg" alt="">
							</div>
							<div class="xs-single-slider-item">
								<img src="assets/images/family_3.jpg" alt="">
							</div>
							<div class="xs-single-slider-item">
								<img src="assets/images/family_4.jpg" alt="">
							</div>
							<div class="xs-single-slider-item">
								<img src="assets/images/family_5.jpg" alt="">
							</div>
						</div>
					</div>
				</div><!-- .row end -->
			</div><!-- .container end -->
		</section>	<!-- end service slider section -->

			<!-- service slider section -->
			<div class="xs-funfact-section-v2 waypoint-tigger" style="background-image: url('assets/images/map_green.png')">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6">
						<div class="xs-single-funFact funFact-v2">
							<span class="number-percentage-count number-percentage" data-value="100" data-animation-duration="3500">0</span><span>M</span>
							<small>Fund Raised</small>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="xs-single-funFact funFact-v2">
							<span class="number-percentage-count number-percentage" data-value="90" data-animation-duration="3500">0</span><span>%</span>
							<small>Love Givens</small>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="xs-single-funFact funFact-v2">
							<span class="number-percentage-count number-percentage" data-value="100" data-animation-duration="3500">0</span><span>m</span>
							<small>Adopted Kids</small>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="xs-single-funFact funFact-v2">
							<span class="number-percentage-count number-percentage" data-value="20" data-animation-duration="3500">0</span><span>k</span>
							<small>Events Held</small>
						</div>
					</div>
				</div><!-- .row end -->
			</div><!-- .container end -->
		</div>	<!-- end service slider section -->
	</main>
@endsection
