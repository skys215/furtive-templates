<!-- {{ $fieldTitle }} Field -->

@if($config->options->localized)
    @{!! Form::label('{{ $fieldName }}', __('models/{{ $config->modelNames->camelPlural }}.fields.{{ $fieldName }}')) !!}
@else
    @{!! Form::label('{{ $fieldName }}', '{{ $fieldTitle }}') !!}
@endif
@{!! Form::text('{{ $fieldName }}', null, ['id'=>'{{ $fieldName }}']) !!}
