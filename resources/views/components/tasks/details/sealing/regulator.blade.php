<div class="frows flex-wrap print:flex-nowrap gap-1">
    <div class="font-bold">রেগুলেটর</div>
    <div class="frows flex-wrap gap-1">
        <x-tasks.details.sealing.seals
            :$task
            position="ইন ফ্ল্যাঞ্জ"
            :title="true"
            type="regulator: in flange"
        />
        <x-tasks.details.sealing.seals
            :$task
            position="আউট ফ্ল্যাঞ্জ"
            :title="true"
            type="regulator: out flange"
        />
        <x-tasks.details.sealing.seals
            :$task
            position="অরিফিস-পিস্টন কভারে"
            :title="true"
            type="regulator: orifice-piston cover"
        />
        <x-tasks.details.sealing.seals
            :$task
            position="রেস্ট্রিক্টরে"
            :title="true"
            type="regulator: restrictor"
        />
        <x-tasks.details.sealing.seals
            :$task
            position="পাইলটে"
            :title="true"
            type="regulator: pilot"
        />
        <x-tasks.details.sealing.seals
            :$task
            position="সেন্সিং পাইপে"
            :title="true"
            type="regulator: sensing"
        />
    </div>
</div>
