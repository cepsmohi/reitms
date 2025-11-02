<div class="frows flex-wrap print:flex-nowrap gap-1">
    <div class="font-bold">ইনলেট ভাল্ভ</div>
    <div class="frows flex-wrap print:flex-nowrap gap-1">
        <x-tasks.details.sealing.seals
            :$task
            position="ইন ফ্ল্যাঞ্জ"
            :title="true"
            type="inlet valve: in flange"
        />
        <x-tasks.details.sealing.seals
            :$task
            position="আউট ফ্ল্যাঞ্জ"
            :title="true"
            type="inlet valve: out flange"
        />
        <x-tasks.details.sealing.seals
            :$task
            position="চাবিতে"
            :title="true"
            type="inlet valve: on valve"
        />
    </div>
</div>
