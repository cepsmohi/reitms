<div class="w-full frow">
    <div
        x-data="{ uploading: false }"
        x-on:livewire-upload-start="uploading = true"
        x-on:livewire-upload-finish="uploading = false"
        x-on:livewire-upload-error="uploading = false"
        class="frow relative mb-7 {{ $width ?? 'w-28 md:w-44'}} {{ $roundcss ?? 'rounded-full' }} overflow-hidden"
    >
        <div
            x-show="uploading"
            class="w-full fcol cursor-pointer"
        >
            <img
                class="{{ $width ?? 'w-28 md:w-44'}} {{ $roundcss ?? 'rounded-full' }}"
                src="{{ asset('images/icon/loading.gif') }}"
                alt=""
            />
        </div>
        @isset($pic)
            <div
                x-show="!uploading"
                class="w-full fcol cursor-pointer"
                @click="document.getElementById('pic').click()"
            >
                <img
                    class="{{ $width ?? 'w-28 md:w-44'}} {{ $roundcss ?? 'rounded-full' }}"
                    id="imagediv"
                    src="{{ $pic->temporaryUrl() }}"
                    alt=""
                    onerror="this.src='{{ asset($defaultpic ?? 'images/public/avatars/avatar.png') }}';"
                    wire:loading.remove
                    wire:target="{{ $wireSubmit }}"
                />
                <img
                    class="{{ $width ?? 'w-28 md:w-44'}} {{ $roundcss ?? 'rounded-full' }}"
                    src="{{ asset('images/icon/loading.gif') }}"
                    alt=""
                    wire:loading
                    wire:target="{{ $wireSubmit }}"
                />
            </div>
        @else
            <div
                x-show="!uploading"
                class="w-full fcol cursor-pointer"
                @click="document.getElementById('pic').click()"
            >
                <img
                    class="{{ $width ?? 'w-28 md:w-44'}} {{ $roundcss ?? 'rounded-full' }}"
                    id="imagediv"
                    src="{{ $src }}"
                    alt=""
                    onerror="this.src='{{ asset($defaultpic ?? 'images/public/avatars/avatar.png') }}';"
                    wire:loading.remove
                    wire:target="{{ $wireSubmit }}"
                />
            </div>
        @endisset
        <input
            id="pic"
            type="file"
            wire:model="pic"
            accept="{{ $filetypes ?? 'image/png, image/jpeg, image/jpg, image/webp' }}"
            placeholder="pic"
            hidden
        />
        @error('pic')
        <div
            class="absolute -bottom-4 left-0 w-full truncate text-left text-xs text-red-700"
        >
            {{ $message }}
        </div>
        @enderror
    </div>
</div>
