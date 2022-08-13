<!-- {{ $fieldName }} Field -->
@if($config->options->localized)
    @{!! Form::label('{{ $fieldName }}', __('models/{{ $config->modelNames->camelPlural }}.fields.{{ $fieldName }}')) !!}
@else
    @{!! Form::label('{{ $fieldName }}', '{{ $fieldTitle }}') !!}
@endif
@{!! Form::password('{{ $fieldName }}', [@php if(isset($options)) { echo htmlspecialchars_decode($options); } @endphp]) !!}