<div class="frows gap-2">
    <div class="font-bold">Regulator</div>
    <div class="frows flex-wrap gap-2">
        <x-tasks.printable.sealing.tags
            :$task
            position="In Flange"
            type="regulator: in flange"
        />
        <x-tasks.printable.sealing.tags
            :$task
            position="Out Flange"
            type="regulator: out flange"
        />
        <x-tasks.printable.sealing.tags
            :$task
            position="Orifice/Piston Cover"
            type="regulator: orifice-piston cover"
        />
        <x-tasks.printable.sealing.tags
            :$task
            position="Restrictor"
            type="regulator: restrictor"
        />
        <x-tasks.printable.sealing.tags
            :$task
            position="Pilot"
            type="regulator: pilot"
        />
        <x-tasks.printable.sealing.tags
            :$task
            position="Sensing"
            type="regulator: sensing"
        />
    </div>
</div>
