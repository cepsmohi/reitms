<div
    class="card buttonhover glass block h-52 group"
>
    <!-- Header -->
    <div class=" px-4 py-3 border-b border-gray-100 frowb group-hover:rounded-t-2xl">
        <div>
            <x-ui.h3 :title="$regulator->number"/>
        </div>
        <span
            @class([
                'px-2 py-1 text-xs rounded-full border',
                'bg-green-100 text-green-700' => $regulator->status == 'stock',
                'bg-yellow-100 text-yellow-700' => $regulator->status == 'installed',
                'bg-red-100 text-red-700' => $regulator->status == 'disorder'
            ])
        >
            {{ ucfirst($regulator->status) }}
        </span>
    </div>

    <!-- Body -->
    <div class="px-4 py-3 space-y-2 text-sm">
        @if($regulator->model)
            <p><strong>Model:</strong> {{ $regulator->model }}</p>
        @endif
        @if($regulator->manufacturer)
            <p><strong>Manufacturer:</strong> {{ $regulator->manufacturer }}</p>
        @endif
        @if($regulator->year)
            <p><strong>Prod Year:</strong> {{ $regulator->year }}</p>
        @endif
        @if($regulator->diaregulator)
            <p><strong>Size:</strong> {{ $regulator->diaregulator }}"∅</p>
        @endif
        @if($regulator->comments)
            <p><strong>Comments:</strong> {{ $regulator->comments }}</p>
        @endif
    </div>

    <!-- Footer / Actions -->
    <div class="adbr">
        <div class="text-[10px] text-gray-600">{{ $regulator->user->name }}</div>
        <x-ui.icon icon="user" padding="p-0" rounded="rounded-full" dark="" width="w-5"/>
    </div>
</div>
