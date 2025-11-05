@teleport('body')
<x-form.form-modal
    formCondition="editCustomerCodeForm"
    :submitCondition="true"
    submitFun="updateCustomerCode"
    formId="editCustomerCodeForm"
    formTitle="Edit Customer Code"
>
    <x-form.inputwire
        name="customercode"
        placeholder="Customer Code (if any)"
        icon="link"
        hints="x-xx-xxxxxx-xx-xx-x"
        pattern="formatByPattern(this, [1,2,6,2,2,1])"
        :required="false"
    />
</x-form.form-modal>
@teleport('body')
