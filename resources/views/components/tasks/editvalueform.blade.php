@if($editValueForm)
    <x-form.form-modal
        formCondition="editValueForm"
        :submitCondition="true"
        submitFun="updateValue"
        formId="editValueForm"
        submitIcon="refresh"
        submitTag="Update Value"
    >
        <x-form.inputwire
            name="value"
            :placeholder="ucwords(strtolower($field))"
            icon="start"
        />
    </x-form.form-modal>
@endif
