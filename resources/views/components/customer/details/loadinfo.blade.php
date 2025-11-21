@php
    $detail = $customer->detail;
@endphp
<div class="flex-grow mt-4">
    @if($detail->hourly_load || $detail->monthly_load || $detail->min_load)
        <div class="w-full stitle text-grad bg-purple-500/90 border-b-2 border-gray-500/50 pb-1">
            Load Information
        </div>
        @if($detail->hourly_load)
            <x-customer.details.loadinfo.row
                title="Load/hr"
                :value="bdn($detail->hourly_load,0) ?? ''"
                unit="m<sup>3</sup>/hr"
            />
        @endif
        @if($detail->monthly_load)
            <x-customer.details.loadinfo.row
                title="monthly/hr"
                :value="bdn($detail->monthly_load,0) ?? ''"
                unit="m<sup>3</sup>"
            />
        @endif
        @if($detail->min_load)
            <x-customer.details.loadinfo.row
                title="Monthly Minimum"
                :value="bdn($detail->min_load,0) ?? ''"
                unit="m<sup>3</sup>"
            />
        @endif
    @else
        <div class="mb-4 frows">
            <x-ui.ahreftag
                :href="route('customers.loadinfo', $customer)"
                icon="plus"
                tag="Load Information"
            />
        </div>
    @endif
</div>
