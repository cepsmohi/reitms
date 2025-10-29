<div>
    <x-ui.topbar/>
    <x-tasks.common.buttons
        :$years :$syear
        :$months :$smonth
        :$days :$sday
        :items="$tasks"
        :$type
    />
    <x-ui.title title="RMS Maintenance"/>
    <div class="frows gap-2">{{ $title }}</div>
    <x-task.cards :$tasks/>
</div>
