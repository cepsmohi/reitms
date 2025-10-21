<x-form.form-modal
    formCondition="addCommentForm"
    :submitCondition="true"
    submitFun="addComment"
    formId="addCommentForm"
    formTitle="Comments"
    submitIcon="plus"
    submitTag="Add Comment"
>
    <x-form.textareawire
        name="comment"
        placeholder="Write your comment"
        icon="comment"
        tag="Final Comments"
        rows="14"
    />
</x-form.form-modal>
