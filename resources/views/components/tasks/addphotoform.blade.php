@if($addPhotoForm)
    @teleport('body')
    <x-form.form-modal
        formTitle="Add Photos"
        formId="addPhotoForm"
        formCondition="addPhotoForm"
        :submitCondition="true"
        submitFun="uploadPhoto"
        submitIcon="photo"
        submitTag="Add Photos"
        enctype="multipart/form-data"
    >
        <x-form.upload-photos
            :$photos
            name="photos"
            wireSubmit="updatingPhotos"
            :inputTagSelected="$photos != null ? count($photos).' '.str_plural('photo',count($photos)).' selected' : ''"
            :$totalSize
        />
    </x-form.form-modal>
    @teleport('body')
@endif
