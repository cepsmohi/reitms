<div>
    <x-ui.topbar/>
    <x-customer.create.buttons/>
    <x-ui.title title="Create Customer"/>
    <x-customer.create.form
        :$customers
        :$customername
        :$customercode
        :$address
        :$zone
    />
</div>
