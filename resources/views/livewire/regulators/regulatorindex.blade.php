<div>
    <x-ui.topbar/>
    <x-regulator.index.buttons/>
    <x-ui.title title="Regulators List"/>
    <x-form.search :$search/>
    <x-ui.pagination
        :items="$regulators"
        position="frows"
    />
    <x-regulator.cards :$regulators/>
    <x-ui.pagination
        :items="$regulators"
        position="frowe"
    />
</div>
