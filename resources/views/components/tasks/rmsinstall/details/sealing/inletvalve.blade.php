<div class="mt-2 fcol2row gap-2">
    <div class="font-bold">Inlet Valve</div>
    <x-ui.vline extraclass="hidden md:block"/>
    <div class="ml-4 md:ml-0 fcol2row gap-0 md:gap-2">
        <x-tasks.rmsinstall.details.sealing.seals
            :$task
            position="In Flange"
            type="inlet valve: in flange"
        />
        <x-tasks.rmsinstall.details.sealing.seals
            :$task
            position="Out Flange"
            type="inlet valve: out flange"
        />
        <x-tasks.rmsinstall.details.sealing.seals
            :$task
            position="On Valve"
            type="inlet valve: on valve"
        />
    </div>
</div>
