<div class="mt-2 frowb">
    <div>
        <strong>Task Title:</strong> {{ $task->title }}
    </div>
    <div>
        <strong>Date:</strong> {{ $task->created_at->format('d/m/Y') }}
    </div>
</div>
