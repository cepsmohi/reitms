<div>
    <div class="print:hidden">
        <x-ui.topbar/>
        <x-tasks.rmsinstall.details.buttons :$task/>
        <x-ui.title title="RMS Installation Details"/>
        <x-tasks.rmsinstall.details.heading :$task/>
        <x-tasks.rmsinstall.details.customerinfo :$task/>
        <x-tasks.rmsinstall.details.drawing
            :$task
            :$addDrawingForm
            :$deleteDrawingForm
            :$drawings
            :$drawing
        />
        <x-tasks.rmsinstall.details.meterinfo
            :$task
            :$meterSerialNumber
            :$addMeterForm
        />
        <x-tasks.rmsinstall.details.regulatorinfo
            :$task
            :$regulatorSerialNumber
        />
        <x-tasks.rmsinstall.details.sealing
            :$task
            :$addSealForm
            :$removeSealForm
            :$sealType :$prefix :$sealNumber
        />
        <x-tasks.rmsinstall.details.comments
            :$task
            :$addCommentForm
            :$editCommentForm
            :$comment
        />
        <x-tasks.rmsinstall.details.photos
            :$task
            :$addPhotoForm
            :$deletePhotoForm
            :$photos
            :$totalSize
        />
        <x-tasks.rmsinstall.details.usedmaterials
            :$task
            :$addMaterialForm
            :$deleteMaterialForm
            :$materialCode
            :$quantity
        />
        <x-tasks.rmsinstall.details.approvalstatus :$task/>
        <x-tasks.addvalueform :$task :$addValueForm :$field :$value/>
        <x-tasks.editvalueform :$task :$editValueForm :$field :$value/>
    </div>
    @if($task->isApproved())
        <div class="hidden print:block">
            <x-tasks.printable :$task/>
        </div>
    @endif
</div>
