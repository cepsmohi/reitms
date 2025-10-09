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
                    pattern="let v = this.value.replace(/\D/g, '').slice(0,14);
                    if (v.length > 13) this.value = v.replace(/(\d)(\d{2})(\d{6})(\d{2})(\d{2})(\d{1})/, '$1-$2-$3-$4-$5-$6');
                    else if (v.length > 11) this.value = v.replace(/(\d)(\d{2})(\d{6})(\d{2})(\d{1,2})/, '$1-$2-$3-$4-$5');
                    else if (v.length > 9) this.value = v.replace(/(\d)(\d{2})(\d{6})(\d{1,2})/, '$1-$2-$3-$4');
                    else if (v.length > 7) this.value = v.replace(/(\d)(\d{2})(\d{1,6})/, '$1-$2-$3');
                    else if (v.length > 3) this.value = v.replace(/(\d)(\d{1,2})/, '$1-$2');
                    else this.value = v;
                    this.dispatchEvent(new Event('input'));"
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
