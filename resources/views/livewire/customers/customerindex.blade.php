<div>
    <x-ui.topbar/>
    <x-customer.title :$viewStyle/>
    <x-form.search :$search/>
    <x-customer.cards
        :$viewStyle
        :$customers
    />
    <x-ui.pagination :items="$customers"/>
</div>
