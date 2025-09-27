<div class="mb-2 stitle">Select Seal Quantity Type</div>
<div class="mb-7 text-black frows gap-6">
    <div
        class="frows gap-2 print:hidden"
    >
        <button
            @class([
                'submit-button group',
                'bg-green-500' => $sealCollectionType == 'series'
            ])
            id="{{ randtxt() }}"
            wire:click="selectCondition('series')"
            wire:loading.attr="disabled"
            wire:offline.attr="disabled"
        >
            <img
                class="w-10"
                src="{{ asset('images/icon/sealspng.svg') }}"
                alt="sealspng"
                wire:loading.remove
                wire:target="selectCondition('series')"
            />
            <img
                class="w-6"
                src="{{ asset('images/icon/loading.gif') }}"
                alt="loading"
                wire:loading
                wire:target="selectCondition('series')"
            />
            <span class="whitespace-nowrap">
                Series
            </span>
        </button>
    </div>
    <div
        class="frows gap-2 print:hidden"
    >
        <button
            @class([
                'submit-button group',
                'bg-green-500' => $sealCollectionType == 'single'
            ])
            id="{{ randtxt() }}"
            wire:click="selectCondition('single')"
            wire:loading.attr="disabled"
            wire:offline.attr="disabled"
        >
            <img
                class="w-10"
                src="{{ asset('images/icon/sealpng.svg') }}"
                alt="sealpng"
                wire:loading.remove
                wire:target="selectCondition('single')"
            />
            <img
                class="w-6"
                src="{{ asset('images/icon/loading.gif') }}"
                alt="loading"
                wire:loading
                wire:target="selectCondition('single')"
            />
            <span class="whitespace-nowrap">
                Single
            </span>
        </button>
    </div>
</div>
