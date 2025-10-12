<div
    class="mt-2 max-w-xs bg-gray-100 p-4 rounded-3xl"
>
    <div class="mb-2 stitle text-grad">Assign Regulator</div>
    <form
        wire:submit="assignRegulator"
        id="assignRegulatorForm"
    >
        <x-form.inputwire
            name="regulatorSerialNumber"
            placeholder="Regulator Serial Number"
            icon="regulator"
        />
        <x-form.submit-button
            form="assignRegulatorForm"
            icon="assign"
            tag="Assign"
        />
    </form>
</div>
