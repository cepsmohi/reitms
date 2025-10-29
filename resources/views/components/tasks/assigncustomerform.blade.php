@if($assignCustomerForm)
    <x-form.form-modal
        formCondition="assignCustomerForm"
        :submitCondition="true"
        submitFun="assignCustomer"
        formId="assignCustomerForm"
        formTitle="Select Customer"
        submitIcon="refresh"
        submitTag="Assign"
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
    </x-form.form-modal>
@endif
