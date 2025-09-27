@php
    use App\Models\Customer;
    $customers_count = Customer::all()->count();
@endphp
<x-ui.sqrbtn
    condi="1"
    header="Customers"
    :footer="$customers_count"
    :color="cssbg('orange')"
    icon="industry"
    :href="route('customers')"
/>
