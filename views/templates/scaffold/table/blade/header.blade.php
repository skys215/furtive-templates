<th class="txt--center">@if($config->options->localized) @@lang('models/{{ $config->modelNames->camelPlural }}.fields.{{ $fieldName }}') @else {!! $fieldTitle !!} @endif</th>