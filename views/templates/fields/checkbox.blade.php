<!-- {{ $fieldTitle }} Field -->

@{!! Form::label('{{ $fieldName }}', '{{ $fieldTitle }}') !!}
@{!! Form::checkbox('{{ $fieldName }}', '{{ $checkboxVal }}', null) !!}
