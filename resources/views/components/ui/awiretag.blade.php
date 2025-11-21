<div
    class="frows gap-2 print:hidden"
    title="{{ $title ?? '' }}"
>
    <button
        @class([
            'submit-button buttonhover glass group pr-5',
            $color ?? 'btncolor'
        ])
        id="{{ randtxt() }}"
        wire:click="{{ $wireclick }}"
        wire:loading.attr="disabled"
        wire:offline.attr="disabled"
        @if (isset($wireconfirm)) wire:confirm="{{ $wireconfirm }}" @endif
        @if (isset($aclick)) @click="{{ $aclick }}" @endif
    >
        @isset($icon)
            <x-ui.iconwithloading :$icon :$wireclick/>
        @endisset
        <span class="whitespace-nowrap">{{ $tag }}</span>
    </button>
</div>
