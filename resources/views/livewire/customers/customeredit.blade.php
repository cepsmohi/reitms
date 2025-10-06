<div>
    <x-ui.topbar/>
    <x-customer.details.buttons/>
    <x-ui.title title="Customers Details"/>
    <x-customer.details.information
        :$customer
        :$editCustomerCodeForm
        :$customerCode
    />
    <x-customer.details.tasklist :$customer/>
</div>
