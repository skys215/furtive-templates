@if ($paginator->hasPages())
    <div class="navigation">
        {{-- Previous Page Link --}}
        @if (!$paginator->onFirstPage())
            <a class="btn btn--s" href="{{ $paginator->previousPageUrl() }}" rel="prev"
                   aria-label="@lang('pagination.previous')">«</a>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a class="btn btn--s" href="{{ $paginator->nextPageUrl() }}" rel="next"
                   aria-label="@lang('pagination.next')">»</a>
        @endif
    </div>
@endif

