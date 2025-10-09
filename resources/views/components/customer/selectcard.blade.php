<div
    @class([
        'card h-52 group',
        'border border-gray-200',
        'transition cursor-pointer',
        'bg-gray-200 hover:bg-gray-400 dark:bg-gray-700 dark:hover:bg-gray-500'
    ])
    id="{{ randtxt() }}"
    wire:click="selectCustomer({{ $customer->id }})"
>
    <!-- Header -->
    <div class=" px-4 py-3 border-b border-gray-100 flex justify-between items-center group-hover:rounded-t-2xl">
        <x-ui.h3 :title="$customer->name"/>
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
        <p class="truncate"><strong>Address:</strong> {{ $customer->address }}</p>
        <p><strong>Zone:</strong> {{ $customer->zone }}</p>
        <p><strong>Load (hr):</strong> {{ number_format($customer->load_hr, 2) }} m<sup>3</sup></p>
    </div>
</div>
