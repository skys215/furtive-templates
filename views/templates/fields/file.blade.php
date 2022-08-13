<!-- {{ $fieldTitle }} Field -->

@if($config->options->localized)
    @{!! Form::label('{{ $fieldName }}', __('models/{{ $config->modelNames->camelPlural }}.fields.{{ $fieldName }}')) !!}
@else
    @{!! Form::label('{{ $fieldName }}', '{{ $fieldTitle }}') !!}
@endif

@{!! Form::file('{{ $fieldName }}', ['class' => 'custom-file-input']) !!}
@{!! Form::label('{{ $fieldName }}', 'Choose file', ['class' => 'custom-file-label']) !!}
