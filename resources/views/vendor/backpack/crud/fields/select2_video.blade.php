<!-- select2 -->
@php
    $current_value = old($field['name']) ?? $field['value'] ?? $field['default'] ?? '';
    $entity_model = $crud->getRelationModel($field['entity'],  - 1);

    if (!isset($field['options'])) {
        $options = $field['model']::where([['tipo','=','videos']])->get();
    } else {
        $options = call_user_func($field['options'], $field['model']::query());
    }
@endphp

<div @include('crud::inc.field_wrapper_attributes') >

    <label>{!! $field['label'] !!}</label>
    @include('crud::inc.field_translatable_icon')

    <select
        name="{{ $field['name'] }}"
        style="width: 100%"
        @include('crud::inc.field_attributes', ['default_class' =>  'form-control select2_field'])
        >

        @if ($entity_model::isColumnNullable($field['name']))
            <option value="">-</option>
        @endif

        @if (count($options))
            @foreach ($options as $option)
                @if($current_value == $option->getKey())
                    <option value="{{ $option->getKey() }}" selected>{{ $option->{$field['attribute']} }}</option>
                @else
                    <option value="{{ $option->getKey() }}">{{ $option->{$field['attribute']} }}</option>
                @endif
            @endforeach
        @endif
    </select>

    {{-- HINT --}}
    @if (isset($field['hint']))
        <p class="help-block">{!! $field['hint'] !!}</p>
    @endif
</div>