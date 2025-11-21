<div>
    <x-ui.topbar/>
    <x-tasks.metertest.details.buttons :$task/>
    <x-ui.title title="বিষয়- মিটারের সঠিকতা পরীক্ষণ প্রতিবেদন।"/>
    <div class="print:text-[10px]">
        <x-tasks.metertest.details.refdate :$task/>
        <x-tasks.metertest.details.meterstype :$task/>
        <x-tasks.metertest.details.customerdetails :$task/>
        <x-tasks.metertest.details.meterdetails :$task/>
        <x-tasks.metertest.details.readingdetails :$task/>
        <x-tasks.metertest.details.meterphysicalcondition :$task/>
        <x-tasks.metertest.details.metersealing :$task/>
        <x-tasks.metertest.details.metertesting :$task/>
        <x-tasks.metertest.details.metertestingcomment :$task/>
        <x-tasks.metertest.details.meterremovalcause :$task/>
        <x-tasks.metertest.details.metercondition :$task/>
        <x-tasks.details.comments :$task :$comment/>
        <x-tasks.details.photos :$task :$photos :$totalSize/>
        <x-tasks.details.approvalstatus :$task/>
    </div>
    @include('components.tasks.forms')
</div>
