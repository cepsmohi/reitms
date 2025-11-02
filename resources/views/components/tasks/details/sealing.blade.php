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
        <x-tasks.details.sealing.inletvalve :$task/>
        <x-tasks.details.sealing.inletpressuregauge :$task/>
        <x-tasks.details.sealing.strainer :$task/>
        <x-tasks.details.sealing.regulator :$task/>
        <x-tasks.details.sealing.meter :$task/>
        <x-tasks.details.sealing.outletpressuregauge :$task/>
        <x-tasks.details.sealing.purgingpoint :$task/>
        <x-tasks.details.sealing.reliefvalve :$task/>
        <x-tasks.details.sealing.outletvalve :$task/>
        <x-tasks.details.sealing.others :$task/>
    </div>
</div>
