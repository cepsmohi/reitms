<div class="mt-4 frow flex-wrap gap-6">
    @foreach($tasks as $task)
        <x-task.card :$task/>
    @endforeach
</div>
