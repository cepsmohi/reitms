@if($detail->pf || $detail->df || $detail->daily_run || $detail->hourly_run)
    <div class="grow mt-4 card p-2">
        <div class="w-full stitle text-grad bg-purple-500/90 border-b-2 border-gray-500/50 pb-1">
            Use Pattern
        </div>
        @if($detail->pf)
            <x-customer.details.loadinfo.row
                title="Pressure Factor"
                :value="$detail->pf"
                unit=""
            />
        @endif
        @if($detail->pf)
            <x-customer.details.loadinfo.row
                title="Pressure"
                :value="bdn((($detail->pf - 1)*14.73),0) ?? ''"
                unit="psig"
            />
        @endif
        @if($detail->df)
            <x-customer.details.loadinfo.row
                title="Diversity Factor"
                :value="$detail->df"
                unit=""
            />
        @endif
        @if($detail->daily_run)
            <x-customer.details.loadinfo.row
                title="Days/Month"
                :value="bdn($detail->daily_run,0) ?? ''"
                unit="d's/Mo"
            />
        @endif
        @if($detail->hourly_run)
            <x-customer.details.loadinfo.row
                title="Hours/Day"
                :value="bdn($detail->hourly_run,0) ?? ''"
                unit="hrs/Dy"
            />
        @endif
    </div>
@endif
