@extends('pagina-web.layouts.layout')

@section('title', '| Eventos')

<?php
	function diccionario($palabra)
	{	
		$arr = array();
		$arr["01"] = "Ene";
		$arr["02"] = "Feb";
		$arr["03"] = "Mar";
		$arr["04"] = "Abr";
		$arr["05"] = "May";
		$arr["06"] = "Jun";
		$arr["07"] = "Jul";
		$arr["08"] = "Ago";
		$arr["09"] = "Sep";
		$arr["10"] = "Oct";
		$arr["11"] = "Nov";
		$arr["12"] = "Dic";
		return $arr[$palabra];
	}
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

@section('evento_seccion')
	<!-- eventos section section -->
	<section class="xs-content-section-padding xs-content-color">
		<div class="container">
			<div class="row">
				@if(count($eventos) === 0)
					<div class="col-lg-12">
						<h1 class="resp">NO HAY PUBLICACIONES DISPONIBLES<h1>
					</div>
				@endif
				@foreach($eventos as $evento)
					<div class="col-lg-6 row xs-single-event event-blue">
						<div class="col-md-5 xs-pad">
							<div class="xs-event-image" style="background-image: url(/{{ $evento->foto }});">
								<div class="xs-entry-date">
									<span class="entry-date-day">{{ date('d', strtotime($evento->fecha)) }}</span>
									<span class="entry-date-month">{{ diccionario(date('m', strtotime($evento->fecha))) }}</span>
								</div>
								<div class="xs-black-overlay"></div>
							</div><!-- .xs-event-image END -->
						</div>
						<div class="col-md-7">
							<div class="xs-event-content-event">
								<a href="{{ URL::route('eventodetalle',['slug' => str_slug($evento->titulo,'-'),'id' => $evento->id]) }}">{{ $evento->titulo }}</a>
								<p>{{ $evento->subtitulo }}</p>
								<div class="xs-countdown-timer" data-countdown="{{ date('Y-m-d', strtotime($evento->fecha)) }}"></div>
								<a href="{{ URL::route('eventodetalle',['slug' => str_slug($evento->titulo,'-'),'id' => $evento->id]) }}" class="btn btn-primary bg-bondiGreen">
									más detalles
								</a>
							</div><!-- .xs-event-content END -->
						</div>
					</div><!-- .xs-single-event END -->
				@endforeach
			</div><!-- .row end -->
			@if($eventos->count() > 0)
				<!-- pagination -->
				<div>
					<ul class="pagination justify-content-center xs-pagination">
						<li class="page-item {{ $eventos->previousPageUrl() == null ? 'disabled' : '' }}">
							<a class="page-link" href="{{ $eventos->previousPageUrl() ?? '#' }}" aria-label="Previous">
								<i class="fa fa-angle-left"></i>
							</a>
						</li>
						@if ($eventos->currentPage() > 1+$pagination_range )
							<li class="page-item">
								<a class="page-link" href="{{ $eventos->url(1) ?? '#' }}">{{ 1 }}</a>
							</li>

							@if ($eventos->currentPage() > 1+$pagination_range+1 )
								<li class="page-item disabled">
									<span class="page-link">&hellip;</span>
								</li>
							@endif
						@endif
						@for ($i=-$pagination_range; $i<=$pagination_range; $i++)
							@if ($eventos->currentPage()+$i > 0 && $eventos->currentPage()+$i <= $eventos->lastPage())
								<li class="page-item {{ $i==0 ? 'active' : '' }}">
									<a class="page-link" href="{{ $eventos->url($eventos->currentPage()+$i) }}">{{ $eventos->currentPage()+$i }}</a>
								</li>
							@endif
						@endfor
						@if ($eventos->currentPage() < $eventos->lastPage()-$pagination_range )	
							@if ($eventos->currentPage() < $eventos->lastPage()-$pagination_range-1 )
								<li class="page-item disabled">
									<span class="page-link">&hellip;</span>
								</li>
							@endif
							<li class="page-item">
								<a class="page-link" href="{{ $eventos->url($eventos->lastPage()) ?? '#' }}">{{ $eventos->lastPage() }}</a>
							</li>
						@endif
						<li class="page-item {{ $eventos->nextPageUrl()==null ? 'disabled' : '' }}">
							<a class="page-link " href="{{ $eventos->nextPageUrl() ?? '#' }}" aria-label="Next">
								<i class="fa fa-angle-right"></i>
							</a>
						</li>
					</ul>
				</div><!-- End pagination -->
			@endif
		</div><!-- .container end -->
	</section>	<!-- End eventos section -->
@endsection