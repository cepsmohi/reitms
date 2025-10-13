<a
    class="card block h-52 group"
    href="{{ route('customers.edit', $customer) }}"
>
    <!-- Header -->
    <div class=" px-4 py-3 border-b border-gray-100 frowb group-hover:rounded-t-2xl">
        <div>
            <x-ui.h3 :title="$customer->name"/>
        </div>
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
        @php
            $detail = $customer->detail;
        @endphp
        <p><strong>Address:</strong> {{ $customer->detail->address ?? '' }}</p>
        <div class="frows gap-2">
            <p><strong>Zone:</strong> {{ $customer->zone }}</p>
            {{--            <p><strong>Load (hr):</strong> {{ number_format($detail->hourly_load, 2) ?? '' }} m<sup>3</sup></p>--}}
        </div>
    </div>

    <!-- Footer / Actions -->
    <div class="adbr">
        <div class="text-[10px] text-gray-600">{{ $customer->user->name }}</div>
        <x-ui.icon icon="user" padding="p-0" rounded="rounded-full" dark="" width="w-5"/>
    </div>
</a>
