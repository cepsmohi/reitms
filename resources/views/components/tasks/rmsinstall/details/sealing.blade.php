<div class="mt-4">
    <div class="stitle border-b frowb gap-2">
        <div>Installed Security Seals</div>
        @php
            use App\Models\SealRegister;
            $count = SealRegister::where('task_id', $task->id)
              ->count();
        @endphp
        <div>{{ $count }}</div>
    </div>
    <div class="frowe gap-1 text-xs text-red-500">
        <strong>Instruction:</strong>
        <p>to add seal click on position</p>
    </div>
    <x-tasks.rmsinstall.details.sealing.inletvalve :$task/>
    <x-tasks.rmsinstall.details.sealing.inletpressuregauge :$task/>
    <x-tasks.rmsinstall.details.sealing.strainer :$task/>
    <x-tasks.rmsinstall.details.sealing.regulator :$task/>
    <x-tasks.rmsinstall.details.sealing.meter :$task/>
    <x-tasks.rmsinstall.details.sealing.outletpressuregauge :$task/>
    <x-tasks.rmsinstall.details.sealing.purgingpoint :$task/>
    <x-tasks.rmsinstall.details.sealing.reliefvalve :$task/>
    <x-tasks.rmsinstall.details.sealing.outletvalve :$task/>
    <x-tasks.rmsinstall.details.sealing.others :$task/>
</div>
