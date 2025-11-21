<x-form.form-create
    wiresubmit="addLoadInfo"
    formId="addLoadInfoForm"
    :submitCondi="true"
    submitIcon="plus"
    submitTag="Add"
>
    <x-form.inputwire
        type="number"
        step="1"
        name="hourlyload"
        placeholder="Hourly Load (m<sup>3</sup>)"
        icon="hour"
        hints="Must be in Cubic Meter"
    />
    <div class="frow gap-2">
        <x-form.inputwire
            type="number"
            step="1"
            name="setpressure"
            placeholder="App Set Pressure (psig)"
            icon="pressure"
            hints="Must be in PSIG"
        />
        <x-form.inputwire
            type="number"
            step="0.05"
            name="diversityfactor"
            placeholder="Diversity Factor"
            icon="factor"
            hints=" number should be < 1"
        />
    </div>
    <div class="frow gap-2">
        <x-form.inputwire
            type="number"
            step="1"
            name="dailyrun"
            placeholder="Days of Month"
            icon="dates"
            hints="26 days/Month"
        />
        <x-form.inputwire
            type="number"
            step="1"
            name="hourlyrun"
            placeholder="Hours per Day"
            icon="hour"
            hints="8/12/16/24"
        />
    </div>
    <div class="frow gap-2">
        <x-form.inputwire
            name="monthlyload"
            placeholder="Monthly Load (m<sup>3</sup>)"
            icon="date"
            hints="Must be in Cubic Meter"
        />
        <x-form.inputwire
            name="minload"
            placeholder="Minimum Load (m<sup>3</sup>)"
            icon="min"
            hints="Must be in Cubic Meter"
        />
    </div>
</x-form.form-create>
