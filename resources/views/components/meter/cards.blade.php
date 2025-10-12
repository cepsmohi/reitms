<div class="frow flex-wrap gap-6">
    @forelse($meters as $meter)
        <x-meter.card :$meter/>
    @empty
        <x-meter.cardnew/>
    @endforelse
</div>
