<div>
    <x-ui.topbar/>
    <x-ui.h1 :title="'Customers '.$viewStyle"/>
    <x-form.search :$search/>
    <x-customer.cards
        :$viewStyle
        :$customers
    />
    <x-ui.pagination :items="$customers"/>
</div>
