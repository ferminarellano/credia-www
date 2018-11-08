@extends('layouts.layout')

<?php
	function diccionario($palabra)
	{	
		$arr = array();
		
		$arr["01"] = "ENERO";
		$arr["02"] = "FEBRERO";
		$arr["03"] = "MARZO";
		$arr["04"] = "ABRIL";
		$arr["05"] = "MAYO";
		$arr["06"] = "JUNIO";
		$arr["07"] = "JULIO";
		$arr["08"] = "AGOSTO";
		$arr["09"] = "SEPTIEMBRE";
		$arr["10"] = "OCTUBRE";
		$arr["11"] = "NOVIEMBRE";
		$arr["12"] = "DICIEMBRE";
		
		return $arr[$palabra];
	}
?>

@section('title', 'Blog -')

@section('welcomeblog')
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

@section('blogsection')
	
	<!-- blog section -->
	<section class="xs-content-section-padding">
		<div class="container">
			<div class="row xs-mb-50">
				@if(count($articulos) === 0)
					<div class="col-lg-12" style="color:#011b58;font-size:48px;font-weight:bold;text-align:center;padding-top:40px;">
						NO HAY PUBLICACIONES DISPONIBLES
					</div>
				@endif
				@foreach($articulos as $articulo)
					<div class="col-lg-4 col-md-6">
						<div class="xs-box-shadow xs-single-journal xs-mb-30">
							<div class="entry-thumbnail ">
								<img class="img-height" src="{{$articulo->foto}}">
								<div class="post-author">
									<span class="xs-round-avatar">
										<img class="img-responsive" src="assets/images/avatar/avatar_1.jpg">
									</span>
									<span class="author-name">
										<a href="#">Por {{ $articulo->get()->first()->user()->get()->first()->name }}</a>
									</span>
								</div>
							</div><!-- .xs-item-header END -->
							<div class="entry-header">
								<div class="entry-meta">
									<span class="date">
										<a href=""  rel="bookmark" class="entry-date">
											{{date('d', strtotime($articulo->fecha))}} DE {{diccionario(date('m', strtotime($articulo->fecha)))}} DE {{date('Y', strtotime($articulo->fecha))}}
										</a>
									</span>
								</div>
								
								<h4 class="entry-title">
									<a href="{{URL::route('blogdetalle',['id' => $articulo->id])}}">{{$articulo->titulo}}</a>
								</h4>
							</div><!-- .xs-entry-header END --> 
							<span class="xs-separetor"></span>
							<div class="post-meta meta-style-color">
								<span class="comments-link">
									<i class="fa fa-comments-o"></i>
									<a href="">300 comentarios</a>
								</span><!-- .comments-link -->
								<span class="view-link">
									<i class="fa fa-eye"></i>
									<a href="">1000 vistas</a>
								</span>
							</div><!-- .post-meta END -->
						</div><!-- .xs-from-journal END -->
					</div>
				@endforeach
				
				<!-- pagination -->
				<!-- <ul class="pagination justify-content-center xs-pagination"> -->
					<!-- <li class="page-item disabled"> -->
						<!-- <a class="page-link" href="#" aria-label="Previous"> -->
							<!-- <i class="fa fa-angle-left"></i> -->
						<!-- </a> -->
					<!-- </li> -->
					<!-- <li class="page-item"><a class="page-link active" href="#">1</a></li> -->
					<!-- <li class="page-item"><a class="page-link" href="#">2</a></li> -->
					<!-- <li class="page-item"><a class="page-link" href="#">3</a></li> -->
					<!-- <li class="page-item disabled"><a class="page-link" href="#">...</a></li> -->
					<!-- <li class="page-item"><a class="page-link" href="#">12</a></li> -->
					<!-- <li class="page-item"> -->
						<!-- <a class="page-link" href="#" aria-label="Next"> -->
							<!-- <i class="fa fa-angle-right"></i> -->
						<!-- </a> -->
					<!-- </li> -->
				<!-- </ul>--><!-- End pagination --> 
			</div><!-- .row end -->
		</div><!-- .container end -->
	</section><!-- End blog section -->
@endsection