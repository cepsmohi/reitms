<div class="mt-4">
    <div class="stitle border-b">Installed Meter</div>
    @if($task->hasMeter())
        <div class="frows gap-2">
            <div class="font-bold">Serial Number</div>
            <x-ui.vline/>
            <div>0987654</div>
        </div>
        <div class="frows gap-2">
            <div class="font-bold">Type</div>
            <x-ui.vline/>
            <div>G-16</div>
        </div>
        <div class="frows gap-2">
            <div class="font-bold">Manufacturer</div>
            <x-ui.vline/>
            <div>Pietro Fiorentini</div>
        </div>
        <div class="frows gap-2">
            <div class="font-bold">Year of Production</div>
            <x-ui.vline/>
            <div>2022</div>
        </div>
        <div class="frows gap-2">
            <div class="font-bold">EVC Number (If any)</div>
            <x-ui.vline/>
            <div>23435434545</div>
        </div>
        <div class="frows gap-2">
            <div class="font-bold">Initial Mech Reading</div>
            <x-ui.vline/>
            <div>002198</div>
        </div>
        <div class="frows gap-2">
            <div class="font-bold">Initial EVC Reading</div>
            <x-ui.vline/>
            <div>Vb</div>
            <div>Vm</div>
            <div>VbT</div>
            <div>VmT</div>
        </div>
    @else
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
    @endif
</div>
