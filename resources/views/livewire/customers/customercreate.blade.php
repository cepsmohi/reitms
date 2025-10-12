<div>
    <x-ui.topbar :$href/>
    <x-customer.create.buttons/>
    <x-ui.title title="Create Customer"/>
    <x-customer.create.form
        :$name
        :$code
        :$address
        :$zone
    />
</div>
