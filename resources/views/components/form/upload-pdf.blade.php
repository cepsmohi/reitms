<div
    x-data
    class="fcol relative mb-7"
>
    @if($files != null)
        <img
            class="w-28 h-28 cursor-pointer"
            id="imagediv"
            src="{{ asset('images/icon/pdfgreen.svg') }}"
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
        <div class="stitle text-green-400 w-full text-center">{{ $inputTagSelected ?? 'File Selected' }}</div>
    @else
        <div
            class="cursor-pointer"
            @click="document.getElementById('{{ $name }}').click()"
        >
            <img
                class="w-28 h-28 cursor-pointer"
                id="imagediv"
                src="{{ asset('images/icon/pdfblack.svg') }}"
                alt=""
                wire:loading.remove
                wire:target="{{ $wireSubmit }}"

            />
            <div class="stitle w-full text-center">{{ $inputTag ?? 'Select File' }}</div>
        </div>
    @endif
    <input
        id="{{ $name }}"
        type="file"
        wire:model="{{ $name }}"
        accept=".pdf"
        placeholder="{{ $inputTag ?? 'Select File' }}"
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
