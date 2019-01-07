@extends('pagina-web.layouts.layout')

<?php
	$pagination_range = 2;
?>

@section('title', 'FAQ -')

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
	<script type="text/javascript"> 
		
	</script>   
@endpush 

@section('faq_seccion')
	<!-- newsletter section -->
	<div class="xs-newsletter-section">
		<div class="container">
			<div class="row">
				<div class="col-md-8 mx-auto">
					<div class="xs-newsletter-content">
						<i class="icon-telemarketer icon-watermark"></i>
						<h5>¿Cómo ayudamos?</h5>
						<form action="/search" method="get" class="xs-newsletter-form" id="xs-form">
							<input type="text" id="search" name="search" class="form-control" placeholder="Tus preguntas.....">
							<button type="submit"><i class="fa fa-search"></i> Buscar</button>
						</form>
					</div>
				</div>
			</div><!-- .row end -->
		</div><!-- .container end -->
	</div>	<!-- End newsletter section -->

	<!-- newsletter section -->
	<section class="xs-content-section-padding">
		<div class="container">
			<div class="row col-md-11 mx-auto">
				<div class="col-lg-12">
					<div class="tab-content" id="v-pills-tabContent">
						<div role="tabpanel">
							<div class="row">
								@foreach($faqs as $faq)
									<div class="col-md-6">
										<div class="xs-tab-content content">
											<h5>{{ $faq->pregunta }}</h5>
											<p>{{ $faq->respuesta }}</p>
										</div><!-- .xs-tab-content END -->
									</div>
								@endforeach
							</div>
							@if($faqs->count() > 0)
								<!-- pagination -->
								<div class="paginate">
									<ul class="pagination justify-content-center xs-pagination">
										<li class="page-item {{ $faqs->previousPageUrl() == null ? 'disabled' : '' }}">
											<a class="page-link" href="{{ $faqs->previousPageUrl() ?? '#' }}" aria-label="Previous">
												<i class="fa fa-angle-left"></i>
											</a>
										</li>
										@if ($faqs->currentPage() > 1+$pagination_range )
											<li class="page-item">
												<a class="page-link" href="{{ $faqs->url(1) ?? '#' }}">{{ 1 }}</a>
											</li>

											@if ($faqs->currentPage() > 1+$pagination_range+1 )
												<li class="page-item disabled">
													<span class="page-link">&hellip;</span>
												</li>
											@endif
										@endif
										@for ($i=-$pagination_range; $i<=$pagination_range; $i++)
											@if ($faqs->currentPage()+$i > 0 && $faqs->currentPage()+$i <= $faqs->lastPage())
												<li class="page-item {{ $i==0 ? 'active' : '' }}">
													<a class="page-link" href="{{ $faqs->url($faqs->currentPage()+$i) }}">{{ $faqs->currentPage()+$i }}</a>
												</li>
											@endif
										@endfor
										@if ($faqs->currentPage() < $faqs->lastPage()-$pagination_range )	
											@if ($faqs->currentPage() < $faqs->lastPage()-$pagination_range-1 )
												<li class="page-item disabled">
													<span class="page-link">&hellip;</span>
												</li>
											@endif
											<li class="page-item">
												<a class="page-link" href="{{ $faqs->url($faqs->lastPage()) ?? '#' }}">{{ $faqs->lastPage() }}</a>
											</li>
										@endif
										<li class="page-item {{ $faqs->nextPageUrl()==null ? 'disabled' : '' }}">
											<a class="page-link " href="{{ $faqs->nextPageUrl() ?? '#' }}" aria-label="Next">
												<i class="fa fa-angle-right"></i>
											</a>
										</li>
									</ul>
								</div><!-- End pagination -->
							@endif
						</div><!-- #water END -->
					</div>
				</div>
			</div><!-- .row end -->
		</div><!-- .container end -->
	</section>	<!-- End newsletter section -->
@endsection
