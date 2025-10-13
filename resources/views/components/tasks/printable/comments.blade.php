<div class="mt-4">
    <div class="title border-b">Comments</div>
    <div class="fcols gap-2">
        @php
            $comment = $task->comment;
        @endphp
        @if($comment)
            <p>
                {{ $comment->text }}
            </p>
        @endif
    </div>
</div>
