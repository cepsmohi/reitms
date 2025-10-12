<x-ui.sqrbtn
    condi="1"
    header="Materials"
    footer="Inventory"
    :color="cssbg('indigo')"
    icon="materials.png"
    :href="route('materials')"
/>
@php
    use App\Models\Meter;
    $meters_count = Meter::all()->count();
@endphp
<x-ui.sqrbtn
    condi="1"
    header="Meters"
    :footer="$meters_count"
    :color="cssbg('orange')"
    icon="meter.png"
    :href="route('meters')"
/>
@php
    use App\Models\Regulator;
    $regulators_count = Regulator::all()->count();
@endphp
<x-ui.sqrbtn
    condi="1"
    header="Regulators"
    :footer="$regulators_count"
    :color="cssbg('fuchsia')"
    icon="regulator.png"
    :href="route('regulators')"
/>
