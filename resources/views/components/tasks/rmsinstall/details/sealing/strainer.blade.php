<div class="mt-2 fcol2row gap-2">
    <div class="font-bold">Strainer</div>
    <x-ui.vline extraclass="hidden md:block"/>
    <div class="ml-4 md:ml-0 fcol2row gap-0 md:gap-2">
        <x-tasks.rmsinstall.details.sealing.seals
            :$task
            position="In Flange"
            type="strainer: in flange"
        />
        <x-tasks.rmsinstall.details.sealing.seals
            :$task
            position="Out Flange"
            type="strainer: out flange"
        />
        <x-tasks.rmsinstall.details.sealing.seals
            :$task
            position="Cover"
            type="strainer: cover"
        />
        <x-tasks.rmsinstall.details.sealing.seals
            :$task
            position="Screw/Nut"
            type="strainer: screw-nut"
        />
        <x-tasks.rmsinstall.details.sealing.seals
            :$task
            position="Drain Point"
            type="strainer: drain point"
        />
    </div>
</div>
