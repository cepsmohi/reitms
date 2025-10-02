<div class="frows gap-2">
    <button
        @class([
            'submit-button group',
            $width ?? '',
            $color ?? 'bg-gray-400 dark:bg-gray-500 hover:bg-gray-300'
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
