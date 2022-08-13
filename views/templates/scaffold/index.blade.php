@@extends('layouts.app')

@@section('title')
    <span class="title">
        @if($config->options->localized)
            @@lang('models/{{ $config->modelNames->camelPlural }}.plural')
        @else
            {{ $config->modelNames->humanPlural }}
        @endif
    </span>
    <a class="btn btn--s btn--link create-btn" href="@{{ route('{!! $config->prefixes->getRoutePrefixWith('.') !!}{!! $config->modelNames->camelPlural !!}.create') }}">
        @if($config->options->localized)
            @@lang('crud.add_new')
        @else
            Add New
        @endif
    </a>
@@endsection

@@section('content')
    @@include('furtive-templates::common.message')

    <div class="my1">
        {!! $table !!}
    </div>
@@endsection
