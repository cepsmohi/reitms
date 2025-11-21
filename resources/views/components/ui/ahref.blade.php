<a
    href="{{ $href ?? '#' }}"
    @class([
        'block buttonhover rounded-xl btncolor'
    ])
    title="{{ $title ?? '' }}"
>
    @isset($icon)
        <x-ui.icon
            icon="{{ $icon }}"
            padding="p-0"
            :width="$width ?? ''"
        />
    @endisset
</a>
