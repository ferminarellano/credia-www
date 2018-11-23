@extends('layouts.layout')

<?php
	
	function porcentaje($total,$utilizado){
		$resultado = 0;
		$division = 0;
		
		$division = $utilizado/$total;
		$resultado = $division*100;
		
		return $resultado;
	}
	
	function cant_dias($fecha11,$fecha22){
		$fecha1= new DateTime($fecha11);
		$fecha2= new DateTime($fecha22);
		
		$diff = $fecha1->diff($fecha2);
		
		return $diff->days;
	}
	
	$pagination_range = 2;
?>

@section('title', 'Proyectos -')

@section('welcomeproyecto')
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

@section('proyectosection')

	<!-- Proyectos Recientes -->
	<section class="xs-content-section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-4">
					<div class="xs-single-causes">
						<img src="/assets/images/causes/causes_4.jpg" alt="">
						<div class="xs-causes-footer">
							<h2 class="color-blue-dark">Adpatación, Agua, Bosques y suelos.</h2>
							<p style="text-align:justify;">Incrementar la resiliencia de la población más vulnerable de las zonas rurales del Corredor Biológico del Caribe Hondureño.</p>
						</div>
					</div><!-- .xs-single-causes END -->
				</div>
				<div class="col-md-6 col-lg-4">
					<div class="xs-single-causes">
						<img src="/assets/images/causes/causes_5.jpg" alt="">
						<div class="xs-causes-footer">
							<h2 class="color-blue-dark">Educación</h2>
							<p style="text-align:justify;">Introducir en el concepto de Cambio Climático a los niños y niñas del municipio de La Ceiba y aledaños, enriqueciendo a más de 250 escuelas y 10,000 niños.</p>
						</div>
					</div><!-- .xs-single-causes END -->
				</div>
				<div class="col-md-6 col-lg-4">
					<div class="xs-single-causes">
						<img src="/assets/images/causes/causes_2.jpg" alt="">
						<div class="xs-causes-footer">
							<h2 class="color-blue-dark">Forestería</h2>
							<p style="text-align:justify;">Desarrollo de las comunidades rurales, donde a partir del uso responsable y sostenible del bosque éstas generan beneficios económicos, ecológicos y sociales que contribuyen a mejorar su calidad de vida.</p>
						</div>
					</div><!-- .xs-single-causes END -->
				</div>
			</div><!-- .row end -->
		</div><!-- .container end -->
	</section>	<!-- End causes section -->

	<!-- popularCauses version 2 section -->
	<section class="bg-gray waypoint-tigger xs-section-padding">
		<div class="container">
			<div class="xs-heading row xs-mb-60">
				<div class="col-md-12 col-xl-12">
					<h2 class="xs-title">Proyectos</h2>
					<p>Para el desarrollo de los proyectos se nos caracteriza por poseer un enfoque de gestión 
					y análisis de la información, promover, 
					facilitar e impartir la formación ambiental, informar sobre la adaptación al cambio climático 
					y sostenibilidad, promocionar el turismo sostenible, educativo y científico en las áreas 
					protegidas, fomentar la recreación comunitaria y saludable en entornos  naturales,
					contribuir en la difusión de las diversas manifestaciones culturales y artesanales de la zona.</p>
				</div><!-- .xs-heading-title END -->
			</div><!-- .row end -->
			
			<div class="row">
				@if(count($proyectos) === 0)
					<div class="col-lg-12">
						<h1 class="resp">NO HAY PUBLICACIONES DISPONIBLES<h1>
					</div>
				@endif
				@foreach($proyectos as $proyecto)
					<div class="col-lg-4 col-md-6">
						<div class="xs-popular-item xs-box-shadow">
							<div class="xs-item-header">

								<img src="/{{$proyecto->foto}}" alt="">

								<div class="xs-skill-bar">
									<div class="xs-skill-track bg-light-red">
										<p><span class="number-percentage-count number-percentage" data-value="{{ porcentaje($proyecto->presupuesto,$proyecto->utilizado) }}" data-animation-duration="3500">0</span>%</p>
									</div>
								</div>
							</div><!-- .xs-item-header END -->
							<div class="xs-item-content">
								<div class="xs-margin-1">
									<ul class="xs-simple-tag xs-mb-20">
										<li><a class="color-light-red" href="{{URL::route('proyectodetalle',['slug' => str_slug($proyecto->titulo,'-'),'id' => $proyecto->id])}}">{{ $proyecto->titulo }}</a></li>
									</ul>

									<a href="{{URL::route('proyectodetalle',['slug' => str_slug($proyecto->titulo,'-'),'id' => $proyecto->id])}}" class="xs-post-title xs-mb-30" style="text-align:justify;">{{ $proyecto->subtitulo }}</a>

									<ul class="xs-list-with-content">
										<li>L. {{ number_format($proyecto->presupuesto,2) }}<span>Prometido</span></li>
										<li><span class="number-percentage-count number-percentage" data-value="{{ porcentaje($proyecto->presupuesto,$proyecto->utilizado) }}" data-animation-duration="3500">0</span>% <span>Utilizado</span></li>
										<li>{{ cant_dias($proyecto->fecha_inicio,$proyecto->fecha_finalizacion) }}<span>total días</span></li>
									</ul>
								</div>
								<span class="xs-separetor"></span>
								
								<div class="row xs-margin-0">
									<div class="xs-round-avatar">
										<img src="{{ 'https://www.gravatar.com/avatar/'.md5(strtolower(trim($proyecto->user()->get()->first()->email))).'?s=50&d=monsterid' }}">
									</div>
									<div class="xs-avatar-title">
										<a style="color: #011b58;"><span>Por</span>{{ $proyecto->user()->get()->first()->name }}</a>
									</div>
								</div>
							</div><!-- .xs-item-content END -->
						</div><!-- .xs-popular-item END -->
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
								<li class="page-item {{ $i==0 ? 'active' : '' }}">
									<a class="page-link" href="{{ $proyectos->url($proyectos->currentPage()+$i) }}">{{ $proyectos->currentPage()+$i }}</a>
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
							<a class="page-link " href="{{ $proyectos->nextPageUrl() ?? '#' }}" aria-label="Next">
								<i class="fa fa-angle-right"></i>
							</a>
						</li>
					</ul>
				</div><!-- End pagination -->
			@endif
		</div><!-- .container end -->
	</section>	<!-- End popularCauses version 2 section -->
@endsection
