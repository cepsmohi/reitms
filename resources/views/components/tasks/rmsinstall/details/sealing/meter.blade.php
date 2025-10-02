<div class="mt-2 fcol2row gap-2">
    <div class="font-bold">Meter</div>
    <x-ui.vline extraclass="hidden md:block"/>
    <div class="ml-4 md:ml-0 fcol2row gap-0 md:gap-2">
        <x-tasks.rmsinstall.details.sealing.seals
            :$task
            position="In Flange"
            type="meter: in flange"
        />
        <x-tasks.rmsinstall.details.sealing.seals
            :$task
            position="Out Flange"
            type="meter: out flange"
        />
        <x-tasks.rmsinstall.details.sealing.seals
            :$task
            position="EVC Part"
            type="meter: evc part"
        />
        <x-tasks.rmsinstall.details.sealing.seals
            :$task
            position="Others"
            type="meter: others"
        />
    </div>
</div>
