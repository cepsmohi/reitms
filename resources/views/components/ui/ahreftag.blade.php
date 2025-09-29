<div
    @class([
        'frows gap-2',
        $width ?? ''
    ])
>
    <a
        @class([
            'submit-button dark:bg-gray-600 group',
            $width ?? ''
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
</div>
