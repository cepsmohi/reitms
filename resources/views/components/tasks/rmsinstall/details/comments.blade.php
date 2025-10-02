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
            @if($task->isPending())
                <x-ui.awiretag
                    wireclick="openEditCommentForm"
                    icon="comment"
                    tag="Edit Comment"
                />
            @endif
        @else
            <x-ui.awiretag
                wireclick="openCommentForm"
                icon="comment"
                tag="Add Comment"
            />
        @endif
    </div>
</div>
