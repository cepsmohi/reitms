<div>
    <x-ui.topbar/>
    <x-seal.index.buttons/>
    <x-seal.title title="Seals"/>
    <x-form.search :$search/>
    <x-ui.pagination :items="$seals"/>
    <x-seal.cards :$seals/>
    <x-ui.pagination :items="$seals"/>
</div>
