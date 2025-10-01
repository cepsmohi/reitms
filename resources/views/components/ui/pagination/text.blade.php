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
