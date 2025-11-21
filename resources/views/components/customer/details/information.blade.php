<div class="mt-4">
    <x-customer.basicinfo :$customer/>
    @if($customer->detail)
        <div class="frow gap-2 md:gap-4 flex-wrap items-stretch">
            <x-customer.details.loadinfo :$customer/>
            <x-customer.details.usepattern :$customer/>
        </div>
    @endif
</div>
