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
                @php
                    $customer_type = customerType($task->customer->code[0]);
                @endphp
                @if($customer_type)
                    <div>{{ $customer_type }}</div>
                @else
                    <x-tasks.values :$task field="customer type" tag="+ customer type"/>
                @endif
            </div>
        </div>

        <div class="frows gap-2">
            <div class="font-bold">গ্রাহকের ঠিকানা:</div>
            <div>
                {{ $task->customer->detail->address }}
            </div>
        </div>
    @endif
</div>
