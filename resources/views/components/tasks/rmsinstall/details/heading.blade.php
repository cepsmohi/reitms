<div>
    <div>Task Date: {{ $task->created_at->format('d-m-Y') }}</div>
    <div>Reporting By: {{ $task->user->name }}, {{ $task->user->designation }}</div>
</div>
