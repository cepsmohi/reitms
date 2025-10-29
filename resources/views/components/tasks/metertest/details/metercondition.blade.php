<div class="py-1">
    <div class="w-full border-b font-bold">মিটারের চূড়ান্ত অবস্থা</div>
    <div class="fcols gap-1">
        <x-tasks.values :$task field="final status" tag="+ final status"/>
        <div class="frows gap-2 print:hidden">
            <div class="font-bold">Status:</div>
            <div>
                {{ $task->metertest->meter->status }}
            </div>
            @if($task->isReporting())
                <x-ui.awiretag
                    wireclick="openStockForm"
                    icon="tag"
                    tag="Update Stock"
                />
            @endif
        </div>
    </div>
</div>
