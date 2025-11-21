@if($task->getValue($field2) != null && $task->getValue($field1) != null)
    @php
        $diff = $task->getValue($field2) - $task->getValue($field1);
    @endphp
    <div>
        {{ $diff }}
    </div>
@else
    <div>---</div>
@endif
