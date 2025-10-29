@if($editCommentForm)
    <x-form.form-modal
        formCondition="editCommentForm"
        :submitCondition="true"
        submitFun="updateComment"
        formId="editCommentForm"
        formTitle="Edit Comments"
    >
        <x-form.textareawire
            name="comment"
            placeholder="Write your comment"
            icon="comment"
            tag="Final Comments"
            rows="14"
        />
    </x-form.form-modal>
@endif
