<div>
    <x-ui.topbar/>
    <x-tasks.rmsinstall.details.buttons :$task/>
    <x-ui.title title="RMS Installation Details"/>
    <x-tasks.rmsinstall.details.heading :$task/>
    <x-tasks.rmsinstall.details.customerinfo :$task/>
    <x-tasks.rmsinstall.details.drawing :$task/>
    <x-tasks.rmsinstall.details.meterinfo :$task/>
    <x-tasks.rmsinstall.details.regulatorinfo :$task/>
    <x-tasks.rmsinstall.details.sealing :$task/>
    <x-tasks.rmsinstall.details.comments :$task/>
    <x-tasks.rmsinstall.details.photos :$task/>
    <x-tasks.rmsinstall.details.approvalstatus :$task/>
    @if($addSealForm)
        <x-tasks.addsealform :$type :$prefix :$sealNumber/>
    @endif
    @if($removeSealForm)
        <x-tasks.removesealform/>
    @endif
    @if($addCommentForm)
        <x-tasks.addcommentform :$comment/>
    @endif
    @if($editCommentForm)
        <x-tasks.editcommentform :$comment/>
    @endif
    @if($addPhotoForm)
        <x-tasks.addphotoform :$photos/>
    @endif
    @if($deletePhotoForm)
        <x-tasks.deletephotoform/>
    @endif
</div>
