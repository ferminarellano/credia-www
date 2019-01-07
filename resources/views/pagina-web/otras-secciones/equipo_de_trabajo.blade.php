@extends('pagina-web.layouts.layout')

<?php
	$pagination_range = 2;
?>

@section('title', 'equipo de trabajo -')

@section('banner')
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

@section('equipo_et')
	@if(count($empleados) > 0)
		<!-- equipo section -->
		<section class="xs-section-padding bg-gray">
			<div class="container">
				<div class="xs-heading row xs-mb-60">
					<div class="col-md-12 col-xl-12">
						<h2 class="xs-title" style="color:#a6ce39;">Nuestro equipo</h2>
						<!-- <span class="xs-separetor dashed"></span> -->
						<p style="color:#011b58;text-align:justify;">Nuestra fundación esta compuesta por el personal adecuado, los mejores profesionales en su labor, unete se parte de esta gran familia.</p>
					</div><!-- .xs-heading-title END -->
				</div><!-- .row end -->
				<div class="row xs-mb-60">
					@foreach($empleados as $empleado)
						<div class="col-md-6 col-lg-3">
							<div class="xs-single-team">
								<img src="{{ $empleado->foto }}" alt="">
								<div class="xs-team-content">
									<h4>{{ $empleado->nombre }}</h4>
									<small>{{ $empleado->cargo }}</small>
									<svg class="xs-svgs" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 270 138">
										<path class="fill-green" d="M375,3294H645v128a10,10,0,0,1-10,10l-250-20a10,10,0,0,1-10-10V3294Z" transform="translate(-375 -3294)"/>
									</svg>
								</div><!-- .xs-team-content END -->
							</div><!-- .xs-single-team END -->
						</div>
					@endforeach
				</div><!-- .row END -->
					@if($empleados->count() > 0)
					<!-- pagination -->
					<div>
						<ul class="pagination justify-content-center xs-pagination">
							<li class="page-item {{ $empleados->previousPageUrl() == null ? 'disabled' : '' }}">
								<a class="page-link" href="{{ $empleados->previousPageUrl() ?? '#' }}" aria-label="Previous">
									<i class="fa fa-angle-left"></i>
								</a>
							</li>
							@if ($empleados->currentPage() > 1+$pagination_range )
								<li class="page-item">
									<a class="page-link" href="{{ $empleados->url(1) ?? '#' }}">{{ 1 }}</a>
								</li>

								@if ($empleados->currentPage() > 1+$pagination_range+1 )
									<li class="page-item disabled">
										<span class="page-link">&hellip;</span>
									</li>
								@endif
							@endif
							@for ($i=-$pagination_range; $i<=$pagination_range; $i++)
								@if ($empleados->currentPage()+$i > 0 && $empleados->currentPage()+$i <= $empleados->lastPage())
									<li class="page-item {{ $i==0 ? 'active' : '' }}">
										<a class="page-link" href="{{ $empleados->url($empleados->currentPage()+$i) }}">{{ $empleados->currentPage()+$i }}</a>
									</li>
								@endif
							@endfor
							@if ($empleados->currentPage() < $empleados->lastPage()-$pagination_range )	
								@if ($empleados->currentPage() < $empleados->lastPage()-$pagination_range-1 )
									<li class="page-item disabled">
										<span class="page-link">&hellip;</span>
									</li>
								@endif
								<li class="page-item">
									<a class="page-link" href="{{ $empleados->url($empleados->lastPage()) ?? '#' }}">{{ $empleados->lastPage() }}</a>
								</li>
							@endif
							<li class="page-item {{ $empleados->nextPageUrl()==null ? 'disabled' : '' }}">
								<a class="page-link " href="{{ $empleados->nextPageUrl() ?? '#' }}" aria-label="Next">
									<i class="fa fa-angle-right"></i>
								</a>
							</li>
						</ul>
					</div><!-- End pagination -->
				@endif
			</div><!-- .container end -->
		</section>	<!-- End team section -->
	@endif
@endsection
