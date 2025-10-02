<div class="mt-2 fcol2row gap-2">
    <div class="font-bold">Outlet Valve</div>
    <x-ui.vline extraclass="hidden md:block"/>
    <div class="ml-4 md:ml-0 fcol2row gap-0 md:gap-2">
        <x-tasks.rmsinstall.details.sealing.seals
            :$task
            position="In Flange"
            type="outlet valve: in flange"
        />
        <x-tasks.rmsinstall.details.sealing.seals
            :$task
            position="Out Flange"
            type="outlet valve: out flange"
        />
        <x-tasks.rmsinstall.details.sealing.seals
            :$task
            position="On Valve"
            type="outlet valve: on valve"
        />
    </div>
</div>
