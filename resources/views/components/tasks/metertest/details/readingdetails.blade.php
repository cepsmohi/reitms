<div class="py-1">
    <div class="w-full border-b font-bold">মিটার/ইভিসি পাঠের তথ্য</div>
    <div class="w-full text-right">সকল রিডিং একক: m<sup>3</sup></div>
    <table class="w-full">
        <x-tasks.metertest.details.readingdetails.head :$task/>
        <x-tasks.metertest.details.readingdetails.mechindex :$task/>
        <x-tasks.metertest.details.readingdetails.vmreading :$task/>
        <x-tasks.metertest.details.readingdetails.vmtreading :$task/>
        <x-tasks.metertest.details.readingdetails.vmdreading :$task/>
        <x-tasks.metertest.details.readingdetails.vbreading :$task/>
        <x-tasks.metertest.details.readingdetails.vbtreading :$task/>
        <x-tasks.metertest.details.readingdetails.vbdreading :$task/>
    </table>
    <div class="frows flex-wrap print:flex-nowrap gap-2">
        <div class="frows gap-2">
            <div class="font-bold">ব্যাটারির সম্ভাব্য সময়কাল:</div>
            <x-tasks.values :$task field="battery duration" tag="+ battery duration"/>
        </div>
        <div class="frows gap-2">
            <div class="font-bold">মন্তব্য:</div>
            <x-tasks.values :$task field="reading comment" tag="+ reading comment"/>
        </div>
    </div>
</div>

