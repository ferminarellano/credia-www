@extends('pagina-web.layouts.layout')

<?php

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
	<section class="xs-content-section-padding-proyect">
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
	
	<div class="section secondary-section">
		<div class="triangle"></div>
		<div class="container centered">
			<p class="large-text">
				Nos caracterizamos por promover, facilitar e impartir la formación ambiental, informar 
				sobre la adaptación al cambio climático y sostenibilidad, promocionar el turismo sostenible,
				educativo y científico en las áreas protegidas, fomentar la recreación comunitaria y saludable
				en entornos  naturales, contribuir en la difusión de las diversas manifestaciones culturales y 
				artesanales de la zona.
			</p>
		</div>
	</div>
	<div class="triangle-1"></div>
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
								<div class="xs-skill-bar">
									<div class="xs-skill-track bg-light-green">
										<p><span class="number-percentage-count number-percentage" data-value="{{ $proyecto->avance }}" data-animation-duration="3500">0</span>%</p>
									</div>
								</div>
							<div class="xs-item-content">
								<div class="xs-margin-1">
									<ul class="xs-simple-tag xs-mb-20">
										<li><a class="color-light-black" href="{{URL::route('proyectodetalle',['slug' => str_slug($proyecto->titulo,'-'),'id' => $proyecto->id])}}">{{ $proyecto->subtitulo }}</a></li>
									</ul>
									<span class="xs-separetor"></span>
									<a href="{{URL::route('proyectodetalle',['slug' => str_slug($proyecto->titulo,'-'),'id' => $proyecto->id])}}" class="xs-post-title xs-mb-30" style="text-align:justify;">{{ $proyecto->titulo }}</a>
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