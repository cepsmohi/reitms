@if($addRegulatorInfoForm)
    <x-form.form-modal
        formCondition="addRegulatorInfoForm"
        :submitCondition="true"
        submitFun="updateRegulatorInfo"
        formId="addRegulatorInfoForm"
        formTitle="Add Regulator Info"
        submitIcon="plus"
        submitTag="Add Info"
    >
        <div x-init="$wire.set('regulatorSerialNumber', {{ $task->regulator->number }});"></div>
        <x-form.inputwire
            name="regulatorSerialNumber"
            placeholder="Serial Number"
            icon="regulator"
            disabled="disabled"
        />
        <x-form.inputwire
            name="model"
            placeholder="Model"
            icon="model"
            hints="if any"
            :required="false"
        />
        <x-form.inputwire
            name="diameter"
            placeholder="Size/Diameter"
            icon="dia"
            hints='number only'
            :required="false"
        />
        <x-form.inputwire
            name="manufacturer"
            placeholder="Manufacturer"
            icon="draw"
            hints="Elster"
            :required="false"
        />
        <x-form.inputwire
            name="year"
            placeholder="Production Year"
            icon="year"
            hints="2008"
            :required="false"
        />
        <x-form.inputwire
            name="comments"
            placeholder="Comments (if any)"
            icon="comment"
            :required="false"
        />
    </x-form.form-modal>
@endif
