<a
    @class([
        'submit-button buttonhover glass frows gap-2 group',
        $width ?? '',
        $color ?? 'btncolor',
    ])
    id="{{ randtxt() }}"
    href="{{ $href }}"
>
    @isset($icon)
        <x-ui.icon
            icon="{{ $icon }}"
            width="w-6"
            padding="p-0"
            rounded="{{ $rounded ?? 'rounded-none' }}"
        />
    @endisset
    @isset($tag)
        <span class="whitespace-nowrap truncate">
            {{ $tag }}
        </span>
    @endisset
</a>
