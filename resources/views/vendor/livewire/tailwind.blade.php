@if ($paginator->hasPages())
    @php
        $current = $paginator->currentPage();
        $last    = $paginator->lastPage();
    @endphp

    <nav class="p-4 frow gap-1">
        <a
            href="{{ $paginator->previousPageUrl() ?? '#' }}"
            class="bg-gray-200 border border-gray-400 dark:bg-gray-500 hover:bg-gray-300 rounded-xl"
            title="Previous Page"
        >
            <x-ui.icon
                icon="leftarrow"
                padding="p-0"
                dark=""
                width="w-10"
            />
        </a>
        <div class="w-10 h-10 rounded-xl border border-gray-400 frow">{{ $current }}</div>
        <a
            href="{{ $paginator->nextPageUrl() ?? '#' }}"
            class="bg-gray-200 border border-gray-400 dark:bg-gray-500 hover:bg-gray-300 rounded-xl"
            title="Next Page"
        >
            <x-ui.icon
                icon="rightarrow"
                padding="p-0"
                dark=""
                width="w-10"
            />
        </a>
    </nav>
@endif
