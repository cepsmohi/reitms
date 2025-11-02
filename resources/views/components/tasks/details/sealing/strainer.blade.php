<div class="frows flex-wrap print:flex-nowrap gap-1">
    <div class="font-bold">স্ট্রেইনার</div>
    <div class="frows flex-wrap print:flex-nowrap gap-1">
        <x-tasks.details.sealing.seals
            :$task
            position="ইন ফ্ল্যাঞ্জ"
            :title="true"
            type="strainer: in flange"
        />
        <x-tasks.details.sealing.seals
            :$task
            position="আউট ফ্ল্যাঞ্জ"
            :title="true"
            type="strainer: out flange"
        />
        <x-tasks.details.sealing.seals
            :$task
            position="কভারে"
            :title="true"
            type="strainer: cover"
        />
        <x-tasks.details.sealing.seals
            :$task
            position="স্ক্রু-নাটে"
            :title="true"
            type="strainer: screw-nut"
        />
        <x-tasks.details.sealing.seals
            :$task
            position="ড্রেইন পয়েন্টে"
            :title="true"
            type="strainer: drain point"
        />
    </div>
</div>
