<x-form.form-create
    wiresubmit="createTask"
    :submitCondi="true"
    submitFun="assignCustomer"
    formId="assignCustomerForm"
    submitIcon="refresh"
    submitTag="Assign"
>
    <div class="stitle mb-4">Select Customer</div>
    <x-form.inputwirelive
        name="customercode"
        placeholder="Customer Code (if any)"
        icon="link"
        hints="x-xx-xxxxxx-xx-xx-x"
        pattern="formatByPattern(this, [1,2,6,2,2,1])"
        :required="false"
    />
    @if($customercode != '' && $customers != null)
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
    @endif
</x-form.form-create>
