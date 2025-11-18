<a
    href="{{ $href ?? '#' }}"
    @class([
        'block buttonhover rounded-xl'
    ])
    title="{{ $title ?? '' }}"
>
    @isset($icon)
        <x-ui.icon
            icon="{{ $icon }}"
            padding="p-0"

            :width="$width ?? null"
        />
    @endisset
</a>
