<!-- number input -->
<div @include('crud::inc.field_wrapper_attributes') >
    <label for="{{ $field['name'] }}">{!! $field['label'] !!}</label>
    @include('crud::inc.field_translatable_icon')

    @if(isset($field['prefix']) || isset($field['suffix'])) <div class="input-group"> @endif
        @if(isset($field['prefix'])) <div class="input-group-addon">{!! $field['prefix'] !!}</div> @endif
        <input
        	type="text"
        	name="{{ $field['name'] }}"
			class="form-control money-mask"
            id="{{ $field['name'] }}"
            value="{{ old($field['name']) ? old($field['name']) : (isset($field['value']) ? $field['value'] : (isset($field['default']) ? $field['default'] : '' )) }}"
            @include('crud::inc.field_attributes')
			>

    @if(isset($field['prefix']) || isset($field['suffix'])) </div> @endif

    {{-- HINT --}}
    @if (isset($field['hint']))
        <p class="help-block">{!! $field['hint'] !!}</p>
    @endif
</div>

@if ($crud->checkIfFieldIsFirstOfItsType($field, $fields))
	@push('crud_fields_scripts')
		<script>

			var formatter = new Intl.NumberFormat('en-US', {
				style: 'decimal',
				maximumFractionDigits: 2,
				minimumFractionDigits: 2
			});
			
			var unmasked_values = [];
			
			function mask(nombre){
				var amount = $('input[name="' + nombre + '"]').val();
				unmasked_values[nombre] = parseFloat(amount);
				
				if(!amount)
				{
					$('input[name="' + nombre + '"]').val(formatter.format(0));
					return;
				}
				
				$('input[name="' + nombre + '"]').val(formatter.format(amount));
			}
			
			function unmask(nombre){
				var amount = unmasked_values[nombre];
				
				if(amount !== 0 && !amount)
				{
					return;
				}
				
				$('input[name="' + nombre + '"]').val(amount);
			}
			
			function remove_commas(nombre){
				var amount = $('input[name="' + nombre + '"]').val();
				
				if(!amount)
				{
					return;
				}
				
				amount = amount.replace(/,/g , "");
				
				$('input[name="' + nombre + '"]').val(amount);
			}
			
			function clean_currency(elemento){
				var val = elemento.val();
				
				if(isNaN(val)){
					 val = val.replace(/[^0-9\.,]/g,'');
					 if(val.split('.').length>2) 
						 val =val.replace(/\.+$/,"");
				}
				
				elemento.val(val);
			}
			
		</script>
	@endpush
@endif

@push('crud_fields_scripts')
	<script>
		jQuery(document).ready(function($){
		
			$('input[name="{{ $field['name'] }}"]').keyup(function(){
				clean_currency($(this));
			});
			
			$('input[name="{{ $field['name'] }}"]').change(function(){
				remove_commas('{{ $field['name'] }}');
				mask('{{ $field['name'] }}');
			});
			
			$('input[name="{{ $field['name'] }}"]').focus(function(){
				unmask('{{ $field['name'] }}');
			});
			
			$('input[name="{{ $field['name'] }}"]').blur(function(){
				unmask('{{ $field['name'] }}');
				remove_commas('{{ $field['name'] }}');
				mask('{{ $field['name'] }}');
			});
			
			mask("{{$field['name']}}");
		});
		
	</script>
@endpush

@if(isset($field['spinner']))
	@if($field['spinner'] == False) 
		
		@push('crud_fields_styles')
			<style>
				input[name={{$field['name']}}]::-webkit-inner-spin-button, 
				input[name={{$field['name']}}]::-webkit-outer-spin-button { 
				  -webkit-appearance: none; 
				  margin: 0; 
				} 
			</style>
		@endpush

	@endif
@endif
				
			


