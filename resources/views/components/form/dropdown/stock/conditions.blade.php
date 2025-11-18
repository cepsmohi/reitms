<div x-data="{ isOpen:false }">
    <div class="w-full mb-4 relative">
        <input
            class="@error('status') bg-red-200 @enderror inputcss"
            id="status"
            type="text"
            wire:model="status"
            required
        />
        <span class="frow absolute left-2 top-2 h-6 w-6 text-white drop-shadow">
            <img
                class="w-7 h-7"
                src="{{ asset('images/icon/status.svg') }}"
                alt="condition"
            />
        </span>
        <span
            class="
            placeholder pointer-events-none
            absolute left-0 ml-12
            text-base text-gray-400 transition duration-300
            "
        >
            Condition
        </span>
        <div
            class="adtr cursor-pointer"
            @click="isOpen = !isOpen"
            x-show="!isOpen"
        >
            <x-ui.icon icon="dropdown"/>
        </div>
        <div
            class="adtr cursor-pointer"
            @click="isOpen = !isOpen"
            x-show="isOpen"
        >
            <x-ui.icon icon="cross"/>
        </div>
        <x-ui.transtogglediv>
            @php
                $conditionTypes = [
                    'stock',
                    'installed',
                    'repairable',
                    'damaged',
                    'lost'
                ];
            @endphp
            @foreach($conditionTypes as $condition)
                @if($condition != $meter->status && $condition != $status)
                    <div
                        @click="isOpen = !isOpen"
                        class="w-full submit-button buttonhover glass group"
                        wire:click="selectCondition('{{ $condition }}')"
                    >
                        <span class="whitespace-nowrap uppercase">
                            {{ $condition }}
                        </span>
                    </div>
                @endif
            @endforeach
        </x-ui.transtogglediv>
        @error('status')
        <div class="py-2 w-full frows flex-wrap text-left text-xs text-red-700">
            {{ $message }}
        </div>
        @enderror
    </div>
</div>
