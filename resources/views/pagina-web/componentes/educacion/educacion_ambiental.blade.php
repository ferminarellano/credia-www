@extends('pagina-web.layouts.layout')

@section('title', '| Educación Ambiental')

<?php
	$pagination_range = 2;
?>

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

@section('educacion_section')
	<!-- educación ambiental section -->
	<section class="xs-section-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="xs-fature-causes-deatils-comp">
						<h3>Educación Ambiental </h3>
						<p>
							La educación ambiental es una de las principales líneas de trabajo del CREDIA. Una de las causas 
							de los desequilibrios y amenazas que actualmente existen en las diferentes partes del mundo, 
							incluida la costa norte de Honduras, tiene que ver con nuestra cultura y forma de vida. Los 
							ecosistemas educativos actuales se encuentran en crisis y es de vital importancia incidir en 
							ellos desde una perspectiva de sostenibilidad.
						</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="xs-causes-images" style="margin-top:50px;">
						<img src="assets/images/componentes/educacion/educacion_1.jpg" class="d-block" alt="">
					</div>
				</div>
			</div>
			<div class="row" style="margin-top:40px;">
				<div class="col-lg-4">
					<div class="xs-causes-images" style="margin-top:0px;">
						<img src="assets/images/componentes/educacion/niña.jpg" class="d-block" alt="">
					</div>
				</div>
				<div class="col-lg-8">
					<div class="xs-fature-causes-deatils-comp">
						<p style="margin-top:12.5px;">
							Las acciones de educación ambiental que se están realizando desde el CREDIA, procuran mejorar la 
							percepción de la población del CBCH hacia el uso sostenible de los recursos naturales, minimizando
							la fragmentación y perdida de los ecosistemas y ofreciendo algunas alternativas y cambios de 
							comportamiento que sean ambientalmente más respetuosos y viables que procuren la mejora de la 
							calidad de vida de las comunidades, mediante la participación social activa como motores  de cambio
							para su propio desarrollo. Este tema considera que cada persona es un agente multiplicador de 
							conocimiento. 
						</p>
					</div>
				</div>
			</div>
			<div class="row" style="margin-top:40px;">
				<div class="col-lg-8">
					<div class="xs-fature-causes-deatils-comp">
						<p>
							Para desarrollar sistemáticamente este proceso educativo, se ha puesto en marcha la plataforma 
							de Educación Ambiental que tiene como objetivo mejorar la percepción de la población hacia la 
							conservación de los recursos naturales, destacando los aportes de las áreas Protegidas. Estas 
							acciones se realizan a través de las visitas a las instalaciones del CREDIA, donde una 
							experiencia didáctica enseña y sensibiliza al visitante, fortaleciendo valores tales como 
							la justicia, la equidad, el respeto como base para la convivencia entre las diversas culturas, 
							y su relación con el ambiente. 
						</p>
						<p>
							El Programa de Educación Ambiental de CREDIA tiene definidas dos áreas de trabajo. Primero, la
							sensibilización ambiental mediante campañas, visitas y actividades educativas en el jardín e 
							instalaciones. Y segundo, la oferta de cursos y tallares que se imparten a los diferentes públicos
							en temas tales como biodiversidad, cambio climático, consumo responsable, entre otros.
						</p>
						<p>
							Con este programa de educación ambiental se quiere incidir en los diferentes sectores de la 
							población, desde niños hasta adultos para que se comportamiento sea más respetuoso y armonioso 
							con el entorno natural y al mismo tiempo, las personas adquieran competencias suficientes para 
							poder modificar las estructuras y comportamientos insostenibles que yacen en nuestro día a día.
						</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="xs-causes-images" style="margin-top:30px;">
						<img src="assets/images/componentes/educacion/arboles.jpg" class="d-block" alt="">
					</div>
				</div>
			</div>
		</div>
	</section><!-- End educación ambiental section -->
	
	<!-- titulo section -->
	<section class="parallax-window xs-content-section-padding" style="background-image: url('assets/images/backgrounds/parralax_3.jpg')">
		<div class="container-fulid">
			<div class="xs-feature-content-v2">
				<h2 class="color-white"><span>Actividades</span></h2>
			</div>
		</div>
	</section><!-- End titulo section -->
	
	<!-- educación section -->
	<section class="waypoint-tigger xs-section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-6">
					<div class="xs-archive-content">
						<div class="xs-heading">
							<h3 class="xs-title big-o" data-title="Educación">Educación Ambiental</h3>
						</div>
						<p>
							El componente de Educación Ambiental de CREDIA tiene definidas dos áreas de trabajo. Primero, la sensibilización
							ambiental mediante campañas, visitas y actividades educativas en el jardín e instalaciones. Y segundo, la oferta
							de cursos y talleres que se imparten a los diferentes públicos, en temas tales como biodiversidad, cambio
							climático, consumo responsable, entre otros.
						</p>
						<h5>Las principales actividades son:</h5>
						
						<ul class="xs-unorder-list arrow">
							<li>Recorrido por el Jardín botánico y Sendero Gerardo Rodríguez.</li>
							<li>Recorrido con el Pasaporte Verde.</li>
							<li>Gimkhana del cambio Climático.</li>
							<li>Pasaporte de las Aves.</li>
							<li>Detectives de Aves.</li>
							<li>Charla y Talleres.</li>
						</ul>
					</div>
				</div>
				<div class="col-md-12 col-lg-6 row xs-archive-image">
					<div class="col-md-12 xs-mb-30">
						<img src="assets/images/componentes/observatorio/img-1.jpg" alt="" class="rounded" style="height:250px;">
					</div>
					<div class="col-md-12 xs-mb-30">
						<img src="assets/images/componentes/observatorio/img-2.jpg" alt="" class="rounded" style="height:250px; width:100%;">
					</div>
				</div>
			</div>
		</div>
	</section><!-- end educación section -->
	
	{{--<!-- Actividades Educación ambiental section -->
	<section class="xs-content-section-padding-actividad xs-service-promo-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-12 row xs-margin" id="xs-mar">
					@foreach($actividades as $actividad)
						<div class="col-md-3 col-sm-3 xs-actividad-pad">
							<div class="media xs-single-media xs-service-promo-p">
								<div class="xs-service-promo-img2" style="background-image: url({{ $actividad->foto }});"></div>
								<div class="media-body">
									<h5>{{ $actividad->titulo }}</h5>
									<p>{{ $actividad->descripcion }}</p>
									<a href="{{URL::route('actividadetalle',['slug' => str_slug($actividad->titulo,'-'),'id' => $actividad->id])}}"><i class="fa fa-play"></i> Saber más</a>
								</div>
							</div>
						</div>
					@endforeach
					
					@if($actividades->count()  > 0)
						<!-- pagination -->
						<div class="col-md-12">
							<ul class="pagination justify-content-center xs-pagination" style="padding-top:0px;">
								<li class="page-item {{ $actividades->previousPageUrl() == null ? 'disabled' : '' }}">
									<a class="page-link" href="{{ $actividades->previousPageUrl() ?? '#' }}" aria-label="Previous">
										<i class="fa fa-angle-left"></i>
									</a>
								</li>
								@if ($actividades->currentPage() > 1+$pagination_range )
									<li class="page-item">
										<a class="page-link" href="{{ $actividades->url(1) ?? '#' }}">{{ 1 }}</a>
									</li>

									@if ($actividades->currentPage() > 1+$pagination_range+1 )
										<li class="page-item disabled">
											<span class="page-link">&hellip;</span>
										</li>
									@endif
								@endif
								@for ($i=-$pagination_range; $i<=$pagination_range; $i++)
									@if ($actividades->currentPage()+$i > 0 && $actividades->currentPage()+$i <= $actividades->lastPage())
										<li class="page-item {{ $i==0 ? 'active' : '' }}">
											<a class="page-link" href="{{ $actividades->url($actividades->currentPage()+$i) }}">{{ $actividades->currentPage()+$i }}</a>
										</li>
									@endif
								@endfor
								@if ($actividades->currentPage() < $actividades->lastPage()-$pagination_range )	
									@if ($actividades->currentPage() < $actividades->lastPage()-$pagination_range-1 )
										<li class="page-item disabled">
											<span class="page-link">&hellip;</span>
										</li>
									@endif
									<li class="page-item">
										<a class="page-link" href="{{ $actividades->url($actividades->lastPage()) ?? '#' }}">{{ $actividades->lastPage() }}</a>
									</li>
								@endif
								<li class="page-item {{ $actividades->nextPageUrl()==null ? 'disabled' : '' }}">
									<a class="page-link " href="{{ $actividades->nextPageUrl() ?? '#' }}" aria-label="Next">
										<i class="fa fa-angle-right"></i>
									</a>
								</li>
							</ul>
						</div><!-- End pagination -->
					@endif
				</div>
			</div>
		</div>
	</section><!-- End Actividades Educación ambiental section -->--}}
@endsection