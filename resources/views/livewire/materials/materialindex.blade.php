<div>
    <x-ui.topbar/>
    <x-material.index.buttons/>
    <x-ui.title :title="'Materials '.$viewStyle"/>
    <x-form.search :$search/>
    <x-ui.pagination
        :items="$materials"
        position="frows"
    />
    <x-material.cards
        :$viewStyle
        :$materials
    />
    <x-ui.pagination
        :items="$materials"
        position="frowe"
    />
</div>
