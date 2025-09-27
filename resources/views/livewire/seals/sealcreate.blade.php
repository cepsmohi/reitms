<div>
    <x-ui.topbar/>
    <x-seal.title title="Add Seals"/>
    <form wire:submit="addSeal" id="addSealForm">
        <div class="mt-8 fcol">
            <div class="bg-gray-100 dark:bg-gray-700 p-4 rounded-3xl">
                <x-seal.create.selecttype
                    :$sealCollectionType
                />
                @if($sealCollectionType != null)
                    <x-seal.create.quantity
                        :$sealCollectionType
                        :$prefix :$startNumber :$endNumber :$sealNumber
                    />
                    <x-form.submit-button
                        form="addSealForm"
                        icon="plus"
                        :tag="'Add '.($sealCollectionType == 'series' ? 'Seals' : 'Seal')"
                    />
                @endif
            </div>
        </div>
    </form>
</div>
