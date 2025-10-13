<div class="mt-2 ">
    <div class="frows gap-2">
        <div>
            <strong>Customer Name:</strong> {{ $task->customer->name }}
        </div>
        <div>
            <strong>Customer Code:</strong> {{ $task->customer->code }}
        </div>
    </div>
    <div class="frows gap-2">
        <div>
            <strong>Address:</strong> {{ $task->customer->detail->address ?? '' }}
        </div>
    </div>
</div>
