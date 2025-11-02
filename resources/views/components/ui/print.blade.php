<button
    id="printBtn"
    @class([
        $color ?? 'bg-gray-500/50 dark:bg-gray-300/50 hover:bg-gray-300/50',
        'block buttonhover glass rounded-xl cursor-pointer'
    ])
    title="Print Page"
    onclick="window.print();"
>
    <x-ui.icon
        icon="print"
        padding="p-0"
        dark=""
        :width="$width ?? 'w-10'"
    />
</button>
