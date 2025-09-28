<div class="mt-7 w-full fcol">
    @if($type != null)
        @if($customer)
            <div class="fcol uppercase">
                <div class="stitle border-b">Selected Customer</div>
                <div class="stitle text-grad">{{ $customer->name }}</div>
                <div class="stitle">{{ $customer->code }}</div>
                <div class="text-xs">{{ $customer->address }}</div>
            </div>
        @else
            <div class="stitle">Select Customer</div>
            <x-form.search :$search/>
            @if($search != '')
                <x-task.create.customer.cards :$customers/>
            @endif
        @endif
    @endif
</div>
