<div class="w-full py-1">
    <div class="w-full border-b font-bold">স্থাপিত মিটার</div>
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
            <x-task.create.selectmeter/>
        @else
            <div class="stitle text-red-500">Meter not assigned</div>
        @endif
    @endif
</div>
