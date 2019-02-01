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
						<div class="col-lg-8 col-md-12 xs-event-wraper">
							<div class="xs-event-content">
								<h4 style="text-align:justify;font-size: 20px;">{{ $actividad->first()->titulo }}</h4>
								<span class="xs-separetor"></span>
								<h5 style="text-align:justify;color:#a6ce39;">{{ $actividad->first()->descripcion }}</h5>
								<br>
								{!! $actividad->first()->contenido !!}
							</div>
						</div>
						<div class="col-lg-4 col-md-12">
							<div class="min-l col-lg-12 col-md-6">
								<!-- actividades start -->
								<div class="widget widget_categories xs-sidebar-widget">
									<h3 class="widget-title">Actividades</h3>
									<ul class="xs-side-bar-list">
										@foreach($actividades as $actividad)
												<li>
													<a href="{{URL::route('actividadetalle',['slug' => str_slug($actividad->titulo,'-'),'id' => $actividad->id])}}">
														<span class="first">{{ $actividad->titulo }}</span>
													</a>
												</li>
										@endforeach
									</ul>
								</div><!-- actividades end -->
							</div>
							<div class="min-l col-lg-12 col-md-6">
								<div class="text-center">
									<div class="datagrid-act">
										<table id="">
											<thead>
												<tr>
													<th colspan="2">Documentos</th>
												</tr>
											</thead>
											<tbody>
											@if(count($archivos)  > 0)
												@foreach($archivos as $archivo)
														@foreach($archivo->archivos as $file)
															<tr>
																<td>{{ $archivo->nombre }}</td>
																<td>
																	<div>								
																		<ul>
																			<li><a href="{{$file}}" download="archivo-0" class="btn-des-act btn-descarga-act"><span>Descargar</span></a></li>
																		</ul>														
																	</div>
																</td>
															</tr>
														@endforeach
												@endforeach
											@else
												<tr>
													<td class="text-center" colspan="2">Actividad sin Archivos</td>
												</tr>
											@endif
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!-- .row end -->
		</div><!-- .container end -->
	</section>	<!-- End event single section -->
@endsection