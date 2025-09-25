<img
    @class([
        'overflow-hidden drop-shadow-xl',
        $width ?? 'w-7',
        $padding ?? 'p-1',
        $rounded ?? 'rounded-xl',
        $dark ?? 'dark:bg-gray-200'
    ])
    src="{{ asset('images/icon/' . $icon . '.svg') }}"
    alt="{{ $icon }}"
/>
