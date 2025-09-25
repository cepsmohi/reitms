<div class="{{ $width ?? 'w-full' }} {{ $mb ?? 'mb-7'}} rounded-xl relative">
    <div class="checkboxdiv">
        <input
            class="checkbox"
            type="checkbox"
            name="{{ $name }}"
            id="checkbox-{{ $name }}"
            {{ $value ?? '' }}
            @isset($onchange) wire:change="{{ $onchange }}" @endisset
        />
        <label
            for="checkbox-{{ $name }}"
            class="absolute left-0 ml-12 text-base cursor-pointer whitespace-nowrap transition duration-300 text-black dark:text-white">
            {{ $placeholder }}
        </label>
    </div>
    @error($name)
    <div class="absolute -bottom-4 left-0 w-full truncate text-left text-xs text-red-700">
        {{ $message }}
    </div>
    @enderror
</div>
