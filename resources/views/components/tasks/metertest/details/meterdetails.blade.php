<div class="py-1">
    @if($task->metertest)
        <div class="w-full border-b font-bold">মিটার সম্পর্কিত বিবরণ</div>
        <div class="frows flex-wrap print:flex-nowrap gap-2">
            <div class="frows gap-2">
                <div class="font-bold">মিটার ক্রমিক নং:</div>
                <div>
                    {{ $task->metertest->meter->number }}
                </div>
            </div>
            <div class="frows gap-2">
                <div class="font-bold">মিটার শ্রেণি:</div>
                <div>
                    {{ $task->metertest->meter->type }}
                </div>
            </div>
            <div class="frows gap-2">
                <div class="font-bold">ইভিসি নং:</div>
                <x-tasks.values :$task field="evc number" tag="+ evc number"/>
            </div>
            <div class="frows gap-2">
                <div class="font-bold">প্রস্তুতকারক:</div>
                <div>
                    {{ $task->metertest->meter->manufacturer ?? '---' }}
                </div>
                @if(!$task->metertest->meter->diameter)
                    <div class="mt-2">
                        <x-ui.awiretag
                            wireclick="$toggle('addMeterInfoForm')"
                            icon="meter"
                            tag="Meter Details"
                        />
                    </div>
                @endif
            </div>
        </div>
    @endif
</div>
