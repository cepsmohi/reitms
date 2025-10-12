<div>
    <x-ui.topbar :$href/>
    <x-regulator.create.buttons/>
    <x-ui.title title="Create Regulator"/>
    <x-regulator.create.form
        :$number
        :$manufacturer
        :$model
        :$year
        :$diameter
        :$comments
    />
</div>
