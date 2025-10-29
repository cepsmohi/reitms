<div class="py-1">
    <div class="w-full border-b font-bold">মিটারের ধরন</div>
    <div class="frows flex-wrap print:flex-nowrap gap-2">
        <div class="frows gap-2">
            <div class="font-bold">আদর্শ মিটারের ধরণ:</div>
            <x-tasks.values :$task field="standard meter type" tag="+ standard meter type"/>
        </div>
        <div class="frows gap-2">
            <div class="font-bold">গ্রাহক মিটারের ধরণ:</div>
            <x-tasks.values :$task field="customer meter type" tag="+ customer meter type"/>
        </div>
    </div>
</div>
