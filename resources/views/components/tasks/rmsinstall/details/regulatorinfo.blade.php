<div class="w-full py-1">
    <div class="w-full border-b font-bold">স্থাপিত রেগুলেটর</div>
    @if($task->hasRegulator())
        <x-ui.tagvalue tag="Serial Number" :value="$task->regulator->number"/>
        <x-ui.tagvalue tag="Type & Model" :value="$task->regulator->model"/>
        <x-ui.tagvalue tag="Manufacturer" :value="$task->regulator->manufacturer"/>
        <x-ui.tagvalue tag="Production Year" :value="$task->regulator->year"/>
        @php
            $diaTxt = '"Ø';
        @endphp
        <x-ui.tagvalue tag="Size" :value="$task->regulator->diameter" :symbol="$diaTxt"/>
        @if(!$task->regulator->model)
            <div class="mt-2">
                <x-ui.awiretag
                    wireclick="$toggle('addRegulatorInfoForm')"
                    icon="regulator"
                    tag="Regulator Details"
                />
            </div>
        @endif
        <x-tasks.rmsinstall.details.regulatorinfo.pressuredata :$task/>
    @else
        @if($task->isReporting())
            <x-task.create.selectregulator/>
        @else
            <div class="stitle text-red-500">Regulator not assigned</div>
        @endif
    @endif
</div>
