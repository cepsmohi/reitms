<form wire:submit="createMaterial" id="createMaterialForm">
    <div class="mt-8 fcol">
        <div class="bg-gray-100 dark:bg-gray-700 p-4 rounded-3xl">
            <x-form.inputwire
                name="code"
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
                name="name"
                placeholder="Material Name"
                icon="name"
                hints='2" MS Pipe'
            />
            <x-form.inputwire
                name="unit"
                placeholder="Unit"
                icon="unit"
                hints="nos/pcs/m/ft"
            />
            <x-form.submit-button
                form="createMaterialForm"
                icon="plus"
                tag="Create"
            />
        </div>
    </div>
</form>
