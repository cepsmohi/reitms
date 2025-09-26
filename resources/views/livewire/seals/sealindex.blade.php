<div>
    <x-ui.topbar/>
    <x-seal.title title="Seals"/>
    <x-seal.buttons/>
    <x-form.search :$search/>
    <x-seal.cards :$seals/>
    <x-ui.pagination :items="$seals"/>
</div>
