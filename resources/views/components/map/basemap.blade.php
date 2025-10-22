<template
    x-teleport="#baseMapMenuDiv"
>
    <div @click.outside="isOpen = false">
        <div
            @click="isOpen = !isOpen"
            title="Change Base Map"
        >
            <div
                @class([
                    'bg-gray-200 dark:bg-gray-500 hover:bg-gray-300',
                    'block rounded-xl cursor-pointer'
                ])
                title="Base Map"
            >
                <x-ui.icon
                    icon="map"
                    padding="p-0"
                    dark=""
                    width="w-10"
                />
            </div>
        </div>
        <x-ui.transtogglediv
            class="absolute top-12"
        >
            @php
                $basemapNames = [
                    ['osmgray', 'Open Street Map Grey'],
                    ['osmcolor', 'Open Street Map Color'],
                    ['roadmap', 'Google Map'],
                    ['satellite', 'Satellite Map'],
                    ['hybrid', 'Satellite Map with Titles']
                ];
            @endphp
            <div class="fcol gap-2">
                @foreach ($basemapNames as $name)
                    <div
                        class="relative cursor-pointer"
                        @click="isOpen = false"
                        wire:click="updateBaseMap('{{ $name[0] }}')"
                    >
                        <div
                            class="w-11 h-11 border-2 border-gray-900 rounded-full frow shadow-xl"
                            title="{{ $name[1] }}"
                        >
                            <img
                                @class([
                                    'w-full drop-shadow rounded-full',
                                    'border-2 border-gray-50 bg-gray-100',
                                    'object-contain'
                                ])
                                src="{{ asset('images/basemap/' . $name[0] . '.png') }}"
                                alt="{{ $name[0] }}"
                            />
                        </div>
                        <div class="adr right-10 whitespace-nowrap drop-shadow bg-gray-100 rounded-xl px-2">
                            {{ $name[1] }}
                        </div>
                    </div>
                @endforeach
            </div>
        </x-ui.transtogglediv>
    </div>
</template>
