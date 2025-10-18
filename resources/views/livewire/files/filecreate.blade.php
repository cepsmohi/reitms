<div>
    <x-ui.topbar/>
    <x-file.create.buttons/>
    <x-ui.title title="Add File"/>
    <x-form.form-create
        wiresubmit="addFile"
        formId="addFileForm"
        enctype="multipart/form-data"
        submitIcon="plus"
        submitTag="Add File"
        :submitCondi="$file"
    >
        <x-form.upload-pdf
            name="file"
            :files="$file"
            wireSubmit="addFile"
        />
        @if($file != null)
            <x-form.inputwire
                name="name"
                placeholder="File name"
                icon="name"
            />
            <x-form.dropdown.tags
                :$tagList
                :$tags
                :$tagTypes
            />
            <x-form.inputwire
                name="published"
                type="date"
                placeholder="Published Date"
                icon="date"
            />
            @if(in_array($tags, ['information', 'report']))
                <x-form.inputwire
                    name="code"
                    placeholder="Customer Code (if any)"
                    icon="link"
                    hints="x-xx-xxxxxx-xx-xx-x"
                    pattern="formatByPattern(this, [1,2,6,2,2,1])"
                    :required="false"
                />
            @endif
        @endif
    </x-form.form-create>
</div>
