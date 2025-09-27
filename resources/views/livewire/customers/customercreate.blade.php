<div>
    <x-ui.topbar/>
    <x-customer.create.buttons/>
    <x-customer.title title="Create Customer"/>
    <x-customer.create.form
        :$name
        :$code
        :$address
    />
</div>
