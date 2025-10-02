<div class="mt-2 fcol2row gap-2">
    <div class="font-bold">Regulator</div>
    <x-ui.vline extraclass="hidden md:block"/>
    <div class="ml-4 md:ml-0 fcol2row gap-0 md:gap-2">
        <x-tasks.rmsinstall.details.sealing.seals
            :$task
            position="In Flange"
            type="regulator: in flange"
        />
        <x-tasks.rmsinstall.details.sealing.seals
            :$task
            position="Out Flange"
            type="regulator: out flange"
        />
        <x-tasks.rmsinstall.details.sealing.seals
            :$task
            position="Orifice/Piston Cover"
            type="regulator: orifice-piston cover"
        />
        <x-tasks.rmsinstall.details.sealing.seals
            :$task
            position="Restrictor"
            type="regulator: restrictor"
        />
        <x-tasks.rmsinstall.details.sealing.seals
            :$task
            position="Pilot"
            type="regulator: pilot"
        />
        <x-tasks.rmsinstall.details.sealing.seals
            :$task
            position="Sensing"
            type="regulator: sensing"
        />
    </div>
</div>
