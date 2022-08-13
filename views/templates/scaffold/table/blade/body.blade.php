<table class="list-table" id="{{ $config->modelNames->dashedPlural }}-table">
    <thead>
    <tr>
        {!! $fieldHeaders !!}
@if($config->options->localized)
<th class="txt--center">@@lang('crud.action')</th>
@else
    <th class="txt--center">Action</th>
@endif
    </tr>
    </thead>

    <tbody>
        @@foreach(${{ $config->modelNames->camelPlural }} as ${{ $config->modelNames->camel }})
            <tr>
                {!! $fieldBody !!}
                <td class="txt--center table-actions">
                    @{!! Form::open(['route' => ['{{ $config->prefixes->getRoutePrefixWith('.') }}{{ $config->modelNames->camelPlural }}.destroy', ${{ $config->modelNames->camel }}->{{ $config->primaryName }}], 'method' => 'delete']) !!}
                        <a href="@{{ route('{!! $config->prefixes->getRoutePrefixWith('.') !!}{!! $config->modelNames->camelPlural !!}.show', [${!! $config->modelNames->camel !!}->{!! $config->primaryName !!}]) }}"
                           class='btn btn--s fnt--white btn--blue mx1'>
                            @if($config->options->localized)
@@lang('crud.detail')
@else
    View
@endif
                        </a>
                        <a href="@{{ route('{!! $config->prefixes->getRoutePrefixWith('.') !!}{!! $config->modelNames->camelPlural !!}.edit', [${!! $config->modelNames->camel !!}->{!! $config->primaryName !!}]) }}"
                           class='btn btn--s fnt--white btn--green mx1'>
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
@endif, ['type' => 'submit', 'class' => 'btn btn--s fnt--white btn--red mx1', 'onclick' => "return confirm(@if($config->options->localized)
__('crud.are_you_sure')
@else
    'Are you sure?'
@endif)"]) !!}
                    @{!! Form::close() !!}
                </td>
            </tr>
        @@endforeach
    </tbody>
</table>

{!! $paginate !!}
