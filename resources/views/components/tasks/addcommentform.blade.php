<div class="modalback bg-gray-900/90">
    <div class="modal bg-gray-100 p-4 rounded-3xl">
        <x-ui.closeform wireclick="closeCommentForm"/>
        <div class="mb-2 stitle text-grad">Comments</div>
        <form
            wire:submit="addComment"
            id="addCommentForm"
        >
            <x-form.textareawire
                name="comment"
                placeholder="Write your comment"
                icon="comment"
                tag="Final Comments"
                rows="14"
            />
            <x-form.submit-button
                form="addCommentForm"
                icon="plus"
                tag="Add Comment"
            />
        </form>
    </div>
</div>
