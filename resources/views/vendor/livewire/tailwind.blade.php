@if ($paginator->hasPages())
    @php
        $current = $paginator->currentPage();
        $last    = $paginator->lastPage();
    @endphp

    <nav class="p-4 frow gap-1">
        <a
            href="{{ $paginator->previousPageUrl() ?? '#' }}"
            class="w-10 h-10 block"
            title="Previous Page"
        >
            @if($paginator->previousPageUrl())
                <div
                    class="buttonhover glass bg-gray-500/50 dark:bg-gray-300/50 hover:bg-gray-300/50 rounded-xl cursor-pointer"
                >
                    <x-ui.icon
                        icon="leftarrow"
                        padding="p-0"
                        dark=""
                        width="w-10"
                    />
                </div>
            @endif
        </a>
        <div class="w-10 h-10 frow">{{ $current }}</div>
        <a
            href="{{ $paginator->nextPageUrl() ?? '#' }}"
            class="w-10 h-10 block"
            title="Next Page"
        >
            @if($paginator->nextPageUrl())
                <div
                    class="buttonhover glass bg-gray-500/50 dark:bg-gray-300/50 hover:bg-gray-300/50 rounded-xl cursor-pointer"
                >
                    <x-ui.icon
                        icon="rightarrow"
                        padding="p-0"
                        dark=""
                        width="w-10"
                    />
                </div>
            @endif
        </a>
    </nav>
@endif
