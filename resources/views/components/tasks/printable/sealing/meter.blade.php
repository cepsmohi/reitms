<div class="frows gap-2">
    <div class="font-bold">Meter</div>
    <div class="frows flex-wrap gap-2">
        <x-tasks.printable.sealing.tags
            :$task
            position="In Flange"
            type="meter: in flange"
        />
        <x-tasks.printable.sealing.tags
            :$task
            position="Out Flange"
            type="meter: out flange"
        />
        <x-tasks.printable.sealing.tags
            :$task
            position="EVC Part"
            type="meter: evc part"
        />
        <x-tasks.printable.sealing.tags
            :$task
            position="Others"
            type="meter: others"
        />
    </div>
</div>
