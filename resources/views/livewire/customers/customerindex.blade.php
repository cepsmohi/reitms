<div>
    <x-ui.topbar/>
    <x-customer.index.buttons/>
    <x-customer.title :title="'Customers '.$viewStyle"/>
    <x-form.search :$search/>
    <x-customer.cards
        :$viewStyle
        :$customers
    />
    <x-ui.pagination :items="$customers"/>
</div>
