<div
    x-data="{ uploading: false }"
    x-on:livewire-upload-start="uploading = true"
    x-on:livewire-upload-finish="uploading = false"
    x-on:livewire-upload-error="uploading = false"
    class="w-full fcol relative mb-7"
>
    <x-ui.alpineloading/>
    @if($photos != null)
        <div
            x-show="!uploading"
            class="w-full fcol cursor-pointer"
            @click="document.getElementById('{{ $name }}').click()"
        >
            <img
                class="w-28 h-28 cursor-pointer"
                id="imagediv"
                src="{{ asset('images/icon/photogreen.svg') }}"
                alt=""
                wire:loading.remove
                wire:target="{{ $wireSubmit }}"
            />
            <img
                class="w-28 h-28 {{ $roundcss ?? 'rounded-full' }}"
                src="{{ asset('images/icon/loading.gif') }}"
                alt=""
                wire:loading
                wire:target="{{ $wireSubmit }}"
            />
            <div class="stitle text-green-400 w-full text-center">
                {{ $inputTagSelected ?? 'Photo Selected' }}
            </div>
            <div class="w-full text-center text-xs">
                Total Size {{ number_format(($totalSize/(1024*1024)), 2) }}MB
            </div>
        </div>
    @else
        <div
            x-show="!uploading"
            class="w-full fcol cursor-pointer"
            @click="document.getElementById('{{ $name }}').click()"
        >
            <img
                class="w-28 h-28 cursor-pointer"
                id="imagediv"
                src="{{ asset('images/icon/photoblack.svg') }}"
                alt=""
                wire:loading.remove
                wire:target="{{ $wireSubmit }}"
            />
            <div class="stitle w-full text-center">{{ $inputTag ?? 'Select Photos' }}</div>
            <div class="w-full text-center text-xs">Total Size < 15MB</div>
        </div>
    @endif
    <input
        id="{{ $name }}"
        type="file"
        wire:model="{{ $name }}"
        accept="{{ $filetypes ?? 'image/png, image/jpeg, image/jpg, image/webp' }}"
        placeholder="{{ $inputTag ?? 'Select Photo' }}"
        multiple
        hidden
    />
    @error($name)
    <div
        class="absolute -bottom-4 left-0 w-full truncate text-left text-xs text-red-700"
    >
        {{ $message }}
    </div>
    @enderror
</div>
