@if($deleteMaterialForm)
    <div class="modalback bg-gray-900/90">
        <div class="modal glass bg-gray-500/50 p-4 rounded-3xl">
            <div class="stitle text-grad">Are you sure?</div>
            <div class="mt-4 frowb gap-2">
                <x-ui.awiretag
                    wireclick="deleteMaterialConfirm"
                    icon="trash"
                    color="bg-red-300"
                    tag="Delete"
                />
                <x-ui.awiretag
                    wireclick="deleteMaterialCancel"
                    icon="close"
                    color="bg-yellow-300"
                    tag="No, Cancel"
                />
            </div>
        </div>
    </div>
@endif
