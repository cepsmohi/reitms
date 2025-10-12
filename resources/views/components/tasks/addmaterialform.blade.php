<div class="modalback bg-gray-900/90">
    <div class="modal bg-gray-100 p-4 rounded-3xl">
        <x-ui.closeform wireclick="closeMaterialForm"/>
        <form
            wire:submit="addMaterial"
            id="addMaterialForm"
        >
            <div class="mb-2 stitle text-grad">Add Material</div>
            <x-form.inputwire
                name="materialCode"
                placeholder="Material Code"
                icon="tag"
                hints="xx.xx.xxx"
                pattern="let v = this.value.replace(/\D/g, '').slice(0,7);
                if (v.length > 4) this.value = v.replace(/(\d{2})(\d{2})(\d{1,3})/, '$1.$2.$3');
                else if (v.length > 2) this.value = v.replace(/(\d{2})(\d{1,2})/, '$1.$2');
                else this.value = v;
                this.dispatchEvent(new Event('input'));"
            />
            <x-form.inputwire
                name="quantity"
                placeholder="Quantity"
                icon="count"
                hints="number only"
            />
            <x-form.submit-button
                form="addMaterialForm"
                icon="plus"
                tag="Add Material"
            />
        </form>
    </div>
</div>
