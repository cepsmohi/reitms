<x-form.form-create
    wiresubmit="newlyCreateCustomer"
    formId="newlyCreateCustomerForm"
    :submitCondi="true"
    submitIcon="plus"
    submitTag="Create"
>
    <x-form.inputwirelive
        name="customercode"
        placeholder="Customer Code"
        icon="tag"
        hints="xxx-xxxxxx"
        pattern="let v = this.value.replace(/\D/g, '').slice(0,14);
                if (v.length > 13) this.value = v.replace(/(\d)(\d{2})(\d{6})(\d{2})(\d{2})(\d{1})/, '$1-$2-$3-$4-$5-$6');
                else if (v.length > 11) this.value = v.replace(/(\d)(\d{2})(\d{6})(\d{2})(\d{1,2})/, '$1-$2-$3-$4-$5');
                else if (v.length > 9) this.value = v.replace(/(\d)(\d{2})(\d{6})(\d{1,2})/, '$1-$2-$3-$4');
                else if (v.length > 7) this.value = v.replace(/(\d)(\d{2})(\d{1,6})/, '$1-$2-$3');
                else if (v.length > 3) this.value = v.replace(/(\d)(\d{1,2})/, '$1-$2');
                else this.value = v;
                this.dispatchEvent(new Event('input'));"
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
