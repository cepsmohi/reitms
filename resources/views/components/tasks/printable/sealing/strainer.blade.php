<div class="frows gap-2">
    <div class="font-bold">Strainer</div>
    <div class="frows flex-wrap gap-2">
        <x-tasks.printable.sealing.tags
            :$task
            position="In Flange"
            type="strainer: in flange"
        />
        <x-tasks.printable.sealing.tags
            :$task
            position="Out Flange"
            type="strainer: out flange"
        />
        <x-tasks.printable.sealing.tags
            :$task
            position="Cover"
            type="strainer: cover"
        />
        <x-tasks.printable.sealing.tags
            :$task
            position="Screw/Nut"
            type="strainer: screw-nut"
        />
        <x-tasks.printable.sealing.tags
            :$task
            position="Drain Point"
            type="strainer: drain point"
        />
    </div>
</div>
