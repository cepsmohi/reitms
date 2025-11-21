@if($task->getValue($field) == null)
    <div
        id="{{ randtxt() }}"
        @class([
            'print:hidden',
            'alink buttonhover' => $task->isReporting()
        ])
        @if($task->isReporting()) wire:click="openValueForm('{{ $field }}')" @endif
    >
        {{ $tag ?? $field }}
    </div>
    <div class="hidden print:block">---</div>
@else
    <div
        id="{{ randtxt() }}"
        @class([
            'print:text-black',
            'text-green-500 cursor-pointer' => $task->isReporting(),
            'text-red-500' => !$task->isReporting()
        ])
        @if($task->isReporting()) wire:click="openEditValueForm('{{ $field }}')" @endif
    >
        {{ $title ?? '' }} {{ $task->getValue($field) ?? '' }}
    </div>
@endif
