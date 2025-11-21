<div class="title text-grad">{{ $customer->name }}</div>
<div class="stitle frows gap-2 group">
    <div>{{ $customer->code }}</div>
</div>
<div>{{ $customer->detail->address ?? 'No Address' }}</div>
