<div class="modalback bg-gray-900/90">
    <div class="modal glass bg-gray-500/80 p-4 rounded-3xl group">
        <x-ui.closeform wireclick="delete{{ $object }}Cancel"/>
        <div class="stitle text-grad">Are you sure?</div>
        <div class="mt-4 frowb gap-2">
            <x-ui.awiretag
                wireclick="delete{{ $object }}Confirm"
                icon="trash"
                color="bg-red-300"
                tag="Delete"
            />
        </div>
    </div>
</div>
