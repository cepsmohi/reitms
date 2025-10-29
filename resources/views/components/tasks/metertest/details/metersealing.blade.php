<div class="py-1">
    <div class="w-full border-b font-bold">মিটারে সীলের বিবরণ</div>
    @php
        use App\Models\SealRegister;
        $count = SealRegister::where('task_id', $task->id)
          ->count();
    @endphp
    <div class="w-full text-right">মোট সীলের পরিমাণ {{ $count }} টি</div>
    @if($task->isReporting())
        <div class="frows gap-1 text-xs text-red-500 print:hidden">
            <strong>Instruction:</strong>
            <p>to add seal click on position</p>
        </div>
    @endif
    <div class="frows flex-wrap gap-1">
        <x-tasks.metertest.details.sealing.evcindex :$task/>
        <x-tasks.metertest.details.sealing.mechindex :$task/>
        <x-tasks.metertest.details.sealing.evcopticalport :$task/>
        <x-tasks.metertest.details.sealing.meterbody :$task/>
        <x-tasks.metertest.details.sealing.others :$task/>
    </div>
    <div class="fcols">
        <div class="font-bold whitespace-nowrap">সীল সংক্রান্ত মন্তব্য (যদি থাকে):</div>
        <x-tasks.values :$task field="sealing comment" tag="+ sealing comment"/>
    </div>
</div>


