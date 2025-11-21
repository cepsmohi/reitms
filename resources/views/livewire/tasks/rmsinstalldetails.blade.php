<div>
    <x-ui.topbar/>
    <x-tasks.rmsinstall.details.buttons :$task :href="route('tasks.rmsinstall')"/>
    <x-ui.title title="বিষয়- নতুন আরএমএস স্থাপন প্রতিবেদন।"/>
    <div class="print:text-[10px]">
        <x-tasks.details.refdate :$task/>
        <x-tasks.details.customerdetails :$task/>
        <x-tasks.details.drawing :$task :$drawings :$drawing/>
        <div class="frowb gap-2 items-start">
            <x-tasks.rmsinstall.details.meterinfo :$task :$meterSerialNumber/>
            <x-ui.vline height="h-24"/>
            <x-tasks.rmsinstall.details.regulatorinfo :$task :$regulatorSerialNumber/>
        </div>
        <x-tasks.details.sealing :$task/>
        <x-tasks.details.gatepass :$task :$gatepasses :$gatepass/>
        <x-tasks.details.usedmaterials :$task/>
        <x-tasks.details.comments :$task :$comment/>
        <x-tasks.details.photos :$task :$photos :$totalSize/>
        <x-tasks.details.approvalstatus :$task/>
    </div>
    @include('components.tasks.forms')
</div>
