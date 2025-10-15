@if($addValueForm)
    <div class="modalback bg-gray-900/90">
        <div class="modal bg-gray-100 p-4 rounded-3xl">
            <x-ui.closeform wireclick="closeValueForm"/>
            <form
                wire:submit="addValue"
                id="addValueForm"
            >
                <x-form.inputwire
                    name="value"
                    :placeholder="ucwords(strtolower($field))"
                    icon="start"
                />
                <x-form.submit-button
                    form="addValueForm"
                    icon="plus"
                    tag="Add Value"
                />
            </form>
        </div>
    </div>
@endif
