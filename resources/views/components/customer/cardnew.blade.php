<a
    @class([
        'w-sm h-52 rounded-2xl relative group fcol',
        'border border-gray-200',
        'transition',
        'bg-gray-200 hover:bg-gray-400 dark:bg-gray-700 dark:hover:bg-gray-500'
    ])
    href="{{ route('customers.create') }}"
>
    <div class="frow gap-2">
        <x-ui.icon icon="addcard" width="w-16"/>
        <div class="text-3xl">Create New</div>
    </div>
</a>
