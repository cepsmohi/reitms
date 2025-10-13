@php
    use App\Models\SealRegister;
    $count = SealRegister::where('task_id', $task->id)
      ->count();
@endphp
<div>Total {{ $count }}</div>
