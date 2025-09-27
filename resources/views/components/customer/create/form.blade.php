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
            />
            <x-form.inputwire
                name="address"
                placeholder="Address"
                icon="location"
                hints="Holding, Road, Location"
            />
            <x-form.submit-button
                form="createCustomerForm"
                icon="plus"
                tag="Create"
            />
        </div>
    </div>
</form>
