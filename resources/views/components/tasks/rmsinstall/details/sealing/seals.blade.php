<div
    id="{{ randtxt() }}"
    @class([
        'alink' => $task->isReporting()
    ])
    @if($task->isReporting()) wire:click="openSealForm('{{ $type }}')" @endif
>
    {{ $position }}
</div>
@php
    use App\Models\SealRegister;
    $seals = SealRegister::where('task_id', $task->id)
        ->where('position', $type)
        ->get();
@endphp
@foreach($seals as $s)
    <div
        @class([
            'ml-4 md:ml-0 text-green-500 cursor-pointer' => $task->isReporting(),
            'text-red-500' => !$task->isReporting()
        ])
        id="{{ randtxt() }}"
        @if($task->isReporting()) wire:click="removeSeal({{ $s->id }})" @endif
    >
        {{ $s->seal->number }}
    </div>
@endforeach
