@php
    if (! isset($scrollTo)) {
        $scrollTo = 'body';
    }

    $scrollIntoViewJsSnippet = ($scrollTo !== false)
        ? <<<JS
           (\$el.closest('{$scrollTo}') || document.querySelector('{$scrollTo}')).scrollIntoView()
        JS
        : '';
@endphp

<div>
    @if ($paginator->hasPages())
        <nav role="navigation" aria-label="Pagination Navigation" class="m-4">
            <div class="fcol">
                <div>
                    <span class="relative z-0 inline-flex rtl:flex-row-reverse rounded-md shadow-sm">
                        <span>
                            {{-- Previous Page Link --}}
                            @if ($paginator->onFirstPage())
                                <span aria-disabled="true" aria-label="{{ __('pagination.previous') }}">
                                    <span
                                        class="relative inline-flex items-center px-2 py-2 text-sm text-white dark:text-gray-800 bg-white  rounded-l-md dark:bg-gray-800"
                                        aria-hidden="true"
                                    >
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                fill-rule="evenodd"
                                                d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                                clip-rule="evenodd"
                                            />
                                        </svg>
                                    </span>
                                </span>
                            @else
                                <button type="button" wire:click="previousPage('{{ $paginator->getPageName() }}')"
                                        x-on:click="{{ $scrollIntoViewJsSnippet }}"
                                        dusk="previousPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}.after"
                                        class="relative inline-flex items-center px-2 py-2 text-sm text-green-500 bg-white  rounded-l-md hover:text-gray-400 transition ease-in-out duration-150 dark:bg-gray-800 dark:active:bg-gray-700 dark:focus:-blue-800"
                                        aria-label="{{ __('pagination.previous') }}">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                              d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                </button>
                            @endif
                        </span>

                        @php
                            $current = $paginator->currentPage();
                            $last = $paginator->lastPage();

                            if ($last <= 5) {
                                $start = 1;
                                $end = $last;
                            } elseif ($current <= 3) {
                                $start = 1;
                                $end = 5;
                            } elseif ($current >= $last - 2) {
                                $start = $last - 4;
                                $end = $last;
                            } else {
                                $start = $current - 2;
                                $end = $current + 2;
                            }
                        @endphp

                        {{-- Loop through window --}}
                        @for ($i = $start; $i <= $end; $i++)
                            <a
                                href="{{ $paginator->url($i) }}"
                                type="button"
                                @class([
                                    'w-8 relative frow px-2 py-2 -ml-px text-sm',
                                    'transition ease-in-out duration-150',
                                    'text-gray-400 bg-white dark:bg-gray-800',
                                    'text-green-500 font-black' => $i==$current
                                ])
                            >
                                {{ $i }}
                            </a>
                        @endfor

                        <span>
                            {{-- Next Page Link --}}
                            @if ($paginator->hasMorePages())
                                <button type="button" wire:click="nextPage('{{ $paginator->getPageName() }}')"
                                        x-on:click="{{ $scrollIntoViewJsSnippet }}"
                                        dusk="nextPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}.after"
                                        class="relative inline-flex items-center px-2 py-2 text-sm text-green-500 bg-white  rounded-r-md hover:text-gray-400 transition ease-in-out duration-150 dark:bg-gray-800 dark:active:bg-gray-700 dark:focus:-blue-800"
                                        aria-label="{{ __('pagination.next') }}">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                              d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                </button>
                            @else
                                <span aria-disabled="true" aria-label="{{ __('pagination.next') }}">
                                    <span
                                        class="relative inline-flex items-center px-2 py-2 text-sm text-white dark:text-gray-800 bg-white  rounded-r-md dark:bg-gray-800"
                                        aria-hidden="true">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                  d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                  clip-rule="evenodd"/>
                                        </svg>
                                    </span>
                                </span>
                            @endif
                        </span>
                    </span>
                </div>
                <div>
                    <p class="text-sm text-gray-700 dark:text-gray-400">
                        <span>{!! __('Showing') !!}</span>
                        <span>{{ $paginator->firstItem() }}</span>
                        <span>{!! __('to') !!}</span>
                        <span>{{ $paginator->lastItem() }}</span>
                        <span>{!! __('of') !!}</span>
                        <span>{{ $paginator->total() }}</span>
                        <span>{!! __('results') !!}</span>
                    </p>
                </div>
            </div>
        </nav>
    @endif
</div>
