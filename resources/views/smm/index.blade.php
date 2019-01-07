<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Sistema de Monitoreo Multiproposito</title>
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
		
		<!-- Custom Stylesheets -->
		<link rel="stylesheet" href="{{ asset('smms/css/custom.css') }}">
		
	</head>
	
	<body>
	
		<div class="container-fluid">
					
				<div class="row">
					<div class="header">
						<span class="logo"><i class="far fa-chart-bar logito"></i> Sistema de Monitoreo Multiproposito</span> <small class="d-none d-sm-inline">| v.0.1</small>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-2">
						<div class="sidebar">
							
							<div class="accordion" id="accordionExample">
							
								<div class="card">
									<div class="card-header" id="headingOne">
										<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
											Indicador
										</button>
									</div>

									<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
										<div class="card-body">
											Buscar
										</div>
									</div>
								</div>
								
								<div class="card">
									<div class="card-header" id="headingTwo">
										<h5 class="mb-0">
											<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
												Periodo
											</button>
										</h5>
									</div>
									
									<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
										<div class="card-body">
						
										</div>
									</div>
								</div>
								
								<div class="card">
									<div class="card-header" id="headingThree">
										<h5 class="mb-0">
											<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
												Area
											</button>
										</h5>
									</div>
									
									<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
										<div class="card-body">
										
										</div>
									</div>
								</div>
								
							</div>

						</div>
					</div>
					
					<div class="col-md">
						<div class="controls-container">
							<div class="container">
								<div class="row">
									<div class="col-md pl-0">
										<div class="control-paper">
											1
										</div>
									</div>
									
									<div class="col-md">
										<div class="control-paper">
											2
										</div>
									</div>
									
									<div class="col-md">
										<div class="control-paper">
											3
										</div>
									</div>
									
									<div class="col-md">
										<div class="control-paper">
											4
										</div>
									</div>
									
									<div class="col-md pr-0">
										<div class="control-paper">
											5
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="content">
							<div class="container">
							
								<div class="row">
									<div class="col-md-12">
										<div class="chart-controls">
											Chart Controls
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
		
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		
		<script src="https://www.amcharts.com/lib/4/core.js"></script>
		<script src="https://www.amcharts.com/lib/4/charts.js"></script>

		<script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>
		
		<script src="{{ asset('smms/js/main.js') }}"></script>

	</body>
</html>

