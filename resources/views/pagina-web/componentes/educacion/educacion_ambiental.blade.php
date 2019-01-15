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
							es el encargado de implementar el Programa permanente de educación ambiental del CREDIA, 
							el cual contribuye a la formación de ciudadanos conscientes de la conservación de los 
							recursos naturales a nivel local, nacional y mundial, dando a conocer la realidad actual 
							de los recursos naturales de Honduras y del mundo, sus amenazas, su importancia y relevancia 
							para la vida humana y las pautas de cómo cada ser humano puede contribuir a su uso y
							desarrollo sostenible.
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
					<div class="xs-causes-images" style="margin-top:30px;">
						<img src="assets/images/componentes/cendoc/cendoc_2.jpg" class="d-block" alt="">
					</div>
				</div>
				<div class="col-lg-8">
					<div class="xs-fature-causes-deatils-comp">
						<p style="margin-top:50px;">
							Desarrolla proyectos educativos en materia ambiental dirigidos a diferentes públicos meta, entre ellos, 
							centros de educación pre-escolar, primaria, secundaria y universitaria, con fines educativos, 
							turísticos, conservacionistas y recreativos mediante el desarrollo de productos y servicios que 
							valorizan los recursos naturales, entre ellos: Recorridos guiados, parcelas demostrativas, charlas 
							educativas, cine ambiental, juegos ambientales, celebración de días ambientales.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section><!-- End educación ambiental section -->
	
	<!-- titulo section -->
	<section class="parallax-window xs-content-section-padding" style="background-image: url('assets/images/backgrounds/parralax_3.jpg')">
		<div class="container-fulid">
			<div class="xs-feature-content-v2">
				<h2 class="color-white"><span>Actividades y Productos</span></h2>
			</div>
		</div>
	</section><!-- End titulo section -->
	
	<!-- Actividades Educación ambiental section -->
	<section class="xs-content-section-padding-actividad xs-service-promo-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-5">
					<div class="col-md-12 xs-mb-30 xs-edu-img">
						<img src="assets/images/componentes/educacion/img-1.jpg" alt="" class="rounded" style="width:415px;">
					</div>
					<div class="xs-archive-content xs-educacion-pad">
						<h3 class="xs-title-educacion">Educación Ambiental</h3>
						<p>
							El componente de Educación Ambiental de CREDIA tiene definidas dos áreas de trabajo. Primero, la sensibilización
							ambiental mediante campañas, visitas y actividades educativas en el jardín e instalaciones. Y segundo, la oferta
							de cursos y talleres que se imparten a los diferentes públicos, en temas tales como biodiversidad, cambio
							climático, consumo responsable, entre otros.
						</p>
					</div>
				</div>
				<div class="col-md-12 col-lg-7 row xs-margin" id="xs-mar">
					@foreach($actividades as $actividad)
						<div class="col-md-6 col-sm-6 xs-actividad-pad">
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
	</section><!-- End Actividades Educación ambiental section -->
@endsection