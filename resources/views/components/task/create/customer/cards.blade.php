<div class="frow flex-wrap gap-6">
    @forelse($customers as $customer)
        <x-customer.selectcard :$customer/>
    @empty
        <x-customer.cardnew/>
    @endforelse
</div>
