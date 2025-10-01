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
        @if($i==$current) @endif
        href="{{ $paginator->url($i) }}"
        type="button"
        @class([
            'w-8 relative frow px-2 py-2 -ml-px text-sm cursor-pointer',
            'transition ease-in-out duration-150',
            'text-gray-400 bg-white dark:bg-gray-800 border-y',
            'text-green-500 font-black' => $i==$current
        ])
    >
        {{ $i }}
    </a>
@endfor
