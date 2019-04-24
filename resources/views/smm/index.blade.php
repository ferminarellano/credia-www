<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<title>Sistema de Monitoreo Multiproposito</title>
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
		
		<!-- Custom Stylesheets -->
		<link rel="stylesheet" href="{{ asset('smms/css/custom.css') }}">
		<link rel="stylesheet" href="{{ asset('smms/css/wizard.css') }}">
		<link rel="stylesheet" href="{{ asset('smms/libs/datatables/jquery.dataTables.min.css') }}">
		<link rel="stylesheet" href="{{ asset('smms/libs/datatables/dataTables.bootstrap4.min.css') }}">
		@stack('after_styles')
		
	</head>
	
	<body>
		<div id="container"></div>
		
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 pl-0 pr-0">
				
					@include('smm.header')
				
				</div>
			</div>
				
			<div class="row">
				<div class="col-md-12">
					
					@include('smm.slider')
					
					{{-- 
						<div class="container">
							<div class="mensaje-container">
									<div class="alert alert-warning" role="alert">
										Lo sentimos, su búsqueda no genero ningún resultado. Prueba nuevamente utilizando los formularios de búsqueda debajo de este mensaje.
									</div>
							</div>
						</div>
					--}}
					
					@include('smm.search')
					
					{{--
						<div class="container">
							<div class="mensaje-container">
									<div class="alert alert-success" role="alert">
										<h4 class="alert-heading">Well done!</h4>
										<p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
										<hr>
										<p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
									</div>
							</div>
						</div>
					--}}
						
					@include('smm.data')
					
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-12 pl-0 pr-0">
					<div class="footer mt-20">
						<p class="text-center mb-0">Derechos reservados © 2019 - Centro Regional de Documentación e Interpretación Ambiental</p>
					</div>
				</div>
			</div>
		</div>
		

		<script
		  src="https://code.jquery.com/jquery-3.4.0.min.js"
		  integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg="
		  crossorigin="anonymous"></script>
  
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		
		<script src="https://www.amcharts.com/lib/4/core.js"></script>
		<script src="https://www.amcharts.com/lib/4/charts.js"></script>
		<script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>
		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
		
		<script src="{{ asset('smms/libs/datatables/jquery.dataTables.min.js') }}"></script>
		<script src="{{ asset('smms/libs/datatables/dataTables.bootstrap4.min.js') }}"></script>
		<script src="{{ asset('smms/js/main.js') }}"></script>
		<script src="{{ asset('js/custom.js') }}"></script>
		
		@stack('after_scripts')

	</body>
</html>

