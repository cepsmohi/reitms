<div class="frowe gap-2">
    <x-ui.app.calendar
        :$years :$syear
        :$months :$smonth
        :$days :$sday
        :$items
    />
    <div class="frowe gap-2">
        <x-ui.ahref
            :href="route('tasks.create', ['type' => 'rms install'])"
            icon="plus"
            width="w-10"
            title="Add Seals"
        />
        <x-ui.ahref
            :href="route('tasks')"
            icon="back"
            width="w-10"
            title="to Dashboard"
        />
    </div>
</div>
