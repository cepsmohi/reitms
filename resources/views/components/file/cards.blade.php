<div class="my-4 frow flex-wrap gap-6 items-start">
    @forelse($files as $file)
        <x-file.card :$file/>
    @empty
        <x-file.cardnew/>
    @endforelse
</div>
