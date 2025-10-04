<div>
    <x-ui.topbar/>
    <x-tasks.rmsinstall.buttons
        :$years :$syear
        :$months :$smonth
        :$days :$sday
        :items="$tasks"
    />
    <x-ui.title title="RMS Installation"/>
    <div class="frows gap-2">{{ $title }}</div>
    <x-task.cards :$tasks/>
</div>
