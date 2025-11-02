<div class="frows flex-wrap print:flex-nowrap gap-1">
    <div class="font-bold">পার্জিং পয়েন্টে</div>
    <div class="frows flex-wrap print:flex-nowrap gap-1">
        <x-tasks.details.sealing.seals
            :$task
            position="নিপল"
            :title="true"
            type="purging point: nipple"
        />
        <x-tasks.details.sealing.seals
            :$task
            position="চাবিতে/লিভারে"
            :title="true"
            type="purging point: on valve-liver"
        />
    </div>
</div>
