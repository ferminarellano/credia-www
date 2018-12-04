@extends('layouts.layout')

@section('title', 'Voluntarios -')

@section('welcome_vol')
	<section class="xs-banner-inner-section parallax-window" style="background-image:url(/{{ $foto }})">
		<div class="xs-black-overlay"></div>
		<div class="container">
			<div class="color-white xs-inner-banner-content">
				<h2>{{ $titulo }}</h2>
				<p>{{ $contenido }}</p>
			</div>
		</div>
	</section>
@endsection

@section('team_vol')
	<!-- team section -->
	<section class="xs-section-padding bg-gray">
		<div class="container">
			<div class="xs-heading row xs-mb-60">
				<div class="col-md-9 col-xl-9">
					<h2 class="xs-title">Nuestros voluntarios</h2>
					<!-- <span class="xs-separetor dashed"></span> -->
					<h2 class="xs-line-title" style="margin-top:25px;">¿Por qué hacer voluntariado?</h2>
					<p>
						Cuando te conviertes en voluntario o voluntaria te sientes útil. Te das cuenta de que tus acciones,
						tus tareas como voluntario/a tienen un objetivo y ayudan a otras personas o al medio ambiente.
					</p>
				</div><!-- .xs-heading-title END -->
			</div><!-- .row end -->
			<div class="row">
				<div class="col-md-6 col-lg-3">
					<div class="xs-single-team xs-mb-50">
						<img src="assets/images/team/team_1.png" alt="">
						<div class="xs-team-content">
							<h4>William Khanna</h4>
							<small>CEO & Founder</small>
							<svg class="xs-svgs" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 270 138">
								<path class="fill-red" d="M375,3294H645v128a10,10,0,0,1-10,10l-250-20a10,10,0,0,1-10-10V3294Z" transform="translate(-375 -3294)"/>
							</svg>
						</div><!-- .xs-team-content END -->
					</div><!-- .xs-single-team END -->
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="xs-single-team xs-mb-50">
						<img src="assets/images/team/team_1.png" alt="">
						<div class="xs-team-content">
							<h4>Mr. Aladin</h4>
							<small>General Manager</small>
							<svg class="xs-svgs" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 270 138">
								<path class="fill-purple" d="M375,3294H645v128a10,10,0,0,1-10,10l-250-20a10,10,0,0,1-10-10V3294Z" transform="translate(-375 -3294)"/>
							</svg>
						</div><!-- .xs-team-content END -->
					</div><!-- .xs-single-team END -->
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="xs-single-team xs-mb-50">
						<img src="assets/images/team/team_1.png" alt="">
						<div class="xs-team-content">
							<h4>Zummon Khan</h4>
							<small>Volunteer</small>
							<svg class="xs-svgs" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 270 138">
								<path class="fill-blue" d="M375,3294H645v128a10,10,0,0,1-10,10l-250-20a10,10,0,0,1-10-10V3294Z" transform="translate(-375 -3294)"/>
							</svg>
						</div><!-- .xs-team-content END -->
					</div><!-- .xs-single-team END -->
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="xs-single-team xs-mb-50">
						<img src="assets/images/team/team_1.png" alt="">
						<div class="xs-team-content">
							<h4>Harista Pro</h4>
							<small>Volunteer</small>
							<svg class="xs-svgs" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 270 138">
								<path class="fill-orange" d="M375,3294H645v128a10,10,0,0,1-10,10l-250-20a10,10,0,0,1-10-10V3294Z" transform="translate(-375 -3294)"/>
							</svg>
						</div><!-- .xs-team-content END -->
					</div><!-- .xs-single-team END -->
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="xs-single-team">
						<img src="assets/images/team/team_1.png" alt="">
						<div class="xs-team-content">
							<h4>Banana Halim</h4>
							<small>Volunteer</small>
							<svg class="xs-svgs" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 270 138">
								<path class="fill-riptide" d="M375,3294H645v128a10,10,0,0,1-10,10l-250-20a10,10,0,0,1-10-10V3294Z" transform="translate(-375 -3294)"/>
							</svg>
						</div><!-- .xs-team-content END -->
					</div><!-- .xs-single-team END -->
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="xs-single-team">
						<img src="assets/images/team/team_1.png" alt="">
						<div class="xs-team-content">
							<h4>Kumiriano Li</h4>
							<small>Volunteer</small>
							<svg class="xs-svgs" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 270 138">
								<path class="fill-yellow" d="M375,3294H645v128a10,10,0,0,1-10,10l-250-20a10,10,0,0,1-10-10V3294Z" transform="translate(-375 -3294)"/>
							</svg>
						</div><!-- .xs-team-content END -->
					</div><!-- .xs-single-team END -->
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="xs-single-team">
						<img src="assets/images/team/team_1.png" alt="">
						<div class="xs-team-content">
							<h4>Tom Rahabi</h4>
							<small>Volunteer</small>
							<svg class="xs-svgs" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 270 138">
								<path class="fill-green" d="M375,3294H645v128a10,10,0,0,1-10,10l-250-20a10,10,0,0,1-10-10V3294Z" transform="translate(-375 -3294)"/>
							</svg>
						</div><!-- .xs-team-content END -->
					</div><!-- .xs-single-team END -->
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="xs-single-team">
						<img src="assets/images/team/team_1.png" alt="">
						<div class="xs-team-content">
							<h4>Join Now</h4>
							<small>Want to join with us</small>
							<svg class="xs-svgs" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 270 138">
								<path class="fill-navy-blue" d="M375,3294H645v128a10,10,0,0,1-10,10l-250-20a10,10,0,0,1-10-10V3294Z" transform="translate(-375 -3294)"/>
							</svg>
						</div><!-- .xs-team-content END -->
					</div><!-- .xs-single-team END -->
				</div>
			</div><!-- .row END -->
		</div><!-- .container end -->
	</section>	<!-- End team section -->
@endsection

@section('voluntarios_vol')
	<section class="parallax-window xs-become-a-volunteer xs-section-padding" style="background-image: url('assets/images/backgrounds/voluntarios-bg.jpg')">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-lg-7">
					<div class="xs-volunteer-form-wraper bg-aqua">
						<h2>Se un voluntario del CREDIA</h2>
						<br><br><br>
						<p>
							Solo lleva un minuto decidir en que participar. Decida qué hacer. Elige un nombre, elige una foto. 
							Y así, estarás listo para comenzar.
						</p>
						
						<form action="{{URL::to('/voluntarios')}}" method="post" id="volunteer-form" class="xs-volunteer-form" enctype="multipart/form-data">
							 {{ csrf_field() }}
							<div class="row">
								<div class="col-lg-6">
									<input type="text" name="nombre" id="nombre" value="{{ old('nombre') }}" class="form-control" placeholder="Nombre completo" required>
								</div>
								<div class="col-lg-6">	
									<input type="text" name="correo" id="correo" value="{{ old('correo') }}" class="form-control" placeholder="Correo" required>
								</div>
								<div class="col-lg-6">
									<select name="actividad_id" id="actividad_id" value="{{ old('actividad_id') }}" class="form-control" required>
											<option value="">Seleccionar</option>
										@foreach($actividades as $actividad)
											<option value="{{$actividad->id}}">{{$actividad->actividad}}</option>
										@endforeach
									</select>
								</div>
								<div class="col-lg-6 xs-mb-20">
									<div class="xs-fileContainer">
										<input type="file" name="file" class="form-control">
										<label for="archivo">Sube tu CV</label>
									</div>
									<small style="padding-left:85px;color:white;">Formato <b>PDF</b> 100kb máximo.</small>
								</div>
							</div><!-- .row end -->
							<textarea name="descripcion" id="descripcion" value="{{ old('descripcion') }}" placeholder="Ingrese su mensaje" cols="30" class="form-control" rows="10" required></textarea>
							<button type="submit" class="btn btn-secondary btn-color-alt">aplica ya</button>
						</form><!-- #volunteer-form .xs-volunteer-form END -->
					</div>
				</div>
			</div><!-- .row end -->
		</div><!-- .container end -->
	</section>
@endsection