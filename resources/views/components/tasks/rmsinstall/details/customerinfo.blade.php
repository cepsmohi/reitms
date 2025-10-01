<div class="mt-4">
    <div><strong>Customer Code:</strong> {{ $customer->code }}</div>
    <div class="frows gap-2">
        <strong>Name:</strong>
        <x-ui.h3 :title="$customer->name"/>
    </div>
    <div><strong>Address:</strong> {{ $customer->address }}</div>
</div>
