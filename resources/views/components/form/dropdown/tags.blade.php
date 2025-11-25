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
                class="absolute bg-gray-500/90 w-full z-50 p-1 rounded-xl overflow-y-scroll"
            >
                @foreach($tagTypes as $tag)
                    <div
                        class="w-full px-2 py-1 text-left flex-col items-start justify-center cursor-pointer hover:bg-gray-400/90 rounded-xl uppercase"
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
