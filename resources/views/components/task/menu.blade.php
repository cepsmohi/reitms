<div class="mt-6 frow flex-wrap gap-6">
    <x-ui.sqrbtn
        condi="1"
        header="Install"
        footer="New RMS"
        :color="cssbg('green')"
        icon="rmsinstall.png"
        :href="route('tasks.rmsinstall')"
    />
    <x-ui.sqrbtn
        condi="1"
        header="Maintenance"
        footer="RMS"
        :color="cssbg('yellow')"
        icon="rmsrepair.png"
    />
    <x-ui.sqrbtn
        condi="1"
        header="D/C or"
        footer="Layoff"
        :color="cssbg('red')"
        icon="layoff.png"
    />
</div>
<div class="mt-6 frow flex-wrap gap-6">
    <x-ui.sqrbtn
        condi="1"
        header="Meter"
        footer="Testing"
        :color="cssbg('purple')"
        icon="metertesting.png"
        href="#"
    />
</div>
