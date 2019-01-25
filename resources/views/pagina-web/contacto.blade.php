@extends('pagina-web.layouts.layout')

@section('title', '| Contáctenos')

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

@push('scripts')
    <script>
		/* Agregar Ajax submit */
	</script>     
@endpush   

@section('contacto_seccion')
	<!-- contacto section -->
	<section class="xs-contact-section-v2">
		<div class="container">
			<div class="xs-contact-container">
				<div class="row">
					<div class="col-lg-6">
						<div class="xs-contact-form-wraper">
							<h4>Escr&iacute;banos</h4>
							<form method="post" action="{{URL::to('/contactos')}}" id="formcontacto" name="formcontacto" class="xs-contact-form contact-form-v2">
								{{ csrf_field() }}
								<div class="row">
									<div class="col-lg-12 input-group">
										<input type="text" name="nombre" id="nombre" value="{{ old('nombre') }}" class="form-control" placeholder="Nombre completo">
										<div class="input-group-append">
											<div class="input-group-text"><i class="fa fa-user"></i></div>
										</div>
									</div><!-- .input-group END -->
									<div class="col-lg-12 input-group">
										<input type="email" name="correo" id="correo" value="{{ old('correo') }}" class="form-control" placeholder="Correo">
										<div class="input-group-append">
											<div class="input-group-text"><i class="fa fa-envelope-o"></i></div>
										</div>
									</div><!-- .input-group END -->
									<div class="col-lg-12 input-group massage-group">
										<textarea name="mensaje" id="mensaje" value="{{ old('mensaje') }}" placeholder="Ingrese su mensaje" class="form-control" cols="30" rows="10"></textarea>
										<div class="input-group-append">
											<div class="input-group-text"><i class="fa fa-pencil"></i></div>
										</div>
									</div><!-- .input-group END -->
								</div><!-- .row end -->
								<button type="submit" class="btn btn-success">Enviar</button>
							</form><!-- .xs-contact-form #xs-contact-form END -->
						</div><!-- .xs-contact-form-wraper END -->
					</div>
					<div class="col-lg-6">
						<div class="xs-maps-wraper map-wraper-v2">
							<div id="xs-map" class="xs-box-shadow-2"></div>
						</div>
					</div>
				</div><!-- .row end -->
			</div><!-- .xs-contact-container END -->
		</div><!-- .container end -->
	</section>	<!-- End contacto section -->
@endsection

