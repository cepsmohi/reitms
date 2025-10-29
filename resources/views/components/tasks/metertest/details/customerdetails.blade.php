<div class="py-1">
    @if($task->customer)
        <div class="w-full border-b font-bold">গ্রাহক সম্পর্কিত বিবরণ</div>
        <div class="frows flex-wrap print:flex-nowrap gap-2">
            <div class="frows gap-2">
                <div class="font-bold">গ্রাহকের নাম:</div>
                <div>
                    {{ $task->customer->name }}
                </div>
            </div>
            <div class="frows gap-2">
                <div class="font-bold">গ্রাহক সংকেত নং:</div>
                <div>
                    {{ $task->customer->code }}
                </div>
            </div>
            <div class="frows gap-2">
                <div class="font-bold">গ্রাহক শ্রেণি:</div>
                <x-tasks.values :$task field="customer type" tag="+ customer type"/>
            </div>
        </div>

        <div class="frows gap-2">
            <div class="font-bold">গ্রাহকের ঠিকানা:</div>
            <div>
                {{ $task->customer->detail->address }}
            </div>
        </div>
    @else
        @if($task->isReporting())
            <div class="my-1">
                <x-ui.awiretag
                    wireclick="$toggle('assignCustomerForm')"
                    icon="user"
                    tag="Assign Customer"
                />
            </div>
        @endif
    @endif
</div>
