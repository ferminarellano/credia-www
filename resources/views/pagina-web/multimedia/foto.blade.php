@extends('pagina-web.layouts.layout')

@section('title', '| Album de fotos')

@section('banner')
	<section class="xs-banner-inner-section parallax-window" style="background-image:url(/{{$foto}})">
		<div class="xs-black-overlay"></div>
		<div class="container">
			<div class="color-white xs-inner-banner-content">
				<h2>{{$titulo}}</h2>
				<p>{{$contenido}}</p>
				<div class="xs-btn-wraper">
					<a href="{{URL::route('album',['slug' => str_slug('fotos','-')])}}" class="btn btn-outline-primary"><i class="fa fa-reply"> │ </i>
						ÁLBUMES
					</a>
				</div>
			</div>
		</div>
	</section>
@endsection

@section('foto_seccion')
	
	<!-- Fotos section -->
	<div class="xs-content-section-padding" id="contenido">
		<div class="container">
			@if(count($fotos) > 0)
				<div class="xs-portfolio-grid">
					@foreach($fotos as $foto)
						@foreach($foto->fotos as $pic)
							<div class="xs-portfolio-grid-item">
								<a href="/{{$pic}}" class="xs-single-portfolio-item xs-image-popup">
									<img src="/{{$pic}}" alt="">
									<div class="xs-portfolio-content">
										<span class="icon-plus-button"></span>
									</div>
								</a>
							</div>
						@endforeach
					@endforeach
				</div>
			@else
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<h1 class="resp col-md-12">NO HAY FOTOGRAFÍAS EN EL ÁLBUM<h1>
					</div>
				</div>
			@endif
		</div>
	</div><!-- End Fotos section -->
@endsection