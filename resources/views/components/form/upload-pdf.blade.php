<div
    x-data="{ uploading: false }"
    x-on:livewire-upload-start="uploading = true"
    x-on:livewire-upload-finish="uploading = false"
    x-on:livewire-upload-error="uploading = false"
    class="fcol relative mb-7 w-full overflow-hidden"
>
    <div
        x-show="uploading"
        class="w-full fcol cursor-pointer"
    >
        <img
            class="{{ $width ?? 'w-28'}} rounded-full"
            src="{{ asset('images/icon/loading.gif') }}"
            alt=""
        />
    </div>
    @if($files != null)
        <div
            x-show="!uploading"
            class="w-full fcol cursor-pointer"
            @click="document.getElementById({{ $name }}).click()"
        >
            <img
                class="{{ $width ?? 'w-28'}}"
                id="pdfFileDiv"
                src="{{ asset('images/icon/pdfgreen.svg') }}"
                alt=""
                wire:loading.remove
                wire:target="{{ $wireSubmit }}"
            />
            <img
                class="{{ $width ?? 'w-28'}} rounded-full"
                src="{{ asset('images/icon/loading.gif') }}"
                alt=""
                wire:loading
                wire:target="{{ $wireSubmit }}"
            />
            <div class="stitle text-green-400 w-full text-center">
                {{ $inputTagSelected ?? 'File Selected' }}
            </div>
        </div>
    @else
        <div
            x-show="!uploading"
            class="w-full fcol cursor-pointer"
            @click="document.getElementById('{{ $name }}').click()"
        >
            <img
                class="{{ $width ?? 'w-28'}}"
                id="pdfFileDiv"
                src="{{ asset('images/icon/pdfblack.svg') }}"
                alt=""
                wire:loading.remove
                wire:target="{{ $wireSubmit }}"
            />
            <div class="stitle w-full text-center">
                {{ $inputTag ?? 'Select File' }}
            </div>
        </div>
    @endif
    <input
        id="{{ $name }}"
        type="file"
        wire:model="{{ $name }}"
        accept=".pdf"
        placeholder="{{ $inputTag ?? 'Select File' }}"
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
