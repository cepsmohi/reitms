<a
    @class([
        'submit-button buttonhover glass frows gap-2 group',
        $width ?? '',
        $color ?? 'bg-gray-500/50 dark:bg-gray-300/50 hover:bg-gray-300/50',
    ])
    id="{{ randtxt() }}"
    href="{{ $href }}"
>
    @isset($icon)
        <x-ui.icon
            icon="{{ $icon }}"
            width="w-6"
            padding="p-0"
        />
    @endisset
    @isset($tag)
        <span class="whitespace-nowrap">
            {{ $tag }}
        </span>
    @endisset
</a>
