<div>
    <button
        type="button"
        @if(!$paginator->onFirstPage())
            wire:click="previousPage('{{ $paginator->getPageName() }}')"
        x-on:click="{{ $scrollIntoViewJsSnippet }}"
        dusk="previousPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}.after"
        @endif
    >
        <x-ui.icon icon="leftarrow"/>
    </button>
</div>
