<div
    class="absolute bg-gray-500/90 w-[235px] z-50 p-1 rounded-xl max-h-[30vh] overflow-y-scroll"
>
    @foreach($customers as $customer)
        <div
            class="w-full px-2 py-1 text-left flex-col items-start justify-center cursor-pointer hover:bg-gray-400/90 rounded-xl"
            wire:click="selectCustomer('{{ $customer->code }}')"
        >
            <div class="text-sm text-left">{{ $customer->code }}</div>
            <div class="text-[8px] text-left">{{ $customer->customer_name }}</div>
        </div>
    @endforeach
</div>

