<div>
    <x-ui.topbar/>
    <div class="frowe gap-2">
        <x-ui.app.calendar
            :$years :$syear
            :$months :$smonth
            :$days :$sday
            :items="$tasks"
        />
        <x-tasks.rmsinstall.buttons/>
    </div>
    <x-ui.title title="RMS Installation"/>
    <div class="frows gap-2">{{ $title }}</div>
    <x-task.cards :$tasks/>
</div>
