@if ($paginator->hasPages())
    <div>
        {{-- Previous Page Link --}}
        @if (!$paginator->onFirstPage())
            <a class="btn btn--s" href="{{ $paginator->previousPageUrl() }}" rel="prev"
                   aria-label="@lang('pagination.previous')">«</a>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <span class="btn btn--s fnt--light-gray" aria-disabled="true"><span class="page-link">{{ $element }}</span></span>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <span class="btn btn--blue btn--s fnt--dark-gray" aria-current="page"><span class="page-link">{{ $page }}</span></span>
                    @else
                        <span class="btn btn--s"><a class="page-link" href="{{ $url }}">{{ $page }}</a></span>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a class="btn btn--s" href="{{ $paginator->nextPageUrl() }}" rel="next"
                   aria-label="@lang('pagination.next')">»</a>
        @endif
    </div>
@endif
