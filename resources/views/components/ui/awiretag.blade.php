<div
    class="{{ $width ?? 'w-fit' }} text-base print:hidden"
    title="{{ $title ?? '' }}"
>
    <button
        class="w-full frows cursor-pointer gap-2 rounded-full py-1 md:rounded-xl px-2 md:py-1"
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
