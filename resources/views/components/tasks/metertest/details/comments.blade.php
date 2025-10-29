<div class="py-1">
    <div class="w-full border-b font-bold">মন্তব্য</div>
    <div>
        @php
            $comment = $task->comment;
        @endphp
        @if($comment)
            <p class="text-justify">
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
                <div class="my-1">
                    <x-ui.awiretag
                        wireclick="$toggle('addCommentForm')"
                        icon="comment"
                        tag="Add Comment"
                    />
                </div>
            @else
                <div class="stitle text-red-500">No comment added</div>
            @endif
        @endif
    </div>
</div>
