
<div class="container">
	<div class="row">
		<div class="col-md-12 content mb-10">
				
			<div class="card text-center">
			
				<div class="card-header">
					<ul class="nav nav-tabs card-header-tabs">
					
						<li class="nav-item">
							<a class="nav-link active" href="#">Búsqueda Rápida</a>
						</li>
						
					</ul>
				</div>
				
				<div id="wizard-react" class="card-body">

				</div>
				
			</div>
		</div>
	</div>
</div>

@push('after_scripts')
<script>
	$(document).ready(function() {
		$('#indicador.select2').select2();
	});
</script>
@endpush

