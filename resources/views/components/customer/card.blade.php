<div
    @class([
        'w-sm h-52 rounded-2xl relative group',
        'border border-gray-200',
        'transition',
        'bg-gray-200 hover:bg-gray-400 dark:bg-gray-700 dark:hover:bg-gray-500'
    ])
>
    <!-- Header -->
    <div class=" px-4 py-3 border-b border-gray-100 flex justify-between items-center group-hover:rounded-t-2xl">
        <h3 class="text-lg font-semibold">{{ $customer->name }}</h3>
        <span
            @class([
                'px-2 py-1 text-xs rounded-full border',
                'bg-green-100 text-green-700' => $customer->status == 'active',
                'bg-red-100 text-red-700' => $customer->status != 'active'
            ])
        >
            {{ ucfirst($customer->status) }}
        </span>
    </div>

    <!-- Body -->
    <div class="px-4 py-3 space-y-2 text-sm">
        <p><strong>Code:</strong> {{ $customer->code }}</p>
        <p><strong>Address:</strong> {{ $customer->address }}</p>
        <p><strong>Zone:</strong> {{ $customer->zone }}</p>
        <p><strong>Load (hr):</strong> {{ number_format($customer->load_hr, 2) }} m<sup>3</sup></p>
    </div>

    <!-- Footer / Actions -->
    <div
        class="adbr hidden group-hover:flex frowe gap-2"
    >
        <img
            class="w-7"
            src="{{ $customer->user->image }}"
            alt="{{ $customer->user->name }}"
            title="{{ $customer->user->name }}"
        />
        <x-ui.ahref
            href="#"
            icon="edit"
        />
    </div>
</div>
