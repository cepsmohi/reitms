<div class="frows flex-wrap print:flex-nowrap gap-1">
    <div class="font-bold">রিলিফ ভাল্ভ</div>
    <div class="frows flex-wrap print:flex-nowrap gap-1">
        <x-tasks.details.sealing.seals
            :$task
            position="নিপল"
            :title="true"
            type="relief valve: flange-nipple"
        />
        <x-tasks.details.sealing.seals
            :$task
            position="চাবিতে/লিভারে"
            :title="true"
            type="relief valve: on screw-nut"
        />
    </div>
</div>
