<div class="{{ $width ?? 'w-full' }} {{ $mb ?? 'mb-7' }} relative">
    <input
        class="@error($name) bg-red-200 @enderror inputcss group"
        id="{{ $name }}"
        type="{{ $type ?? 'text' }}"
        name="{{ $name }}"
        autocomplete="{{ $autocomplete ?? 'off' }}"
        required="required"
        @if (isset($value)) value="{{ $value }}" @endif
        {{ $disabled ?? '' }}
        {{ $autofocus ?? '' }} />
    @isset($icon)
        <span class="frow absolute left-2 top-2 h-6 w-6 text-white drop-shadow">
            <img
                class="w-7 h-7"
                src="{{ asset('images/icon/' . $icon . '.svg') }}"
                alt="{{ $icon }}"
            />
        </span>
    @endisset
    <span
        class="placeholder pointer-events-none absolute left-0 ml-12 text-base text-gray-400 transition duration-300">
        {{ $placeholder ?? '' }}
    </span>
    @error($name)
    <div class="absolute -bottom-4 left-0 w-full truncate text-left text-xs text-red-700">
        {{ $message }}
    </div>
    @enderror
</div>
