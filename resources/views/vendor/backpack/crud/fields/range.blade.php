<!-- html5 range input -->
<div @include('crud::inc.field_wrapper_attributes') >
    <label>{!! $field['label'] !!}</label>
    @include('crud::inc.field_translatable_icon')
	
	<?php
		$proyecto = App\Models\Proyecto::find($id);
	?>
	
	<div class="range-slider">
		<input 
			min="{{ $field['min'] }}"
			max="{{ $field['max'] }}"
			type="range"
			id="range-slider__range"
			class="range-slider__range"
			name="{{ $field['name'] }}"
			value="{{ old($field['name']) ? old($field['name']) : (isset($field['value']) ? $field['value'] : (isset($field['default']) ? $field['default'] : '' )) }}"
			@include('crud::inc.field_attributes')
		>
		<span class="range-slider__value" id="range-slider__value">0</span>
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
			.range-slider span{
				font-weight: 600;
				font-family: 'Source Sans Pro','Helvetica Neue',Helvetica,Arial,sans-serif;
			}
		
			.range-slider__range {
			  -webkit-appearance: none;
			  height: 10px;
			  border-radius: 5px;
			  background: #d7dcdf;
			  outline: none;
			  padding: 0;
			  margin: 0;
			}
			
			#range-slider__range.range-slider__range{
				width: calc(100% - (73px));
				display: inline-block;
			}

			.range-slider__range::-webkit-slider-thumb {
			 -webkit-appearance: none;
			 appearance: none;
			 width: 20px;
			 height: 20px;
			 border-radius: 50%;
			 background: #222d32;
			 cursor: pointer;
			 -webkit-transition: background .10s ease-in-out;
			 transition: background .15s ease-in-out;
			}

			.range-slider__range::-webkit-slider-thumb:hover {
			 background: #1abc9c;
			}

			.range-slider__range:active::-webkit-slider-thumb {
			 background: #1abc9c;
			}

			.range-slider__range::-moz-range-thumb {
			 width: 20px;
			 height: 20px;
			 border: 0;
			 border-radius: 50%;
			 background: #2c3e50;
			 cursor: pointer;
			 -webkit-transition: background .10s ease-in-out;
			 transition: background .15s ease-in-out;
			}

			.range-slider__range::-moz-range-thumb:hover {
			 background: #1abc9c;
			}

			.range-slider__range:active::-moz-range-thumb {
			 background: #1abc9c;
			}

			.range-slider__range:focus::-webkit-slider-thumb {
			 -webkit-box-shadow: 0 0 0 3px #fff, 0 0 0 6px #1abc9c;
			 box-shadow: 0 0 0 3px #fff, 0 0 0 6px #1abc9c;
			}

			.range-slider__value {
			  display: inline-block;
			  position: relative;
			  width: 60px;
			  color: #fff;
			  line-height: 20px;
			  text-align: center;
			  border-radius: 3px;
			  background: #222d32;
			  padding: 5px 10px;
			  margin-left: 8px;
			}
			
			#range-slider__value.range-slider__value{
				width: 60px;
			}

			.range-slider__value:after {
			  position: absolute;
			  top: 8px;
			  left: -7px;
			  width: 0;
			  height: 0;
			  border-top: 7px solid transparent;
			  border-right: 7px solid #222d32;
			  border-bottom: 7px solid transparent;
			  content: '';
			}
		</style>
    @endpush


  {{-- FIELD EXTRA JS --}}
  {{-- push things in the after_scripts section --}}

    @push('crud_fields_scripts')
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

		<script>
			var rangeSlider = function(){
				var slider = $('.range-slider'),
				range = $('.range-slider__range'),
				value = $('.range-slider__value');
				
				slider.each(function(){

					value.each(function(){
						var value = $(this).prev().attr('value');
						$(this).html(value.concat('%'));
					});

					range.on('input', function(){
						$(this).next(value).html(this.value.concat('%'));
					});
				});
			};

			rangeSlider();
		</script>
    @endpush
@endif