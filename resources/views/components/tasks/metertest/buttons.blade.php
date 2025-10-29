<div class="frowe gap-2">
    <x-ui.app.calendar
        :$years :$syear
        :$months :$smonth
        :$days :$sday
        :$items
    />
    <x-ui.ahref
        :href="route('tasks.metertest.create')"
        icon="plus"
        width="w-10"
        title="Create Task"
    />
    <x-ui.ahref
        :href="route('tasks')"
        icon="back"
        width="w-10"
        title="to Dashboard"
    />
</div>
