<div class="modalback bg-gray-900/90">
    <div class="modal bg-gray-100 p-4 rounded-3xl">
        <x-ui.closeform wireclick="closeEditCommentForm"/>
        <div class="mb-2 stitle text-grad">Edit Comments</div>
        <form
            wire:submit="updateComment"
            id="editCommentForm"
        >
            <x-form.textareawire
                name="comment"
                placeholder="Write your comment"
                icon="comment"
                tag="Final Comments"
                rows="14"
            />
            <x-form.submit-button
                form="editCommentForm"
                icon="refresh"
                tag="Update Comment"
            />
        </form>
    </div>
</div>
