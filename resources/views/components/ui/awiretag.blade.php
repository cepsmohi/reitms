<div
    class="frows gap-2 print:hidden"
    title="{{ $title ?? '' }}"
>
    <button
        @class([
            'submit-button buttonhover glass group',
            $color ?? 'bg-gray-500/50 dark:bg-gray-300/50 hover:bg-gray-300/50',
        ])
        class=""
        id="{{ randtxt() }}"
        wire:click="{{ $wireclick }}"
        wire:loading.attr="disabled"
        wire:offline.attr="disabled"
        @if (isset($wireconfirm)) wire:confirm="{{ $wireconfirm }}" @endif
        @if (isset($aclick)) @click="{{ $aclick }}" @endif
    >
        <img
            class="w-6"
            src="{{ asset('images/icon/' . $icon . '.svg') }}"
            alt="{{ $icon }}"
            wire:loading.remove
            wire:target="{{ $wireclick }}"
        />
        <img
            class="w-6"
            src="{{ asset('images/icon/loading.gif') }}"
            alt="{{ $icon }}"
            wire:loading
            wire:target="{{ $wireclick }}"
        />
        <span class="whitespace-nowrap">
            {{ $tag }}
        </span>
    </button>
</div>
