<li class="menu-item @{{ Request::is('{!! $config->prefixes->getRoutePrefixWith('.') !!}{!! $config->modelNames->camelPlural !!}*') ? ' menu-item-selected' : '' }}">
    <a href="@{{ route('{!! $config->prefixes->getRoutePrefixWith('.') !!}{!! $config->modelNames->camelPlural !!}.index') }}" class="menu-item-link">
        @if($config->options->localized)
            @@lang('models/{{ $config->modelNames->camelPlural }}.plural')
        @else
            {{ $config->modelNames->humanPlural }}
        @endif
    </a>
</li>
