<div>
    <x-ui.topbar/>
    <x-seal.title title="Add Seals"/>
    <x-seal.create.selecttype
        :$sealCollectionType
    />
    @if($sealCollectionType != null)
        <x-seal.create.quantity
            :$sealCollectionType
            :$prefix :$startNumber :$endNumber :$sealNumber
        />
        <x-ui.awiretag
            wireclick="addSeal"
            icon="plus"
            :tag="'Add '.($sealCollectionType == 'series' ? 'Seals' : 'Seal')"
        />
    @endif
</div>
