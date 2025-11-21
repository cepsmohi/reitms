<x-form.form-create
    wiresubmit="newlyCreateCustomer"
    formId="newlyCreateCustomerForm"
    :submitCondi="true"
    submitIcon="plus"
    submitTag="Create"
>
    <x-form.inputwirelive
        name="customercode"
        placeholder="Customer Code (if any)"
        icon="link"
        hints="x-xx-xxxxxx-xx-xx-x"
        pattern="formatByPattern(this, [1,2,6,2,2,1], '-')"
        :required="false"
    />
    @if($customercode != '' && $customers != null)
        <x-customer.list.items :$customers/>
    @endif
    @error('customername')
    <x-form.inputwire
        name="customername"
        placeholder="Customer Name"
        icon="name"
    />
    <x-form.inputwire
        name="address"
        placeholder="Address"
        icon="location"
        hints="Holding, Road, Location"
    />
    @enderror
</x-form.form-create>
