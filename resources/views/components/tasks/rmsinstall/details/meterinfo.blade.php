<div class="mt-4">
    <div class="stitle border-b">Installed Meter</div>
    @if($task->hasMeter())
        <x-ui.tagvalue tag="Serial Number" :value="$task->meter->number"/>
        <x-ui.tagvalue tag="Type" :value="$task->meter->type"/>
        <x-ui.tagvalue tag="Manufacturer" :value="$task->meter->manufacturer"/>
        <x-ui.tagvalue tag="Production Year" :value="$task->meter->production_year"/>
        @php
            $diaTxt = '"Ø';
        @endphp
        <x-ui.tagvalue tag="Size" :value="$task->meter->diameter" :symbol="$diaTxt"/>
        <x-tasks.rmsinstall.details.meterinfo.readings :$task/>
    @else
        @if($task->isReporting())
            <x-tasks.rmsinstall.details.meterinfo.assignform
                :$meterSerialNumber
            />
        @else
            <div class="stitle text-red-500">Meter not assigned</div>
        @endif
    @endif
</div>
@if($addMeterForm)
    @teleport('body')
    <x-form.form-modal
        formTitle="Add Meter"
        formId="addMeterForm"
        formCondition="addMeterForm"
        :submitCondition="true"
        submitFun="createMeter"
        submitIcon="plus"
        submitTag="Register"
    >
        <x-form.inputwire
            name="number"
            placeholder="Meter Number"
            icon="name"
        />
        <x-form.inputwire
            name="type"
            placeholder="Meter Type"
            icon="tag"
            hints="G-400"
        />
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
    @teleport('body')
@endif
