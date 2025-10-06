@teleport('body')
<div class="modalback bg-gray-900/90">
    <div
        class="modal bg-gray-100 p-4 rounded-3xl"
    >
        <x-ui.closeform wireclick="$toggle('editCustomerCodeForm')"/>
        <form
            wire:submit="updateCostomerCode"
            id="editCustomerCodeForm"
        >
            <div class="fcol">
                <div class="mb-7 stitle text-grad">Customer Code</div>
                <x-form.inputwire
                    name="customerCode"
                    placeholder="#-##-######-##-##-#"
                    icon="tag"
                />
                <x-form.submit-button
                    form="editCustomerCodeForm"
                    icon="refresh"
                    tag="Update"
                />
            </div>
        </form>
    </div>
</div>
@teleport('body')
