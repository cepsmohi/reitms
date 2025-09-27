<div>
    <x-ui.topbar/>
    <x-seal.buttons/>
    <x-seal.title title="Seals"/>
    <x-form.search :$search/>
    <x-seal.cards :$seals/>
    <x-ui.pagination :items="$seals"/>
</div>
