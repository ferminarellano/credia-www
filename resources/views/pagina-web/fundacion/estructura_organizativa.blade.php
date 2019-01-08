@extends('pagina-web.layouts.layout')

@section('title', '| Estructura Organizativa')

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

@section('organigrama_eo')
	<!-- Organigrama section section -->
	<section class="xs-content-section-padding-conocenos organigram-responsive">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 content-center">
					<h2 class="xs-title" style="color:#011b58;font-weight:900;">Organigrama</h2>
				</div>
				<div class="col-lg-9 content-center">
					<div class="xs-heading xs-mb-100 text-center">
						<div class="organigrama">
							<ul>
								<li>
								  <a href="#" style="width:170px;">Asamblea General</a>
									<ul>
										<li><a href="#" style="width:170px;">Junta Directiva</a>
											<ul>
												<li><a href="#" style="width:170px;">Dirección Ejecutiva</a>
													<ul>
														<li id="line4"><a href="#">Administración y Finanzas</a></li>
															<ul>
																<li id="line5"><a href="#" style="width:170px;">Promoción y Mercadeo</a></li>
																	<ul>
																		<li id="line6" style="float:right;margin-top:-50px;"><a href="#" style="width:170px;">Centro de Documentación</a></li>
																			<ul>		
																				<li><a href="#">Asistencia Técnica y Gestión de proyectos</a>
																					<ul>
																						<li>
																							<a href="#" style="width:170px;">Observatorio de desarrollo sostenible</a>
																						</li>
																						<li>
																							<a href="#" style="width:170px;">Cambio Climático y Gestión Integral de Riesgos</a>
																						</li>
																						<li>
																							<a href="#" style="width:170px;">Interpretación y Educación Ambiental</a>
																						</li>
																						<li>
																							<a href="#" style="width:170px;height: 69.78px">Agua, bosques y Suelos</a>
																						</li>
																					</ul>
																				</li>
																			</ul>
																	</ul>
															</ul>
													</ul>
												</li>
											</ul>
										</li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- Organigrama section section -->
@endsection