<div class="mt-20 frowb gap-12">
    <div class="w-full fcols border-t">
        <div class="font-bold">Prepared By</div>
        <div>({{ $task->user->name }})</div>
        <div>{{ $task->user->designation }}</div>
        <div>Code {{ $task->user->code }}</div>
    </div>
    <div class="w-full fcols border-t">
        <div class="font-bold">Checked By</div>
        <div>({{ $task->checker->name }})</div>
        <div>{{ $task->checker->designation }}</div>
        <div>Code {{ $task->checker->code }}</div>
    </div>
    <div class="w-full fcols border-t">
        <div class="font-bold">Approved By</div>
        <div>({{ $task->approver->name }})</div>
        <div>{{ $task->approver->designation }}</div>
        <div>Code {{ $task->approver->code }}</div>
    </div>
</div>
