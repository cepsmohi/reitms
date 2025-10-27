@php
    $types = [
        'rms install'  => 'rmsinstall',
        'rms maintain' => 'rmsmaintain',
    ];

    $type = $types[$task->type] ?? '';
@endphp

<a
    class="card h-52"
    href="{{ $type }}/{{ $task->id }}"
>
    <!-- Header -->
    <div class="header">
        <x-ui.h3 :title="$task->customer->name"/>
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
        <p><strong>Code:</strong> {{ $task->customer->code }}</p>
        <div class="frows gap-2">
            <p><strong>Zone:</strong> {{ $task->customer->zone }}</p>
            <p><strong>Load (hr):</strong> {{ number_format($task->customer->load_hr, 2) }} m<sup>3</sup></p>
        </div>
    </div>
    <div class="adbr">
        <div class="text-[10px] text-gray-600">{{ $task->user->name }}</div>
        <x-ui.icon icon="user" padding="p-0" rounded="rounded-full" dark="" width="w-5"/>
    </div>
</a>
