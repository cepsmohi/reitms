<div>
    <x-ui.topbar/>
    <x-tasks.rmsinstall.details.buttons :$task :href="route('tasks.rmsmaintain')"/>
    <x-ui.title title="বিষয়- আরএমএস রক্ষণাবেক্ষণ/পরিবর্তন/পরিদর্শন প্রতিবেদন।"/>
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

    {{--    add drawing forms--}}
    <x-tasks.adddrawingform :$addDrawingForm :$drawings/>
    <x-tasks.deletedrawingform :$deleteDrawingForm/>

    {{--    add value forms--}}
    <x-tasks.addvalueform :$task :$addValueForm :$field :$value/>
    <x-tasks.editvalueform :$task :$editValueForm :$field :$value/>

    {{--    add seal forms--}}
    <x-tasks.addsealform :$sealType :$prefix :$sealNumber :$addSealForm/>
    <x-tasks.removesealform :$removeSealForm/>

    {{--    add materials forms--}}
    <x-tasks.addmaterialform :$addMaterialInForm :$materialCode :$quantity/>
    <x-tasks.removematerialform :$addMaterialOutForm :$materialCode :$quantity/>
    <x-tasks.deletematerialform :$deleteMaterialForm/>

    {{--    comments forms--}}
    <x-tasks.addcommentform :$comment :$addCommentForm/>
    <x-tasks.editcommentform :$comment :$editCommentForm/>

    {{--   photos forms--}}
    <x-tasks.addphotoform :$addPhotoForm :$photos :$totalSize/>
    <x-tasks.deletephotoform :$deletePhotoForm/>

    {{--   task delete form--}}
    <x-tasks.deletetaskform :$deleteTaskForm/>
</div>
