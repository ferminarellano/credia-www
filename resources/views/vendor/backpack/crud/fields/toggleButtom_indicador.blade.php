
   <div @include('crud::inc.field_wrapper_attributes')>
		
		<?php
			$articulos = App\Models\DataIndicador::where([['id',"=",$id]])->get(['estado']);
		?>
		
		<div class="smart-button-container">
			<div class="smart-button">
				@foreach( $articulos as $art)
					<div class="btn-group" data-toggle="buttons">
						@if($art->estado === 0)
							<label class="btn btn-default btn-off btn1 active">
							<input type="radio" value="0" name="estado" checked="checked">Borrador</label>
							<label class="btn btn-default btn-on btn1">
							<input type="radio" value="1" name="estado">Publicado</label>
						@else
							<label class="btn btn-default btn-off btn1">
							<input type="radio" value="0" name="estado" >Borrador</label>
							<label class="btn btn-default btn-on btn1 active">
							<input type="radio" value="1" name="estado" checked="checked">Publicado</label>
						@endif
					</div>
				@endforeach
			</div>
		</div>
		
		 
		
		{{-- HINT --}}
		@if (isset($field['hint']))
			<p class="help-block">{!! $field['hint'] !!}</p>
		@endif
	</div>	

@if ($crud->checkIfFieldIsFirstOfItsType($field, $fields))
  {{-- FIELD EXTRA CSS  --}}
  {{-- push things in the after_styles section --}}

      @push('crud_fields_styles')
		
         <style>
				.smart-button-container
				{
					text-align:right;
					padding-right: 0px;
					float: right;
				}
				
				.smart-button{
					display: flex;
					width: 169px;
					border: 0px solid #efefef;
					/*margin-left: auto;*/
				}
				
				.btn-default.btn-on.active{
					background-color: #5BB75B;
					color: white;
					font-weight: 500;
				}
				
				.btn-default.btn-off.active{
					background-color: #DA4F49;
					color: white;
					font-weight: 500;
				}		
		 </style>
		 
      @endpush


  {{-- FIELD EXTRA JS --}}
  {{-- push things in the after_scripts section --}}

      @push('crud_fields_scripts')
		<script>
			
		</script>
      @endpush
@endif