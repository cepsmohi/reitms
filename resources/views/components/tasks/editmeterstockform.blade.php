@if($editStockForm)
    <x-form.form-modal
        formCondition="editStockForm"
        :submitCondition="true"
        submitFun="updateStock"
        formId="editStockStockForm"
        formTitle="Edit Stock Info"
    >
        <div class="mb-4 frows">
            <x-ui.icon icon="name"/>
            <div>{{ $meter->number }}</div>
            <x-ui.icon icon="tag"/>
            <div>{{ $meter->type }}</div>
        </div>
        <div class="mb-4 frows">
            <x-ui.icon icon="status"/>
            <div>{{ $meter->status }}</div>
        </div>

        @if($material == null)
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
            @error('materialName')
            <x-form.inputwire
                name="materialName"
                placeholder="Material Name"
                icon="name"
                hints="Collect name from MECD"
            />
            <x-form.inputwire
                name="unit"
                placeholder="Unit"
                icon="unit"
                hints="nos/pcs/m/ft"
            />
            @enderror
        @else
            <div class="mb-4 frows">
                <x-ui.icon icon="status"/>
                <div>{{ $meter->material->code }}</div>
            </div>
        @endif
        <x-form.dropdown.stock.conditions :$status/>
    </x-form.form-modal>
@endif
