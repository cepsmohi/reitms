<div class="mt-2 fcol2row gap-2">
    <div class="font-bold">Purging Point</div>
    <x-ui.vline extraclass="hidden md:block"/>
    <div class="ml-4 md:ml-0 fcol2row gap-0 md:gap-2">
        <x-tasks.rmsinstall.details.sealing.seals
            :$task
            position="Nipple"
            type="purging point: nipple"
        />
        <x-tasks.rmsinstall.details.sealing.seals
            :$task
            position="On Valve/Liver"
            type="purging point: on valve-liver"
        />
    </div>
</div>
