<div class="modalback bg-gray-900/90">
    <div class="modal bg-gray-100 p-4 rounded-3xl">
        <x-ui.closeform wireclick="closeSealForm"/>
        <form
            wire:submit="addSeal"
            id="addSealForm"
        >
            <div class="mb-2 stitle text-grad">{{ $sealType ?? 'Type not selected' }}</div>
            <x-form.inputwire
                name="prefix"
                placeholder="Prefix"
                icon="tag"
                hints="letter only, like M"
            />
            <x-form.inputwire
                name="sealNumber"
                placeholder="Seal Number"
                icon="start"
                hints="number only"
            />
            <x-form.submit-button
                form="addSealForm"
                icon="plus"
                tag="Add Seal"
            />
        </form>
    </div>
</div>
