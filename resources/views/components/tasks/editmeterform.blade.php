@if($editMeterForm)
    <x-form.form-modal
        formCondition="editMeterForm"
        :submitCondition="true"
        submitFun="updateMeter"
        formId="editMeterForm"
        formTitle="Edit Meter Info"
    >
        <div class="mb-4 frows">
            <x-ui.icon icon="name"/>
            <div>{{ $meter->number }}</div>
            <x-ui.icon icon="tag"/>
            <div>{{ $meter->type }}</div>
        </div>
        <x-form.inputwire
            name="model"
            placeholder="Model"
            icon="model"
            hints="if any"
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
            name="diameter"
            placeholder="Size/Diameter"
            icon="dia"
            hints='number only'
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
