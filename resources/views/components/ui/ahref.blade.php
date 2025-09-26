<a
    href="{{ $href ?? '#' }}"
    @class([
        $color ?? 'bg-gray-200 dark:bg-gray-500 hover:bg-gray-300',
        'rounded-md'
    ])
    title="{{ $title ?? '' }}"
>
    @isset($icon)
        <x-ui.icon
            icon="{{ $icon ?? 'icon' }}"
            padding="p-0"
            dark=""
            :width="$width ?? null"
        />
    @endisset
    <div>{{ $tag ?? '' }}</div>
</a>
