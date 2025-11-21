{{--    add drawing forms--}}
<x-tasks.adddrawingform :$addDrawingForm :$drawings/>
<x-tasks.deletedrawingform :$deleteDrawingForm/>

{{--    add meter and regulator info forms--}}
<x-tasks.addmeterinfo :$task :$addMeterInfoForm/>
<x-tasks.addregulatorinfo :$task :$addRegulatorInfoForm/>

{{--    add value forms--}}
<x-tasks.addvalueform :$task :$addValueForm :$field :$value/>
<x-tasks.editvalueform :$task :$editValueForm :$field :$value/>

{{--    add seal forms--}}
<x-tasks.addsealform :$sealType :$prefix :$sealNumber :$addSealForm/>
<x-tasks.deletesealform :$deleteSealForm/>

{{--    add gatepass forms--}}
<x-tasks.addgatepassform :$addGatepassForm :$gatepasses/>
<x-tasks.deletegatepassform :$deleteGatepassForm/>

{{--    add materials forms--}}
<x-tasks.addmaterialform :$addMaterialInForm :$materialCode :$quantity :$name :$unit/>
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
