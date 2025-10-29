<div class="py-1">
    <div class="w-full border-b font-bold">মিটারের সঠিকতা পরীক্ষণের বিবরণ</div>
    <table class="w-full">
        <x-tasks.metertest.details.metertesting.head :$task/>
        <x-tasks.metertest.details.metertesting.airflowamount :$task/>
        <x-tasks.metertest.details.metertesting.standardmeterflow :$task/>
        <x-tasks.metertest.details.metertesting.customermeterflow :$task/>
        <x-tasks.metertest.details.metertesting.errorrate :$task/>
        <x-tasks.metertest.details.metertesting.hourlyflow :$task/>
        <x-tasks.metertest.details.metertesting.averageerrorrate :$task/>
    </table>
    <div class="frows gap-2">
        <div class="font-bold">মিটারের প্রবাহজনিত ত্রুটির হারের গ্রহণযোগ্যতা:</div>
        <x-tasks.values :$task field="error rate comment" tag="+ error rate comment"/>
        <div>(গ্রহনযোগ্য সীমারেখাঃ ±২%)</div>
    </div>
</div>

