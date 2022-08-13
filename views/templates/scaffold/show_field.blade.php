<!-- {{ $fieldTitle }} Field -->
<div class="my1">
    <div>
        @if($config->options->localized)
            @{!! Form::label('{{ $fieldName }}', __('models/{{ $config->modelNames->camelPlural }}.fields.{{ $fieldName }}').':') !!}
        @else
            @{!! Form::label('{{ $fieldName }}', '{{ $fieldTitle }}:') !!}
        @endif
    </div>
    <div>
        @{{ ${!! $config->modelNames->camel !!}->{!! $fieldName !!} }}
    </div>
</div>
