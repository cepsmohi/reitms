<div
    onclick="window.print();"
    @class([
        $color ?? 'bg-gray-200 dark:bg-gray-500 hover:bg-gray-300',
        'block rounded-xl cursor-pointer'
    ])
    title="Print Page"
>
    <x-ui.icon
        icon="print"
        padding="p-0"
        dark=""
        :width="$width ?? 'w-10'"
    />
</div>
