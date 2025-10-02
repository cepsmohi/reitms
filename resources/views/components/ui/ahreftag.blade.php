<a
    @class([
        'submit-button frows gap-2 group',
        $width ?? '',
        $color ?? 'bg-gray-400 dark:bg-gray-500 hover:bg-gray-300'
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
