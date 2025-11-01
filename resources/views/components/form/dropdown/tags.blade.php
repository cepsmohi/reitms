<div>
    <div class="w-full mb-4 relative">
        <input
            class="@error('tags') bg-red-200 @enderror inputcss"
            id="tags"
            type="text"
            wire:model="tags"
            required
        />
        <span class="frow absolute left-2 top-2 h-6 w-6 text-white drop-shadow">
            <img
                class="w-7 h-7"
                src="{{ asset('images/icon/tag.svg') }}"
                alt="tag"
            />
        </span>
        <span
            class="
            placeholder pointer-events-none
            absolute left-0 ml-12
            text-base text-gray-400 transition duration-300
            "
        >
            File Type
        </span>
        @if(!$tagList)
            <div
                class="adtr cursor-pointer"
                wire:click="$toggle('tagList')"
            >
                <x-ui.icon icon="dropdown"/>
            </div>
        @endif
        @if($tagList)
            <div
                class="adtr cursor-pointer"
                wire:click="$toggle('tagList')"
            >
                <x-ui.icon icon="cross"/>
            </div>
            <div
                class="w-full absolute modal glass bg-gray-500/70 p-2 rounded-3xl fcol gap-2 z-50"
            >
                @foreach($tagTypes as $tag)
                    <div
                        class="w-full px-2 py-1 text-left submit-button glass buttonhover uppercase"
                        wire:click="selectTag('{{ $tag }}')"
                    >{{ $tag }}</div>
                @endforeach
            </div>
        @endif
        @error('tags')
        <div class="py-2 w-full frows flex-wrap text-left text-xs text-red-700">
            {{ $message }}
        </div>
        @enderror
    </div>
</div>
