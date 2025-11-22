<div>
    <x-ui.topbar/>
    <x-tasks.rmsinstall.details.buttons :$task :href="route('tasks.rmsmaintain')"/>
    <x-ui.title title="বিষয়- আরএমএস রক্ষণাবেক্ষণ/পরিবর্তন/পরিদর্শন প্রতিবেদন।"/>
    <div class="print:text-[10px] print:text-black">
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
        <div class="frowb gap-8 items-start">
            <x-tasks.rmsmaintain.details.removemeterinfo :$task/>
            <x-tasks.rmsmaintain.details.removeregulatorinfo :$task/>
        </div>
        <x-tasks.details.removedmaterials :$task/>
        <x-tasks.details.comments :$task :$comment/>
        <x-tasks.details.photos :$task :$photos :$totalSize/>
        <x-tasks.details.approvalstatus :$task/>
    </div>
    @include('components.tasks.forms')
    <x-ui.offline/>
</div>
