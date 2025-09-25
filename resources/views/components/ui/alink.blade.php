<a
    href="{{ $href ?? '#' }}"
    class="alink"
>
    @isset($icon)
        <x-ui.icon
            icon="{{ $icon ?? 'icon' }}"
            padding="p-0"
        />
    @endisset
    <div>{{ $tag ?? '' }}</div>
</a>
