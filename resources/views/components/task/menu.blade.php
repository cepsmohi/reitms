<div class="mt-6 frow flex-wrap gap-6">
    <x-ui.sqrbtn
        condi="1"
        header="RMS"
        footer="Install"
        :color="cssbg('green')"
        icon="rmsinstall"
        :href="route('tasks.rmsinstall')"
    />
    <x-ui.sqrbtn
        condi="1"
        header="RMS"
        footer="Maintenance"
        :color="cssbg('yellow')"
        icon="rmsrepair"
    />
    <x-ui.sqrbtn
        condi="1"
        header="RMS"
        footer="D/C or Layoff"
        :color="cssbg('red')"
        icon="layoff"
    />
</div>
