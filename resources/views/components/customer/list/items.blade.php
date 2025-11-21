<div class="mb-4 w-full fcols gap-1">
    @foreach($customers as $customer)
        <div
            class="w-full px-2 py-1 text-left submit-button flex-col items-start justify-center cursor-pointer"
            wire:click="selectCustomer('{{ $customer->code }}')"
        >
            <div class="text-sm text-left">{{ $customer->code }}</div>
            <div class="text-xs text-left text-gray-500">{{ $customer->customer_name }}</div>

        </div>
    @endforeach
</div>
