<div class="my-4 frow flex-wrap gap-6">
    @forelse($seals as $seal)
        <x-seal.card :$seal/>
    @empty
        <x-seal.cardnew/>
    @endforelse
</div>
