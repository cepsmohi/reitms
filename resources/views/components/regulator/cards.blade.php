<div class="frow flex-wrap gap-6">
    @forelse($regulators as $regulator)
        <x-regulator.card :$regulator/>
    @empty
        <x-regulator.cardnew/>
    @endforelse
</div>
