<div class="mt-2 fcol2row gap-2">
    <div class="font-bold">Outlet Pressure Gauge</div>
    <x-ui.vline extraclass="hidden md:block"/>
    <div class="ml-4 md:ml-0 fcol2row gap-0 md:gap-2">
        <x-tasks.rmsinstall.details.sealing.seals
            :$task
            position="Nipple"
            type="outlet pressure gauge: nipple"
        />
        <x-tasks.rmsinstall.details.sealing.seals
            :$task
            position="On Valve"
            type="outlet pressure gauge: on valve"
        />
        <x-tasks.rmsinstall.details.sealing.seals
            :$task
            position="On Body"
            type="outlet pressure gauge: on body"
        />
    </div>
</div>
