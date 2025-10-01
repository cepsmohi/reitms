<div class="modalback bg-gray-500/90">
    <form wire:submit="addSeal" id="addSealForm">
        <div class="modal bg-gray-100 dark:bg-gray-700 p-4 rounded-3xl">
            <div class="mb-2 stitle">{{ $type ?? 'Type not selected' }}</div>
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
        </div>
    </form>
</div>
