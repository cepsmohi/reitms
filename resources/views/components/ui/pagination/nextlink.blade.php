<div>
    <button
        type="button"
        @if($paginator->hasMorePages())
            wire:click="nextPage('{{ $paginator->getPageName() }}')"
        @endif
        aria-label="{{ __('pagination.next') }}"
    >
        <x-ui.icon icon="rightarrow"/>
    </button>
</div>
