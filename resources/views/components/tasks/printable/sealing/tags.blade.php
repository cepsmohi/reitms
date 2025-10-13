@php
    use App\Models\SealRegister;
    $seals = SealRegister::where('task_id', $task->id)
        ->where('position', $type)
        ->get();
@endphp
@if($seals->count() > 0)
    <div>
        {{ $position }}
    </div>
    @foreach($seals as $s)
        <div class="font-bold">
            {{ $s->seal->number }}
        </div>
    @endforeach
@endif
