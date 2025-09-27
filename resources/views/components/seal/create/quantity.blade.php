<div class="max-w-xs">
    <div class="text-xs frowe">ex. M</div>
    <x-form.inputwire
        name="prefix"
        placeholder="Prefix"
        icon="tag"
    />
    @if($sealCollectionType == 'series')
        <div class="text-xs frowe">ex. 123400</div>
        <x-form.inputwire
            name="startNumber"
            placeholder="Start Number"
            icon="start"
        />
        <div class="text-xs frowe">ex. 123500</div>
        <x-form.inputwire
            name="endNumber"
            placeholder="End Number"
            icon="stop"
        />
    @endif
    @if($sealCollectionType == 'single')
        <div class="text-xs frowe">ex. 123500</div>
        <x-form.inputwire
            name="sealNumber"
            placeholder="Seal Number"
            icon="start"
        />
    @endif
</div>
