<div>
    <x-ui.topbar/>
    <x-tasks.metertest.buttons
        :$years :$syear
        :$months :$smonth
        :$days :$sday
        :items="$tasks"
        :$type
    />
    <x-ui.title title="Meter Testing"/>
    <div class="frows gap-2">{{ $title }}</div>
    <x-task.cards :$tasks/>
</div>
