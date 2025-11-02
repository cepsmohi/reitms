<div class="print:hidden">
    <x-form.form-create
        wiresubmit="assignMeter"
        formTitle="Add Meter"
        formId="addMeterForm"
        formCondition="addMeterForm"
        :submitCondi="true"
        submitIcon="refresh"
        submitTag="Assign"
    >
        <div class="stitle mb-4">Select Meter</div>
        <x-form.inputwire
            name="meterSerialNumber"
            placeholder="Meter Number"
            icon="name"
        />
        @error('meterType')
        <x-form.inputwire
            name="meterType"
            placeholder="Meter Type"
            icon="tag"
            hints="G-400"
        />
        @enderror
    </x-form.form-create>
</div>
