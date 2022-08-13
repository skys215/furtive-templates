<div class='table-actions'>
@{!! Form::open(['route' => ['{{ $config->prefixes->getRoutePrefixWith('.') }}{{ $config->modelNames->camelPlural }}.destroy', ${{ $config->primaryName }}], 'method' => 'delete']) !!}
    <a href="@{{ route('{!! $config->prefixes->getRoutePrefixWith('.') !!}{!! $config->modelNames->camelPlural !!}.show', ${!! $config->primaryName !!}) }}" class='btn btn--s fnt--white btn--green mx1'>
        @if($config->options->localized)
@@lang('crud.detail')
@else
    View
@endif
    </a>
    <a href="@{{ route('{!! $config->prefixes->getRoutePrefixWith('.') !!}{!! $config->modelNames->camelPlural !!}.edit', ${!! $config->primaryName !!}) }}" class='btn btn--s fnt--white btn--green mx1'>
        @if($config->options->localized)
@@lang('crud.edit')
@else
    Edit
@endif
    </a>
    @{!! Form::button(@if($config->options->localized)
__('crud.delete')
@else
    'Delete'
@endif, [
        'type' => 'submit',
        'class' => 'btn btn--s fnt--white btn--red mx1',
@if($config->options->localized)
        'onclick' => "return confirm('Are you sure?')"
@else
        'onclick' => 'return confirm("'.__('crud.are_you_sure').'")'
@endif

    ]) !!}
</div>
@{!! Form::close() !!}
