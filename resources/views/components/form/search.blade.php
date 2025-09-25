<div class="my-4 frow">
    <div
        class="relative"
    >
        <input
            id="inputSearch"
            class="w-44 p-2 border outline-none focus:border-green-500 rounded-full text-xs transition duration-300 dark:bg-gray-700"
            type="text"
            required="required"
            wire:model.live="search"
            placeholder="{{ $placeholder ?? 'Search' }}"
        />
        @if($search != '')
            <div
                class="absolute top-[7px] right-[7px] z-50 cursor-pointer"
                wire:click="resetSearch"
            >
                <x-ui.icon icon="cross" width="w-5"/>
            </div>
        @endif
    </div>
</div>
