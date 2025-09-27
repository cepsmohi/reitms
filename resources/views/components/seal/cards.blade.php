<div class="my-4 frow flex-wrap gap-6">
    @foreach($seals as $seal)
        <x-seal.card :$seal/>
    @endforeach
</div>
