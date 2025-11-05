<x-form.form-create
    wiresubmit="newlyCreateCustomer"
    formId="newlyCreateCustomerForm"
    :submitCondi="true"
    submitIcon="plus"
    submitTag="Create"
>
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
                    <div class="text-xs text-left">{{ $customer->customer_name }}</div>

                </div>
            @endforeach
        </div>
    @endif
    @error('customername')
    <x-form.inputwire
        name="customername"
        placeholder="Customer Name"
        icon="name"
    />
    <x-form.inputwire
        name="address"
        placeholder="Address"
        icon="location"
        hints="Holding, Road, Location"
    />
    @enderror
</x-form.form-create>


{{--<form wire:submit="createCustomer" id="createCustomerForm">--}}
{{--    <div class="mt-8 fcol">--}}
{{--        <div class="bg-gray-100 dark:bg-gray-700 p-4 rounded-3xl">--}}

{{--            <x-form.inputwire--}}
{{--                name="zone"--}}
{{--                placeholder="Zone/Area Code"--}}
{{--                icon="zone"--}}
{{--                hints="336"--}}
{{--            />--}}
{{--            <x-form.submit-button--}}
{{--                form="createCustomerForm"--}}
{{--                icon="plus"--}}
{{--                tag="Create"--}}
{{--            />--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</form>--}}
