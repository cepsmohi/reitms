<div>
    <x-ui.topbar :$href/>
    <x-meter.create.buttons/>
    <x-ui.title title="Create Meter"/>
    <x-meter.create.form
        :$number
        :$type
        :$manufacturer
        :$model
        :$year
        :$diameter
        :$comments
    />
</div>
