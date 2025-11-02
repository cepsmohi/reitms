<div class="print:hidden">
    <x-form.form-create
        wiresubmit="assignRegulator"
        formTitle="Add Regulator"
        formId="addRegulatorForm"
        formCondition="addRegulatorForm"
        :submitCondi="true"
        submitIcon="refresh"
        submitTag="Assign"
    >
        <div class="stitle mb-4">Select Regulator</div>
        <x-form.inputwire
            name="regulatorSerialNumber"
            placeholder="Regulator Number"
            icon="name"
        />
    </x-form.form-create>
</div>
