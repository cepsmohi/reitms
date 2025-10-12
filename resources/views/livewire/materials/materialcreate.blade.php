<div>
    <x-ui.topbar :$href/>
    <x-material.create.buttons/>
    <x-ui.title title="Create Material"/>
    <x-material.create.form
        :$name
        :$code
        :$unit
    />
</div>
