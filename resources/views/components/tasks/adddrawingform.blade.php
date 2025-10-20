@teleport('body')
<x-form.form-modal
    formTitle="Add Drawing"
    formId="addDrawingForm"
    formCondition="addDrawingForm"
    :submitCondition="true"
    submitFun="uploadDrawing"
    submitIcon="refresh"
    submitTag="Update"
    enctype="multipart/form-data"
>
    <x-form.upload-pdf
        :files="$drawings"
        name="drawings"
        wireSubmit="uploadDrawing"
    />
</x-form.form-modal>
@teleport('body')

