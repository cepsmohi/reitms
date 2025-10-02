<div class="mt-2 fcol2row gap-2">
    <div class="font-bold">Relief Valve</div>
    <x-ui.vline extraclass="hidden md:block"/>
    <div class="ml-4 md:ml-0 fcol2row gap-0 md:gap-2">
        <x-tasks.rmsinstall.details.sealing.seals
            :$task
            position="Flange/Nipple"
            type="relief valve: flange-nipple"
        />
        <x-tasks.rmsinstall.details.sealing.seals
            :$task
            position="On Screw/Nut"
            type="relief valve: on screw-nut"
        />
    </div>
</div>
