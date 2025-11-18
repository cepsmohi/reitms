<button
    id="printBtn"
    @class([
        'block buttonhover rounded-xl cursor-pointer'
    ])
    title="Print Page"
    onclick="window.print();"
>
    <x-ui.icon
        icon="print"
        padding="p-0"
        :width="$width ?? 'w-10'"
    />
</button>
