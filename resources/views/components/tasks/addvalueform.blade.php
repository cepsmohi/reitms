@if($addValueForm)
    <x-form.form-modal
        formCondition="addValueForm"
        :submitCondition="true"
        submitFun="addValue"
        formId="addValueForm"
        submitIcon="plus"
        submitTag="Add Value"
    >
        <x-form.inputwire
            name="value"
            :placeholder="ucwords(strtolower($field))"
            icon="start"
        />
    </x-form.form-modal>
@endif
