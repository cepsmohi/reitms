<div class="max-w-xs">
    <x-form.inputwire
        name="prefix"
        placeholder="Prefix"
        icon="tag"
        hints="letter only, like M"
    />
    @if($sealCollectionType == 'series')
        <x-form.inputwire
            name="startNumber"
            placeholder="Start Number"
            icon="start"
            hints="number only"
        />
        <x-form.inputwire
            name="endNumber"
            placeholder="End Number"
            icon="stop"
            hints="number only"
        />
    @endif
    @if($sealCollectionType == 'single')
        <x-form.inputwire
            name="sealNumber"
            placeholder="Seal Number"
            icon="start"
            hints="number only"
        />
    @endif
</div>
