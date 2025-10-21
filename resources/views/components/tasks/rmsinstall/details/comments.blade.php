<div class="mt-4">
    <div class="stitle border-b">Comments</div>
    <div class="mt-2 fcols gap-2">
        @php
            $comment = $task->comment;
        @endphp
        @if($comment)
            <p>
                {{ $comment->text }}
            </p>
            @if($task->isReporting())
                <x-ui.awiretag
                    wireclick="$toggle('editCommentForm')"
                    icon="comment"
                    tag="Edit Comment"
                />
            @endif
        @else
            @if($task->isReporting())
                <x-ui.awiretag
                    wireclick="$toggle('addCommentForm')"
                    icon="comment"
                    tag="Add Comment"
                />
            @else
                <div class="stitle text-red-500">No comment added</div>
            @endif
        @endif
    </div>
</div>
@if($addCommentForm)
    <x-tasks.addcommentform :$comment/>
@endif
@if($editCommentForm)
    <x-tasks.editcommentform :$comment/>
@endif
