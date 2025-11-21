<x-form.form-create
    wiresubmit="createTask"
    :submitCondi="true"
    submitFun="assignCustomer"
    formId="assignCustomerForm"
    submitIcon="refresh"
    submitTag="Assign"
>
    <div class="stitle mb-4">Select Customer</div>
    <x-form.inputwirelive
        name="customercode"
        placeholder="Customer Code (if any)"
        icon="link"
        hints="x-xx-xxxxxx-xx-xx-x"
        pattern="formatByPattern(this, [1,2,6,2,2,1], '-')"
        :required="false"
    />
    <x-customer.list :$customercode :$customers/>
</x-form.form-create>
