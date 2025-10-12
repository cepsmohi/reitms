@isset($hints)
    <div class="w-full text-xs frowe">ex. {{ $hints }}</div>
@endisset
<div class="{{ $hidden ?? '' }} {{ $width ?? 'w-full' }} {{ $mb ?? 'mb-4' }} relative">
    <input
        class="@error($name) bg-red-200 @enderror inputcss {{ $uppercase ?? '' }}"
        id="{{ $name }}"
        type="{{ $type ?? 'text' }}"
        @isset($step) step="{{ $step }}" @endisset
        wire:model.blur="{{ $name }}"
        @isset($wirekeydown) wire:keydown.enter="{{ $wirekeydown }}" @endisset
        @isset($wirekeyup) wire:keyup.enter="{{ $wirekeyup }}" @endisset
        @isset($onchange) wire:change="{{ $onchange }}" @endisset
        @isset($autocomplete) autocomplete="{{ $autocomplete }}" @endisset
        @if((isset($required) && !$required) || (isset($type) && ($type == 'date' || $type == 'time' || $type == 'datetime-local'))))
        @else
            required
        @endisset
        @isset($pattern) oninput="{{ $pattern }}" @endisset
        {{ $disabled ?? '' }}
        {{ $autofocus ?? '' }}
    />
    @isset($icon)
        <span class="frow absolute left-2 top-2 h-6 w-6 text-white drop-shadow">
            <img
                class="w-7 h-7"
                src="{{ asset('images/icon/' . $icon . '.svg') }}"
                alt="{{ $icon }}"
            />
        </span>
    @endisset
    <span class="placeholder pointer-events-none absolute left-0 ml-12 text-base text-gray-400 transition duration-300">
        {{ $placeholder ?? '' }}
    </span>
    @error($name)
    <div class="py-2 w-full frows flex-wrap text-left text-xs text-red-700">
        {{ $message }}
    </div>
    @enderror
</div>
