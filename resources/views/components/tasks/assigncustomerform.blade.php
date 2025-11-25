@if($assignCustomerForm)
    <x-form.form-modal
        formCondition="assignCustomerForm"
        :submitCondition="true"
        submitFun="assignCustomer"
        formId="assignCustomerForm"
        formTitle="Select Customer"
        submitIcon="refresh"
        submitTag="Assign"
    >
        <div class="stitle mb-4">Select Customer</div>
        <div class="relative">
            <x-form.inputwirelive
                name="customercode"
                placeholder="Customer Code (if any)"
                icon="link"
                hints="x-xx-xxxxxx-xx-xx-x"
                pattern="formatByPattern(this, [1,2,6,2,2,1], '-')"
                :required="false"
            />
            <x-customer.list.items
                :$customers
            />
        </div>
    </x-form.form-modal>
@endif
