<div>
    <x-ui.topbar/>
    <x-meter.index.buttons/>
    <x-ui.title title="Meters List"/>
    <x-form.search :$search/>
    <x-ui.pagination
        :items="$meters"
        position="frows"
    />
    <x-meter.cards :$meters/>
    <x-ui.pagination
        :items="$meters"
        position="frowe"
    />
</div>
