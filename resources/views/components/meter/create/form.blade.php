<form wire:submit="createMeter" id="createMeterForm">
    <div class="mt-8 fcol">
        <div class="bg-gray-100 dark:bg-gray-700 p-4 rounded-3xl">
            <x-form.inputwire
                name="number"
                placeholder="Meter Number"
                icon="name"
            />
            <x-form.inputwire
                name="type"
                placeholder="Meter Type"
                icon="tag"
                hints="G-400"
            />
            <x-form.inputwire
                name="model"
                placeholder="Model"
                icon="model"
                hints="if any"
                :required="false"
            />
            <x-form.inputwire
                name="manufacturer"
                placeholder="Manufacturer"
                icon="draw"
                hints="Elster"
                :required="false"
            />
            <x-form.inputwire
                name="year"
                placeholder="Production Year"
                icon="year"
                hints="2008"
                :required="false"
            />
            <x-form.inputwire
                name="diameter"
                placeholder="Size/Diameter"
                icon="dia"
                hints='number only'
                :required="false"
            />
            <x-form.inputwire
                name="comments"
                placeholder="Comments (if any)"
                icon="comment"
                :required="false"
            />
            <x-form.submit-button
                form="createMeterForm"
                icon="plus"
                tag="Create"
            />
        </div>
    </div>
</form>
