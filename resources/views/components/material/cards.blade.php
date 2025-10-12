@if($viewStyle == 'card')
    <div class="frow flex-wrap gap-6">
        @forelse($materials as $material)
            <x-material.card :$material/>
        @empty
            <x-material.cardnew/>
        @endforelse
    </div>
@endif
