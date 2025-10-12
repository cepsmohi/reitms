<div class="modalback bg-gray-900/90">
    <div class="modal bg-gray-100 p-4 rounded-3xl">
        <x-ui.closeform wireclick="closeDrawingForm"/>
        <form
            wire:submit.prevent="uploadDrawing"
            id="uploadDrawingFile"
            enctype="multipart/form-data"
        >
            <div
                x-data
                class="fcols relative mb-7 {{ $width ?? 'w-full'}}"
            >
                @if(count($drawings) == 1)
                    <img
                        class="w-[100px] cursor-pointer"
                        id="imagediv"
                        src="{{ asset('images/icon/selectedphotoimage.png') }}"
                        alt=""
                        wire:loading.remove
                        wire:target="uploadPhoto"
                    />
                    <img
                        class="w-28  h-28 {{ $roundcss ?? 'rounded-full' }}"
                        src="{{ asset('images/icon/loading.gif') }}"
                        alt=""
                        wire:loading
                        wire:target="uploadPhoto"
                    />
                    <div>Drawing Selected</div>
                @else
                    <div
                        class="cursor-pointer"
                        @click="document.getElementById('drawings').click()"
                    >
                        <img
                            class="w-[100px] cursor-pointer"
                            id="imagediv"
                            src="{{ asset('images/icon/defaultphotoimage.png') }}"
                            alt=""
                            wire:loading.remove
                            wire:target="uploadPhoto"

                        />
                        <div class="stitle">
                            <div>Select Drawing</div>
                        </div>
                    </div>
                @endif
                <input
                    id="drawings"
                    type="file"
                    wire:model="drawings"
                    accept=".pdf"
                    placeholder="Select Drawing"
                    multiple
                    hidden
                />
                @error('drawings')
                <div
                    class="absolute -bottom-4 left-0 w-full truncate text-left text-xs text-red-700"
                >
                    {{ $message }}
                </div>
                @enderror
            </div>
            <x-form.submit-button
                form="uploadDrawingFile"
                icon="clip"
                tag="Add Drawing"
            />
        </form>
    </div>
</div>
