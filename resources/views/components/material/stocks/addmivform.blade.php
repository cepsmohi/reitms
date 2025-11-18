@if($addMivForm)
    <x-form.form-modal
        formTitle="Add Item"
        formId="addMivForm"
        formCondition="addMivForm"
        :submitCondition="true"
        submitFun="addMiv"
        submitIcon="plus"
        submitTag="Add"
    >
        <div class="mb-7 stitle text-grad"></div>
        <x-form.inputwire
            name="mivno"
            placeholder="MIV No"
            icon="name"
        />
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
            name="quantity"
            placeholder="Quantity"
            icon="count"
            hints="number only"
        />
    </x-form.form-modal>
@endif
