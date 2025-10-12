<div class="mt-4">
    @php
        $customer = $task->customer;
    @endphp
    <div><strong>Customer Code:</strong> {{ $customer->code }}</div>
    <div class="frows gap-2">
        <strong>Name:</strong>
        <x-ui.h3 :title="$customer->name"/>
    </div>
    @if($customer->detail)
        <div><strong>Address:</strong> {{ $customer->detail->address }}</div>
    @endif
</div>
