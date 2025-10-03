<div class="modalback bg-gray-900/90">
    <div class="modal bg-gray-100 p-4 rounded-3xl">
        <x-ui.closeform wireclick="closePhotoForm"/>
        <form wire:submit.prevent="uploadPhoto" id="uploadPhotoFile" enctype="multipart/form-data">
            <div
                x-data
                class="fcols relative mb-7 {{ $width ?? 'w-full'}}"
            >
                @if(count($photos) > 0)
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
                    <div>{{ count($photos) }} Photo Selected</div>
                @else
                    <div
                        class="cursor-pointer"
                        @click="document.getElementById('photos').click()"
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
                            <div>Select Photos</div>
                        </div>
                    </div>
                @endif
                <input
                    id="photos"
                    type="file"
                    wire:model="photos"
                    accept="image/*"
                    placeholder="Select Photos"
                    multiple
                    hidden
                />
                @error('photos')
                <div
                    class="absolute -bottom-4 left-0 w-full truncate text-left text-xs text-red-700"
                >
                    {{ $message }}
                </div>
                @enderror
            </div>
            <x-form.submit-button
                form="uploadPhotoFile"
                icon="photo"
                tag="Add Photos"
            />
        </form>
    </div>
</div>
