@@extends('layouts.app')

@@section('title')
    <span class="title">
    @if($config->options->localized)
        @@lang('models/{!! $config->modelNames->camelPlural !!}.singular') @@lang('crud.detail')
    @else
        {{ $config->modelNames->human }} Details
    @endif
    </span>

    <a class="btn btn--s btn--link create-btn"
       href="@{{ route('{!! $config->prefixes->getRoutePrefixWith('.') !!}{!! $config->modelNames->camelPlural  !!}.index') }}">
        @if($config->options->localized)
            @@lang('crud.back')
        @else
            Back
        @endif
    </a>
@@endsection

@@section('content')
    <div class="m1">
        @@include('{{ $config->prefixes->getViewPrefixForInclude() }}{{ $config->modelNames->snakePlural }}.show_fields')
    </div>
@@endsection
