<div class="relative group">
    <a
        href="{{ asset('storage/'.$photo->link) }}"
        target="_blank"
        class="block w-64 h-48 overflow-hidden rounded-2xl border-2"
    >
        <img
            class="object-cover w-64 h-48"
            src="{{ asset('storage/'.$photo->link) }}"
            alt=""
        />
    </a>
</div>
