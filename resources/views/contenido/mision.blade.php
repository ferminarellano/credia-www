@extends('layouts.layout')

@section('title', 'Nuestra misión -')

@section('welcomemision')
	<section class="xs-banner-inner-section parallax-window" style="background-image:url(/{{ $foto }})">
		<div class="xs-black-overlay"></div>
		<div class="container">
			<div class="color-white xs-inner-banner-content">
				<h2>{{ $titulo }}</h2>
				<p> {{ $contenido }}</p>
			</div>
		</div>
	</section>
@endsection

@section('loquehacemos')
	<!-- causes list section -->
	<section class="xs-section-padding bg-gray-2">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="xs-causes-images">
						<img src="assets/images/causes/causes_11.jpg" class="d-block" alt="">
					</div><!-- .xs-causes-images END -->
					<div class="xs-causes-images">
						<img src="assets/images/causes/causes_12.jpg" class="d-block" alt="">
					</div><!-- .xs-causes-images END -->
				</div>
				<div class="col-lg-8">
					<div class="xs-fature-causes-deatils">
						<h3> Worldwide, <span class="color-green">20 million childrens</span> have lost both parents and live in orphanages or on the street. </h3>
						<ul class="xs-unorder-list">
							<li><i class="fa fa-houzz color-orange"></i>The number of adoptions has never kept up with number of children who desperately need a home.</li>
							<li><i class="fa fa-gears color-light-green"></i>CharityPress works around the globe to save lives, defeat poverty and achieve social justice.</li>
							<li><i class="fa fa-group color-purple"></i>Who despite all other circumstances or challenges, chooses to give her baby life.</li>
							<li><i class="fa fa-mercury color-light-red"></i>We recognize that each adoption tells the story of a mom.</li>
						</ul>
					</div>
				</div>
			</div><!-- .row end -->
		</div><!-- .container end -->
	</section>	<!-- End causes list section -->

	<!-- call to action section -->
	<section class="parallax-window xs-call-to-action-section" style="background-image: url('assets/images/backgrounds/parallax_2.jpg')">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 mx-auto">
					<div class="xs-call-to-action">
						<h3>We’re on a mission to solve the water crisis and reinvent charity for a new generation. Join the team. We’re hiring.</h3>
						<div class="xs-btn-wraper">
							<a href="#" class="btn btn-warning">
								careers
							</a>
							<a href="#" class="btn btn-success">
								internship
							</a>
						</div>
					</div>
				</div>
			</div><!-- .row end -->
		</div><!-- .container end -->
		<div class="xs-black-overlay"></div>
	</section>	<!-- End call to action section -->
@endsection