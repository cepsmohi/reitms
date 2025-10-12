<div class="frowe gap-2">
    <x-ui.app.calendar
        :$years :$syear
        :$months :$smonth
        :$days :$sday
        :$items
    />
    <div class="frowe gap-2">
        <x-ui.awire
            wireclick="$toggle('addMivForm')"
            icon="plus"
            title="Entry MIV"
            width="w-10"
        />
        <x-ui.ahref
            :href="route('materials')"
            icon="back"
            width="w-10"
            title="to Material List"
        />
    </div>
</div>
