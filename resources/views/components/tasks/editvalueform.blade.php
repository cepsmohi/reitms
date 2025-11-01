@if($editValueForm)
    <div class="modalback bg-gray-900/90">
        <div class="modal glass bg-gray-500/50 p-4 rounded-3xl">
            <x-ui.closeform wireclick="closeValueForm"/>
            <form
                wire:submit="updateValue"
                id="editValueForm"
            >
                <x-form.inputwire
                    name="value"
                    :placeholder="ucwords(strtolower($field))"
                    icon="start"
                />
                <x-form.submit-button
                    form="editValueForm"
                    icon="refresh"
                    tag="Update Value"
                />
            </form>
        </div>
    </div>
@endif
