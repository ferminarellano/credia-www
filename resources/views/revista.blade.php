@extends('pagina-web.layouts.layout')

@section('title', '| Sistemas')

@section('banner')
	<section class="xs-banner-inner-section parallax-window" style="background-image:url('assets/images/backgrounds/background-img.jpg');padding-top: 210px;padding-bottom: 120px;">
		<div class="xs-black-overlay"></div>
		<div class="container">
			<div class="color-white xs-inner-banner-content">
				<h2>Revista Hoja Verde</h2>
			</div>
		</div>
	</section>
@endsection

@section('sistemas_seccion')

	<div class="section secondary-section">
		<div class="container centered">
			<p class="large-text">
				El <span>CREDIA</span> te invita a leer su más reciente publicación.
			</p>
			<p>
				<a href="https://issuu.com/crediahn/docs/revista_hoja_verde" target="_blank"><img src="/img/spreads.gif" height="300" width="300" alt=""></a>
			</p>
		</div>
	</div>

@endsection
