<div
    id="{{ randtxt() }}"
    class="alink"
    wire:click="openSealForm('{{ $type }}')"
>
    {{ $position }}
</div>
@php
    use App\Models\RmsInstallDetail;
    $seals = RmsInstallDetail::where('task_id', $task->id)
        ->where('type', $type)
        ->get();
@endphp
@foreach($seals as $s)
    <div
        class="ml-4 md:ml-0 text-green-500 cursor-pointer"
        id="{{ randtxt() }}"
        wire:click="removeSeal({{ $s->id }})"
    >
        {{ $s->seal->number }}
    </div>
@endforeach
