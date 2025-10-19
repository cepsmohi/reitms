<div class="modalback bg-gray-900/90">
    <div class="modal bg-gray-100 p-4 rounded-3xl">
        <div class="stitle text-grad">Are you sure?</div>
        <div class="mt-4 frowb gap-2">
            <x-ui.awiretag
                wireclick="delete{{ $object }}Confirm"
                icon="trash"
                color="bg-red-300"
                tag="Delete"
            />
            <x-ui.awiretag
                wireclick="delete{{ $object }}Cancel"
                icon="close"
                color="bg-yellow-300"
                tag="No, Cancel"
            />
        </div>
    </div>
</div>
