@if($type)
    @php
        $title = match($type) {
            'rms install' => 'New RMS Installation',
            'rms maintain' => 'RMS Maintenance',
            default => ucfirst($type),
        };
    @endphp
    <x-ui.title :$title/>
@else
    <div class="mt-8 fcol">
        <div class="bg-gray-100 dark:bg-gray-700 p-4 rounded-3xl">
            <x-ui.title title="Select Task Type"/>
            <div class="mb-4 text-black fcol flex-wrap gap-6">
                @foreach($types as $t)
                    <button
                        @class([
                            'w-full submit-button border group print:hidden',
                            'bg-green-500' => $type == $t
                        ])
                        id="{{ randtxt() }}"
                        wire:click="selectType('{{ $t }}')"
                        wire:loading.attr="disabled"
                        wire:offline.attr="disabled"
                    >
                        <img
                            class="w-5"
                            src="{{ asset('images/icon/ques.svg') }}"
                            alt="sealspng"
                            wire:loading.remove
                            wire:target="selectType('{{ $t }}')"
                        />
                        <img
                            class="w-6"
                            src="{{ asset('images/icon/loading.gif') }}"
                            alt="loading"
                            wire:loading
                            wire:target="selectType('{{ $t }}')"
                        />
                        <span class="whitespace-nowrap uppercase">{{ $t }}</span>
                    </button>
                @endforeach
            </div>
        </div>
    </div>
@endif
