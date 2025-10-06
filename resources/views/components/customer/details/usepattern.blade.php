<div class="grow mt-4 card p-2">
    <div class="w-full stitle text-grad bg-purple-500/90 border-b-2 border-gray-500/50 pb-1">
        Use Pattern
    </div>
    <x-customer.details.loadinfo.row
        title="Pressure Factor"
        :value="$detail->pf ?? ''"
        unit=""
    />
    <x-customer.details.loadinfo.row
        title="Pressure"
        :value="bdn((($detail->pf - 1)*14.73),0) ?? ''"
        unit="psig"
    />
    <x-customer.details.loadinfo.row
        title="Diversity Factor"
        :value="$detail->df ?? ''"
        unit=""
    />
    <x-customer.details.loadinfo.row
        title="Days/Month"
        :value="bdn($detail->daily_run,0) ?? ''"
        unit="d's/Mo"
    />
    <x-customer.details.loadinfo.row
        title="Hours/Day"
        :value="bdn($detail->hourly_run,0) ?? ''"
        unit="hrs/Dy"
    />
</div>
