<!-- 'bootstrap / Toggle Switch {{ $fieldTitle }} Field' -->

@{!! Form::checkbox('{{ $fieldName }}', 1, null,  ['class' => 'custom-control-input']) !!}
@if($config->options->localized)
    @{!! Form::label('{{ $fieldName }}', __('models/{{ $config->modelNames->camelPlural }}.fields.{{ $fieldName }}'), ['class' => 'custom-control-label']) !!}
@else
    @{!! Form::label('{{ $fieldName }}', '{{ $fieldTitle }}', ['class' => 'custom-control-label']) !!}
@endif