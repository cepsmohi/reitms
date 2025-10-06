<div class="mt-4">
    <div class="stitle text-grad">Task List</div>
    <div class="frow flex-wrap gap-2">
        @foreach($customer->tasks as $task)
            <x-task.card.forcustomer :$task/>
        @endforeach
    </div>
</div>
