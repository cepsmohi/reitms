<div class="flex-grow mt-4 card p-2">
    <div class="w-full stitle text-grad bg-purple-500/90 border-b-2 border-gray-500/50 pb-1">
        Load Information
    </div>
    <x-customer.details.loadinfo.row
        title="Load/hr"
        :value="bdn($detail->hourly_load,0) ?? ''"
        unit="m<sup>3</sup>/hr"
    />
    <x-customer.details.loadinfo.row
        title="monthly/hr"
        :value="bdn($detail->monthly_load,0) ?? ''"
        unit="m<sup>3</sup>"
    />
    <x-customer.details.loadinfo.row
        title="Monthly Minimum"
        :value="bdn($detail->min_load,0) ?? ''"
        unit="m<sup>3</sup>"
    />
</div>
