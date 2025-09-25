@if($viewStyle == 'card')
    <div class="frow flex-wrap gap-6">
        @forelse($customers as $customer)
            <x-customer.card :$customer/>
        @empty
            <x-customer.cardnew/>
        @endforelse
    </div>
@endif
