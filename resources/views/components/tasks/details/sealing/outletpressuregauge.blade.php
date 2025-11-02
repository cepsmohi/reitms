<div class="frows flex-wrap print:flex-nowrap gap-1">
    <div class="font-bold">আউটলেট প্রেসার গেজ</div>
    <div class="frows flex-wrap print:flex-nowrap gap-1">
        <x-tasks.details.sealing.seals
            :$task
            position="নিপল"
            :title="true"
            type="outlet pressure gauge: nipple"
        />
        <x-tasks.details.sealing.seals
            :$task
            position="চাবিতে"
            :title="true"
            type="outlet pressure gauge: on valve"
        />
        <x-tasks.details.sealing.seals
            :$task
            position="বডিতে"
            :title="true"
            type="outlet pressure gauge: on body"
        />
    </div>
</div>
