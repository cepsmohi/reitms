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
                <div class="stitle mb-4">Select Customer</div>
                <x-form.inputwirelive
                    name="customercode"
                    placeholder="Customer Code (if any)"
                    icon="link"
                    hints="x-xx-xxxxxx-xx-xx-x"
                    pattern="formatByPattern(this, [1,2,6,2,2,1], '-')"
                    :required="false"
                />
                @if($customercode != '' && $customers != null)
                    <div class="absolute bg-gray-500/90 w-[235px] z-50 p-1 rounded-xl max-h-[30vh] overflow-y-scroll">
                        @foreach($customers as $customer)
                            <div
                                class="w-full px-2 py-1 text-left flex-col items-start justify-center cursor-pointer hover:bg-gray-400/70 rounded-xl"
                                wire:click="selectCustomer('{{ $customer->code }}')"
                            >
                                <div class="text-sm text-left">{{ $customer->code }}</div>
                                <div class="text-xs text-left text-gray-500">{{ $customer->customer_name }}</div>
                            </div>
                        @endforeach
                    </div>
                @endif
            @endif
        @endif
    </x-form.form-create>
</div>
