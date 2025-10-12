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
        {{--        <x-tasks.rmsinstall.details.meterinfo.readings/>--}}
    @else
        <x-tasks.rmsinstall.details.meterinfo.assignform
            :$meterSerialNumber
        />
    @endif
</div>
