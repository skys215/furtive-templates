@@extends('layouts.app')

@@section('title')
    <span class="title">
    @if($config->options->localized)
        @@lang('crud.create') @@lang('models/{!! $config->modelNames->camelPlural !!}.singular')
    @else
        Create {{ $config->modelNames->humanPlural }}
    @endif
    </span>

    <a href="@{{ route('{!! $config->prefixes->getRoutePrefixWith('.') !!}{!! $config->modelNames->camelPlural !!}.index') }}" class="btn btn--s btn--link create-btn">@if($config->options->localized) @@lang('crud.cancel') @else Cancel @endif</a>    
@@endsection

@@section('content')
        @@include('furtive-templates::common.errors')
        
        @{!! Form::open(['route' => '{{ $config->prefixes->getRoutePrefixWith('.') }}{{ $config->modelNames->camelPlural }}.store', 'role' => 'form']) !!}
                @@include('{{ $config->prefixes->getViewPrefixForInclude() }}{{ $config->modelNames->snakePlural }}.fields')
        @{!! Form::submit('Save', ['class' => 'btn btn--s btn--blue fnt--white']) !!}


        @{!! Form::close() !!}
@@endsection
