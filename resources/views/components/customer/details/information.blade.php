<div class="mt-4">
    <div class="title text-grad">{{ $customer->name }}</div>
    <div class="stitle frows gap-2 group">
        <div>{{ $customer->code }}</div>
        <div class="hidden group-hover:flex">
            <x-ui.awire
                wireclick="$toggle('editCustomerCodeForm')"
                icon="edit"
                title="Edit Customer Code"
                width="w-5"
            />
        </div>
        @if($editCustomerCodeForm)
            <x-customer.details.forms.customercode
                :$customerCode
            />
        @endif
    </div>
    <div class="">{{ $customer->address }}</div>
    @php
        $detail = $customer->detail->first();
    @endphp
    @if($detail)
        <div class="frow gap-2 md:gap-4 flex-wrap items-stretch">
            <x-customer.details.loadinfo :$detail/>
            <x-customer.details.usepattern :$detail/>
        </div>
    @endif
</div>
