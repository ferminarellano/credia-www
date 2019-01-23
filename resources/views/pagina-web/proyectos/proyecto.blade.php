@extends('pagina-web.layouts.layout')

@section('title', '| Proyectos')

<?php

	function cant_dias($fecha11,$fecha22){
		$fecha1= new DateTime($fecha11);
		$fecha2= new DateTime($fecha22);
		
		$diff = $fecha1->diff($fecha2);
		
		return $diff->days;
	}
	
	$pagination_range = 2;
?>

@section('banner')
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

@section('proyecto_seccion')
	<!-- popularCauses version 2 section -->
	<section class="waypoint-tigger xs-section-padding">
		<div class="container">
			<div class="row">
				@if(count($proyectos) === 0)
					<div class="col-lg-12">
						<h1 class="resp">NO HAY PUBLICACIONES DISPONIBLES<h1>
					</div>
				@endif
				@foreach($proyectos as $proyecto)
					<div class="col-lg-4 col-md-6">
						<div class="xs-popular-item xs-box-shadow">
							<div class="xs-item-header" style="background-image: url(/{{ $proyecto->foto }});"></div>
								@if($proyecto->avance < 100)
									<div class="xs-skill-bar">
										<div class="xs-skill-track bg-light-green">
											<p><span class="number-percentage-count number-percentage" data-value="{{ $proyecto->avance }}" data-animation-duration="3500">0</span>%</p>
										</div>
									</div>
								@endif
							<div class="xs-item-content">
								<div class="xs-margin-1">
									<a href="{{URL::route('proyectodetalle',['slug' => str_slug($proyecto->titulo,'-'),'id' => $proyecto->id])}}" class="xs-post-title-i xs-mb-20">{{ $proyecto->titulo }}</a>
									<span class="xs-separetor"></span>
									<ul class="xs-simple-tag xs-mt-10">
										<li><a class="color-light-black" href="{{URL::route('proyectodetalle',['slug' => str_slug($proyecto->titulo,'-'),'id' => $proyecto->id])}}">{{ $proyecto->subtitulo }}</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				@endforeach
			</div><!-- .row end -->
			@if($proyectos->count() > 0)
				<!-- pagination -->
				<div>
					<ul class="pagination justify-content-center xs-pagination">
						<li class="page-item {{ $proyectos->previousPageUrl() == null ? 'disabled' : '' }}">
							<a class="page-link" href="{{ $proyectos->previousPageUrl() ?? '#' }}" aria-label="Previous">
								<i class="fa fa-angle-left"></i>
							</a>
						</li>
						@if ($proyectos->currentPage() > 1+$pagination_range )
							<li class="page-item">
								<a class="page-link" href="{{ $proyectos->url(1) ?? '#' }}">{{ 1 }}</a>
							</li>

							@if ($proyectos->currentPage() > 1+$pagination_range+1 )
								<li class="page-item disabled">
									<span class="page-link">&hellip;</span>
								</li>
							@endif
						@endif
						@for ($i=-$pagination_range; $i<=$pagination_range; $i++)
							@if ($proyectos->currentPage()+$i > 0 && $proyectos->currentPage()+$i <= $proyectos->lastPage())
								<li class="page-item">
									<a class="page-link {{ $i==0 ? 'active' : '' }}" href="{{ $proyectos->url($proyectos->currentPage()+$i) }}">{{ $proyectos->currentPage()+$i }}</a>
								</li>
							@endif
						@endfor
						@if ($proyectos->currentPage() < $proyectos->lastPage()-$pagination_range )	
							@if ($proyectos->currentPage() < $proyectos->lastPage()-$pagination_range-1 )
								<li class="page-item disabled">
									<span class="page-link">&hellip;</span>
								</li>
							@endif
							<li class="page-item">
								<a class="page-link" href="{{ $proyectos->url($proyectos->lastPage()) ?? '#' }}">{{ $proyectos->lastPage() }}</a>
							</li>
						@endif
						<li class="page-item {{ $proyectos->nextPageUrl()==null ? 'disabled' : '' }}">
							<a class="page-link" href="{{ $proyectos->nextPageUrl() ?? '#' }}" aria-label="Next">
								<i class="fa fa-angle-right"></i>
							</a>
						</li>
					</ul>
				</div><!-- End pagination -->
			@endif
		</div><!-- .container end -->
	</section><!-- End popularCauses version 2 section -->
@endsection
