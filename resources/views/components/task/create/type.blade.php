<div class="mt-7 w-full fcol">
    @if($type)
        <div class="fcol uppercase">
            <div class="stitle border-b">Task Type</div>
            <div class="stitle text-grad">{{ $type }}</div>
        </div>
    @else
        <div class="stitle">Select Task Type</div>
        <div class="mb-7 text-black frow flex-wrap gap-6">
            @php
                $types = [
                    'rms install', 'rms maintenance', 'rms layoff',
                    'rms dc', 'meter test', 'meter sealing'
                ];
            @endphp
            @foreach($types as $t)
                <button
                    @class([
                        'submit-button group print:hidden',
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
    @endif
</div>
