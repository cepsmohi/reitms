<div>
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
            name="number"
            placeholder="Meter Number"
            icon="name"
        />
        @error('type')
        <x-form.inputwire
            name="type"
            placeholder="Meter Type"
            icon="tag"
            hints="G-400"
        />
        @enderror
    </x-form.form-create>
</div>
