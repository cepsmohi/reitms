<form wire:submit="createCustomer" id="createCustomerForm">
    <div class="mt-8 fcol">
        <div class="bg-gray-100 dark:bg-gray-700 p-4 rounded-3xl">
            <x-form.inputwire
                name="name"
                placeholder="Customer Name"
                icon="name"
            />
            <x-form.inputwire
                name="code"
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
            <x-form.inputwire
                name="address"
                placeholder="Address"
                icon="location"
                hints="Holding, Road, Location"
            />
            <x-form.inputwire
                name="zone"
                placeholder="Zone/Area Code"
                icon="zone"
                hints="336"
            />
            <x-form.submit-button
                form="createCustomerForm"
                icon="plus"
                tag="Create"
            />
        </div>
    </div>
</form>
