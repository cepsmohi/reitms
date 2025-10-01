<div class="frows gap-2">
    <button
        @class([
            'submit-button group',
            $width ?? '',
            $color ?? 'dark:bg-gray-500'
        ])
        id="submit-button-{{ $form }}"
        form="{{ $form }}"
        type="submit"
        value="Submit"
    >
        <x-ui.icon
            icon="{{ $icon }}"
            width="w-6"
            padding="p-0"
            dark="{{ $dark ?? '' }}"
        />
        <span class="whitespace-nowrap">
            {{ $tag }}
        </span>
    </button>
</div>
