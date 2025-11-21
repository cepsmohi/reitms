@if($addMaterialInForm)
    <x-form.form-modal
        formCondition="addMaterialInForm"
        :submitCondition="true"
        submitFun="addMaterial"
        formId="addMaterialForm"
        formTitle="Add Materials"
        submitIcon="plus"
        submitTag="Material"
    >
        <x-form.inputwirelazy
            name="materialCode"
            placeholder="Material Code"
            icon="tag"
            hints="xx.xx.xxx"
            pattern="formatByPattern(this, [2,2,3], '.')"
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
        <x-form.inputwire
            name="quantity"
            placeholder="Quantity"
            icon="count"
            hints="number only"
        />
    </x-form.form-modal>
@endif
