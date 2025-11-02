<div
    class="card buttonhover glass block h-52 group"
>
    <!-- Header -->
    <div class=" px-4 py-3 border-b border-gray-100 frowb group-hover:rounded-t-2xl">
        <div>
            <x-ui.h3 :title="$meter->number"/>
        </div>
        <span
            @class([
                'px-2 py-1 text-xs rounded-full border',
                'bg-green-100 text-green-700' => $meter->status == 'stock',
                'bg-yellow-100 text-yellow-700' => $meter->status == 'installed',
                'bg-red-100 text-red-700' => $meter->status == 'disorder'
            ])
        >
            {{ ucfirst($meter->status) }}
        </span>
    </div>

    <!-- Body -->
    <div class="px-4 py-3 space-y-2 text-sm">
        <p><strong>Type:</strong> {{ $meter->type }}</p>
        @if($meter->material_id)
            <p><strong>Material Code:</strong> {{ $meter->material->code }}</p>
        @endif
        @if($meter->model)
            <p><strong>Model:</strong> {{ $meter->model }}</p>
        @endif
        @if($meter->manufacturer)
            <p><strong>Manufacturer:</strong> {{ $meter->manufacturer }}</p>
        @endif
        @if($meter->production_year)
            <p><strong>Prod Year:</strong> {{ $meter->production_year }}</p>
        @endif
        @if($meter->diameter)
            <p><strong>Size:</strong> {{ $meter->diameter }}"∅</p>
        @endif
        @if($meter->comments)
            <p><strong>Comments:</strong> {{ $meter->comments }}</p>
        @endif
    </div>

    <!-- Footer / Actions -->
    <div class="adbr">
        <div class="text-[10px] text-gray-600">{{ $meter->user->name }}</div>
        <x-ui.icon icon="user" padding="p-0" rounded="rounded-full" dark="" width="w-5"/>
    </div>
</div>
