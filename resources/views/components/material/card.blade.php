<a
    class="card buttonhover glass block h-52 group"
    href="{{ route('materials.detail', $material) }}"
>
    <!-- Header -->
    <div class=" px-4 py-3 border-b border-gray-100 frowb group-hover:rounded-t-2xl">
        <div>
            <x-ui.h3 :title="$material->name"/>
        </div>
    </div>

    <!-- Body -->
    <div class="px-4 py-3 space-y-2 text-sm">
        <p class="text-xl text-grad">{{ $material->code }}</p>
        @if($material->stock == 0)
            <div class="frow text-red-500 text-3xl">Out of Stock</div>
        @else
            <div class="frow gap-2">
                <p class="text-3xl text-green-500 font-bold">{{ $material->stock }}</p>
                <p>{{ $material->unit }}</p>
            </div>
        @endif
    </div>

    <!-- Footer / Actions -->
    <div class="adbr">
        <div class="text-[10px] text-gray-600">{{ $material->user->name }}</div>
        <x-ui.icon icon="user" padding="p-0" rounded="rounded-full" dark="" width="w-5"/>
    </div>
</a>
