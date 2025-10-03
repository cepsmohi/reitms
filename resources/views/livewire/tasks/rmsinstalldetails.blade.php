<div>
    <x-ui.topbar/>
    <x-ui.title title="RMS Installation Details"/>
    <div>Task Date: {{ $task->created_at->format('d-m-Y') }}</div>
    <div>Reporting By: {{ $task->user->name }}, {{ $task->user->designation }}</div>
    <x-tasks.rmsinstall.details.customerinfo
        :customer="$task->customer"
    />
    <x-tasks.rmsinstall.details.meterinfo/>
    <x-tasks.rmsinstall.details.regulatorinfo/>
    <x-tasks.rmsinstall.details.sealing :$task/>
    <x-tasks.rmsinstall.details.comments :$task/>
    <x-tasks.rmsinstall.details.photos :$task/>
    <x-tasks.rmsinstall.details.approvalstatus
        :$task
    />
    @if($addSealForm)
        <x-tasks.addsealform
            :$type
            :$prefix
            :$sealNumber
        />
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
