@extends('layouts.layout_other')

@section('title', 'Proyecto detalles -')

@section('proyectodetalle')
	
	<section class="xs-banner-inner-section-other"></section>
	
	<!-- event single section -->
	<section class="xs-content-section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="xs-event-banner">
						<img src="/{{ $proyecto->first()->foto }}">
					</div>
					<div class="row event-slyle">
						<div class="col-lg-8 xs-event-wraper">
							<div class="xs-event-content">
								<h4>Detalle de evento</h4>
								{!! $proyecto->first()->contenido !!} 
							</div>
							<!-- End horizontal tab -->
							<!-- <div class="row xs-mb-12 margin-event-style"> -->
								<!-- <div class="col-md-6 xs-about-feature"> -->
									<!-- <h3>Event Mission</h3> -->
									<!-- <p>663 million people drink dirty water. Learn how it access to clean water can improve health, boost local econom mies. Lorem ipsum dolor sit amet. consectetur adipisicing elit.</p> -->
								<!-- </div> -->
								<!-- <div class="col-md-6 xs-about-feature"> -->
									<!-- <h3>Event Vission</h3> -->
									<!-- <p>663 million people drink dirty water. Learn how it access to clean water can improve health, boost local econom mies. Lorem ipsum dolor sit amet. consectetur adipisicing elit.</p> -->
								<!-- </div> -->
							<!-- </div> -->
						</div>
						<div class="col-lg-4">
							<!-- categories start -->
							<div class="widget widget_categories xs-sidebar-widget">
								<h3 class="widget-title">Categorías</h3>
								<ul class="xs-side-bar-list">
									@foreach($categorias as $categoria)
											<li>
												<a href="{{ URL::route('categoria_proyecto',['categoria' => str_slug($categoria->nombre,'-'),'categoria_id' => $categoria->id])}}">
													<span class="first">{{ $categoria->nombre }}</span>
													<span class="last">{{ $categoria->proyectos()->count() }}</span>
												</a>
											</li>
									@endforeach
								</ul>
							</div><!-- categories end -->
							<div class="xs-event-schedule-widget">
								<h3 class="widget-title">Patrocinadores</h3>
								<ul class="xs-event-sponsor clearfix">
									@foreach($proyecto->first()->patrocinadores()->get() as $proyect)
										<li><a><img src="/{{ $proyect->foto }}" alt=""></a></li>
									@endforeach
								</ul>
							</div><!-- .xs-event-schedule-widget END -->
						</div>
					</div>
				</div>
			</div><!-- .row end -->
		</div><!-- .container end -->
	</section>	<!-- End event single section -->
@endsection