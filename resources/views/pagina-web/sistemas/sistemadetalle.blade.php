@extends('pagina-web.layouts.layout_other')

@section('title', '| Repositorio Digital')

@section('sistema_detalle')
	
	<section class="xs-banner-inner-section-other"></section>
	
	<!-- event single section -->
	<section class="xs-content-section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="row event-slyle">
						<div class="col-lg-8 xs-event-wraper">
							<div class="xs-event-content">
								<h4 style="text-align:justify;font-size:30px;">{{ $sistema->first()->nombre_sistema }}</h4>
								<span class="xs-separetor"></span>
								<br>
								{!! $sistema->first()->contenido !!}
							</div>
						</div>
						
						<div class="col-lg-4">
							@if(count($sistemas) > 0)
								<!-- sistemas start -->
								<div class="widget widget_categories xs-sidebar-widget">
									<h3 class="widget-title">Sistemas</h3>
									<ul class="xs-side-bar-list">
										@foreach($sistemas as $sistem)
												<li>
													<a href="{{URL::route('sistemadetalle',['slug' => str_slug($sistem->nombre_sistema,'-'),'id' => $sistem->id])}}">
														<span class="first">{{ $sistem->nombre_sistema }}</span>
													</a>
												</li>
										@endforeach
									</ul>
								</div><!-- sistemas end -->
							@endif
							
							<!-- link start -->
							<div class="widget xs-sidebar-widget">
								<h3 class="widget-title">{{ $sistema->first()->texto_mini }}</h3>
								<div class="centered service">
									<a href="{{ $sistema->first()->url }}" target="_blank">
										<div class="circle-border zoom-in" style="background-image: url(/{{ $sistema->first()->foto }});"></div>
									</a>
									<div class="xs-heading-sistema">
										<h3 class="xs-title" data-title="{{ $sistema->first()->nombre_sistema }}">{{ $sistema->first()->nombre_sistema }}</h3>
									</div>
								</div>
							</div><!-- link end -->
						</div>
					</div>
				</div>
			</div><!-- .row end -->
		</div><!-- .container end -->
	</section>	<!-- End event single section -->
@endsection