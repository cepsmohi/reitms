<div class="mt-4">
    <div class="stitle border-b">Installed Regulator</div>
    @if($task->hasRegulator())
        <x-ui.tagvalue tag="Serial Number" :value="$task->regulator->number"/>
        <x-ui.tagvalue tag="Type & Model" :value="$task->regulator->model"/>
        <x-ui.tagvalue tag="Manufacturer" :value="$task->regulator->manufacturer"/>
        <x-ui.tagvalue tag="Production Year" :value="$task->regulator->production_year"/>
        @php
            $diaTxt = '"Ø';
        @endphp
        <x-ui.tagvalue tag="Size" :value="$task->regulator->diameter" :symbol="$diaTxt"/>
        <x-tasks.rmsinstall.details.regulatorinfonfo.pressuredata :$task/>
    @else
        <x-tasks.rmsinstall.details.regulatorinfo.assignform
            :$regulatorSerialNumber
        />
    @endif
</div>
