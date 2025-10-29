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
        <div
            x-cloak
            x-show="isOpen"
            @click.outside="isOpen=false"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 scale-90"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-90"
            class="p-2 adtl top-10 -left-[8px] fcol gap-1 bg-gray-400 w-full rounded-xl shadow z-50"
        >
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
                @if($status != $condition)
                    <div
                        class="w-full px-2 py-1 text-left submit-button"
                        wire:click="selectCondition('{{ $condition }}')"
                        @click="isOpen = !isOpen"
                    >{{ $condition }}</div>
                @endif
            @endforeach
        </div>
        @error('status')
        <div class="py-2 w-full frows flex-wrap text-left text-xs text-red-700">
            {{ $message }}
        </div>
        @enderror
    </div>
</div>
