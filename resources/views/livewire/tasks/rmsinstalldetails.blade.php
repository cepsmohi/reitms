<div>
    <x-ui.topbar/>
    <x-tasks.rmsinstall.details.buttons :$task/>
    <x-ui.title title="বিষয়- নতুন আরএমএস স্থাপন প্রতিবেদন।"/>
    <div class="print:text-[10px]">
        <x-tasks.details.refdate :$task/>
        <x-tasks.details.customerdetails :$task/>
        <x-tasks.details.drawing :$task :$drawings :$drawing/>
        <x-tasks.rmsinstall.details.sealing :$task :$addSealForm :$removeSealForm :$sealType :$prefix :$sealNumber/>
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

    {{--    comments forms--}}
    <x-tasks.addcommentform :$comment :$addCommentForm/>
    <x-tasks.editcommentform :$comment :$editCommentForm/>

    {{--   photos forms--}}
    <x-tasks.addphotoform :$addPhotoForm :$photos :$totalSize/>
    <x-tasks.deletephotoform :$deletePhotoForm/>

    {{--   task delete form--}}
    <x-tasks.deletetaskform :$deleteTaskForm/>
</div>
