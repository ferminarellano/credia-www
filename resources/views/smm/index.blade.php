<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Sistema de Monitoreo Multiproposito</title>
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css"  />
		<link rel="stylesheet" href="{{ asset('vendor/select2-bootstrap4-theme/dist/select2-bootstrap4.min.css') }}">
		
		<!-- Custom Stylesheets -->
		<link rel="stylesheet" href="{{ asset('smms/css/custom.css') }}">
		
	</head>
	
	<body>
	
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 pl-0 pr-0">
					<div class="header">
						<div class="container">
							<div class="row">
								<div class="col-md-6 pl-0">
									<span class="logo"><i class="far fa-chart-bar logito"></i> Sistema de Monitoreo Multiproposito</span> <small class="d-none d-sm-inline">| v.0.1</small>
								</div>
								<div class="col-md-6 pr-0">
									<div class="form-group has-search">
										<input type="text" class="form-control" placeholder="Buscar">
									</div>
									
									
								</div>
							</div>
							
							
						</div>
					</div>
				</div>
			</div>
				
				
				<div class="row">
					
					<div class="col-md-12">
						
						<div class="container">
						
							<div class="row">
								<div class="col-md-12 content mb-10">
										<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
										  <ol class="carousel-indicators">
											<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
											<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
											<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
										  </ol>
										  <div class="carousel-inner">
											<div class="carousel-item active">
											  <img class="d-block w-100" data-src="holder.js/800x350?auto=yes&bg=777&fg=555&text=First slide" alt="First slide">
											  <div class="carousel-caption d-none d-md-block">
												<h5>Buscando el progreso</h5>
												<p>Mejor que el lorem ipsum</p>
											  </div>
											</div>
											<div class="carousel-item">
											  <img class="d-block w-100" data-src="holder.js/800x350?auto=yes&bg=666&fg=444&text=Second slide" alt="Second slide">
											</div>
											<div class="carousel-item">
											  <img class="d-block w-100" data-src="holder.js/800x350?auto=yes&bg=555&fg=333&text=Third slide" alt="Third slide">
											</div>
										  </div>
										  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
											<span class="carousel-control-prev-icon" aria-hidden="true"></span>
											<span class="sr-only">Previous</span>
										  </a>
										  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
											<span class="carousel-control-next-icon" aria-hidden="true"></span>
											<span class="sr-only">Next</span>
										  </a>
										</div>
								</div>
							</div>
						</div>
						
						<div class="container">
							<div class="mensaje-container">
									<div class="alert alert-warning" role="alert">
									  Lo sentimos, su búsqueda no genero ningún resultado. Prueba nuevamente utilizando los formularios de búsqueda debajo de este mensaje.
									</div>
							</div>							
						</div>
						
						<div class="container">
						
							<div class="row">
								<div class="col-md-12 content mb-10">
										
										<div class="card text-center">
											  <div class="card-header">
												<ul class="nav nav-tabs card-header-tabs">
												  <li class="nav-item">
													<a class="nav-link active" href="#">Búsqueda Rápida</a>
												  </li>
												  <li class="nav-item">
													<a class="nav-link" href="#">Categoría o Area</a>
												  </li>
												  <li class="nav-item">
													<a class="nav-link" href="#">Avanzada</a>
												  </li>
												</ul>
											  </div>
											  <div class="card-body">
												<h5 class="card-title">Special title treatment</h5>
												<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
												<a href="#" class="btn btn-primary">Buscar</a>
											  </div>
									</div>

								</div>
							</div>
						</div>
						
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
						
						<div class="controls-container">
							<div class="container">
								<div class="row">
									<div class="col-md pl-0">
										<div class="control-paper">
											<i class="far fa-chart-bar"></i>
											Barra
										</div>
									</div>
									
									<div class="col-md">
										<div class="control-paper">
											<i class="fas fa-chart-line"></i>
											Linea
										</div>
									</div>
									
									<div class="col-md">
										<div class="control-paper">
										<i class="fas fa-chart-pie"></i>
											Pastel
										</div>
									</div>
									
									<div class="col-md">
										<div class="control-paper">
											<i class="fas fa-globe-americas"></i>
											Mapa
										</div>
									</div>
									
									<div class="col-md pr-0">
										<div class="control-paper">
											<i class="fas fa-table"></i>
											Tabla
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="container">
						
							<div class="row">
								<div class="col-md-12 content">
								
									<div class="row">
										<div class="col-md-12">
											<div class="chart-controls">
												
												<select id="indicador" multiple="multiple">
													<option>Seleccione... </option>
													<option>Seleccione un indicador... </option>
													<option>asdfñlasdf asdf asd fa sdf asdf</option>
												</select>
												
											</div>
										</div>
									</div>
									
									<div class="row">
										<div class="col-md-12">
											<div class="chart-container">
												<div id="chartdiv"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
							
						</div>
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
		
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
		
		<script src="https://www.amcharts.com/lib/4/core.js"></script>
		<script src="https://www.amcharts.com/lib/4/charts.js"></script>

		<script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>
		
		<script src="{{ asset('vendor/holder/holder.min.js') }}"></script>
		<script src="{{ asset('smms/js/main.js') }}"></script>

	</body>
</html>

