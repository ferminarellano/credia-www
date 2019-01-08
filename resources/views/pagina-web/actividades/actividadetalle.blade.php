@extends('pagina-web.layouts.layout_other')

@section('title', '| Actividad')

@section('actividad_detalle')
	
	<section class="xs-banner-inner-section-other"></section>
	
	<!-- event single section -->
	<section class="xs-content-section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="row event-slyle">
						<div class="col-lg-8 xs-event-wraper">
							<div class="xs-event-content">
								<h4 style="text-align:justify;font-size: 20px;">{{ $actividad->first()->titulo }}</h4>
								<span class="xs-separetor"></span>
								<h5 style="text-align:justify;color:#a6ce39;">{{ $actividad->first()->descripcion }}</h5>
								<br>
								{!! $actividad->first()->contenido !!}
							</div>
						</div>
						<div class="col-lg-4">
							<!-- actividades start -->
							<div class="widget widget_categories xs-sidebar-widget">
								<h3 class="widget-title">Actividades</h3>
								<ul class="xs-side-bar-list">
									@foreach($actividades as $actividad)
											<li>
												<a href="{{URL::route('actividadetalle',['slug' => str_slug($actividad->titulo,'-'),'id' => $actividad->id])}}">
													<span class="first">{{ $actividad->actividad }}</span>
												</a>
											</li>
									@endforeach
								</ul>
							</div><!-- actividades end -->
						</div>
					</div>
				</div>
			</div><!-- .row end -->
		</div><!-- .container end -->
	</section>	<!-- End event single section -->
@endsection