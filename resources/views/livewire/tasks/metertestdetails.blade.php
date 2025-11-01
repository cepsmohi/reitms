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
        <x-tasks.metertest.details.comments :$task :$comment/>
        <x-tasks.details.photos :$task :$photos :$totalSize/>
        <x-tasks.metertest.details.approvalstatus :$task/>
    </div>

    {{--    assign customer forms--}}
    <x-tasks.assigncustomerform :$customercode :$customers :$assignCustomerForm/>

    {{--    add value forms--}}
    <x-tasks.addvalueform :$task :$addValueForm :$field :$value/>
    <x-tasks.editvalueform :$task :$editValueForm :$field :$value/>

    {{--    add seal forms--}}
    <x-tasks.addsealform :$sealType :$prefix :$sealNumber :$addSealForm/>
    <x-tasks.removesealform :$removeSealForm/>

    {{--    comments forms--}}
    <x-tasks.addcommentform :$comment :$addCommentForm/>
    <x-tasks.editcommentform :$comment :$editCommentForm/>

    {{--    meter forms--}}
    <x-tasks.editmeterform :$meter :$editMeterForm/>
    <x-tasks.editmeterstockform :$meter :$material :$status :$editStockForm/>

    <x-tasks.deletetaskform :$deleteTaskForm/>

    {{--   photos forms--}}
    <x-tasks.addphotoform :$addPhotoForm :$photos :$totalSize/>
    <x-tasks.deletephotoform :$deletePhotoForm/>
</div>
