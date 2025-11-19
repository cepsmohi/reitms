<div class="frows gap-2">
    <button
        @class([
            'submit-button buttonhover glass group',
            $width ?? '',
            $color ?? 'bg-gray-500/50 dark:bg-gray-300/50 hover:bg-gray-300/50'
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
        />
        <span class="whitespace-nowrap">
            {{ $tag }}
        </span>
    </button>
</div>
