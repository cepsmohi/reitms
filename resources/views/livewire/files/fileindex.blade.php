<div>
    <x-ui.topbar/>
    <x-file.index.buttons/>
    <x-ui.title title="Files"/>
    <x-form.search :$search/>
    <x-file.filterby :$filterBy/>
    <x-ui.pagination :items="$files"/>
    <x-file.cards :$files/>
    <x-ui.pagination :items="$files"/>
</div>
