<div>
    <x-ui.topbar/>
    <x-tasks.rmsinstall.details.buttons :$task/>
    <x-ui.title title="বিষয়- নতুন আরএমএস স্থাপন প্রতিবেদন।"/>
    <div class="print:text-[10px]">
        <x-tasks.details.refdate :$task/>
        <x-tasks.details.customerdetails :$task/>
    </div>

    {{--    add value forms--}}
    <x-tasks.addvalueform :$task :$addValueForm :$field :$value/>
    <x-tasks.editvalueform :$task :$editValueForm :$field :$value/>
</div>
