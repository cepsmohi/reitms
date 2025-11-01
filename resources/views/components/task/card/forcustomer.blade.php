<a
    class="card buttonhover glass block h-52 group"
    href="{{ route('tasks.rmsinstall.details', $task) }}"
>
    <!-- Header -->
    <div class="header">
        <x-ui.h3 :title="$task->type"/>
        <span
            @class([
                'px-2 py-1 text-xs rounded-full border',
                'bg-green-100 text-green-700' => $task->status == 'approved',
                'bg-yellow-100 text-yellow-700' => $task->status == 'checked',
                'bg-red-100 text-red-700' => $task->status == 'on going'
            ])
        >
            {{ ucfirst($task->status) }}
        </span>
    </div>

    <!-- Body -->
    <div class="px-4 py-3 space-y-2 text-sm">
        <p><strong>On:</strong> {{ $task->created_at->format('d/m/Y h:ma') }}</p>
        <p><strong>Count Seal:</strong> {{ $task->seals->count() }}</p>
        <p><strong>Count Materials:</strong> {{ $task->materials ? $task->materials->count() : 'N/A' }}</p>
    </div>
    <div class="adbl">
        <x-ui.icon icon="user" padding="p-0" rounded="rounded-full" dark="" width="w-5"/>
        <div class="text-[10px] text-gray-600">{{ $task->user->name }}</div>
        @if($task->isChecked() || $task->isApproved())
            <x-ui.icon icon="tick" padding="p-0" rounded="rounded-full" dark="" width="w-5"/>
            <div class="text-[10px] text-gray-600">{{ $task->checker ? $task->checker->name : 'On going' }}</div>
        @endif
        @if($task->isApproved())
            <x-ui.icon icon="approve" padding="p-0" rounded="rounded-full" dark="" width="w-5"/>
            <div class="text-[10px] text-gray-600">{{ $task->approver ? $task->approver->name : 'On Checking' }}</div>
        @endif
    </div>
</a>
