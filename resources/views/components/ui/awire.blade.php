<div
    id="{{ randtxt() }}"
    wire:click="{{ $wireclick }}"
    wire:loading.attr="disabled"
    wire:offline.attr="disabled"
    @if (isset($wireconfirm)) wire:confirm="{{ $wireconfirm }}" @endif
    @if (isset($aclick)) @click="{{ $aclick }}" @endif
    @class([
        'block buttonhover glass cursor-pointer',
        $color ?? 'bg-gray-500/50 dark:bg-gray-300/50 hover:bg-gray-300/50',
        $rounded ?? 'rounded-xl'
    ])
    title="{{ $title ?? '' }}"
>
    @isset($icon)
        <div
            wire:loading.remove
            wire:target="{{ $wireclick }}"
        >
            <x-ui.icon
                icon="{{ $icon ?? 'icon' }}"
                padding="p-0"
                dark=""
                :width="$width ?? null"
            />
        </div>
        <div
            wire:loading
            wire:target="{{ $wireclick }}"
        >
            <img
                @class([
                    'overflow-hidden drop-shadow-xl',
                    $width ?? 'w-7',
                    $padding ?? 'p-1',
                    $rounded ?? 'rounded-xl',
                    $dark ?? 'dark:bg-gray-200 dark:rounded-md'
                ])
                src="{{ asset('images/icon/loading.gif') }}"
                alt="loading"
            />
        </div>
    @endisset
</div>
