<div class="frows flex-wrap print:flex-nowrap gap-1">
    <div class="font-bold">মিটার</div>
    <div class="frows flex-wrap print:flex-nowrap gap-1">
        <x-tasks.details.sealing.seals
            :$task
            position="ইন ফ্ল্যাঞ্জ"
            :title="true"
            type="meter: in flange"
        />
        <x-tasks.details.sealing.seals
            :$task
            position="আউট ফ্ল্যাঞ্জ"
            :title="true"
            type="meter: out flange"
        />
        <x-tasks.details.sealing.seals
            :$task
            position="ইভিসি অংশে"
            :title="true"
            type="meter: evc part"
        />
        <x-tasks.details.sealing.seals
            :$task
            position="অন্যান্য"
            :title="true"
            type="meter: others"
        />
    </div>
</div>
