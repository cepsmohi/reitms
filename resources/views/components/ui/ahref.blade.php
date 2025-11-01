<a
    href="{{ $href ?? '#' }}"
    @class([
        $color ?? 'bg-gray-500/50 dark:bg-gray-300/50 hover:bg-gray-300/50',
        'block buttonhover glass rounded-xl'
    ])
    title="{{ $title ?? '' }}"
>
    @isset($icon)
        <x-ui.icon
            icon="{{ $icon }}"
            padding="p-0"
            dark=""
            :width="$width ?? null"
        />
    @endisset
</a>
