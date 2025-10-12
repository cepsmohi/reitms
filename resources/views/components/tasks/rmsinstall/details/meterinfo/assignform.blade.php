<div
    class="mt-2 max-w-xs bg-gray-100 p-4 rounded-3xl"
>
    <div class="mb-2 stitle text-grad">Assign meter</div>
    <form
        wire:submit="assignMeter"
        id="assignMeterForm"
    >
        <x-form.inputwire
            name="meterSerialNumber"
            placeholder="Meter Serial Number"
            icon="meter"
        />
        <x-form.submit-button
            form="assignMeterForm"
            icon="assign"
            tag="Assign"
        />
    </form>
</div>
