@php
    use App\Models\Seal;
    $seal_count = Seal::all()->count();
@endphp
<x-ui.sqrbtn
    condi="1"
    header="Seals"
    :footer="$seal_count"
    :color="cssbg('green')"
    icon="seal"
    :href="route('customers')"
/>
