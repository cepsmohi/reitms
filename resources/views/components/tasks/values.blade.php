@if($task->getValue($field))
    <div
        id="{{ randtxt() }}"
        @class([
            'ml-4 md:ml-0 text-green-500 cursor-pointer' => $task->isReporting(),
            'text-red-500' => !$task->isReporting()
        ])
        @if($task->isReporting()) wire:click="openEditValueForm('{{ $field }}')" @endif
    >
        {{ $title ?? '' }} {{ $task->getValue($field) ?? '' }}
    </div>
@else
    <div class=""></div>
    <div
        id="{{ randtxt() }}"
        @class([
            'alink' => $task->isReporting()
        ])
        @if($task->isReporting()) wire:click="openValueForm('{{ $field }}')" @endif
    >
        {{ $tag ?? $field }}
    </div>
@endif
