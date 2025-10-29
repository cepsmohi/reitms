<div class="py-1">
    <div class="w-full border-b font-bold">মিটারের বাহ্যিক অবস্থা</div>
    <div class="frows flex-wrap print:flex-nowrap gap-2">
        <div class="frows gap-2">
            <div class="font-bold">মিটার বডির অবস্থা:</div>
            <x-tasks.values :$task field="meter body condition" tag="+ meter body condition"/>
        </div>
        <div class="frows gap-2">
            <div class="font-bold">মিটার ইন্ডেক্স এর কার্যক্ষমতা:</div>
            <x-tasks.values :$task field="meter index condition" tag="+ meter index condition"/>
        </div>
    </div>
</div>

