<div class="fcols relative overflow-hidden">
    <div
        class="block w-64 overflow-hidden rounded-xl relative"
    >
        <iframe
            src="{{ asset('uploads/'.$file->link) }}"
            class="m-0 py-6 px-1 w-full border border-gray-500/50 rounded-xl"
            loading="lazy"
            allowfullscreen
        ></iframe>
        <div class="adtl m-1">
            <div
                @class([
                    'px-2 rounded-xl text-xs text-white',
                    'bg-green-400' => $file->tags == 'information',
                    'bg-red-400' => $file->tags == 'order',
                    'bg-orange-400' => $file->tags == 'report',
                    'bg-purple-400' => $file->tags == 'manual'
                ])
            >{{ $file->tags }}</div>
        </div>
        <div class="adbl m-1 px-1 w-full frowb gap-1 text-gray-500">
            <div class="w-3/4 text-[10px] truncate">{{ $file->customer ? $file->customer->name : '' }}</div>
            <div class="w-1/4 text-[10px]">{{ $file->published_at->format('Y-m-d') }}</div>
        </div>
    </div>
    <div class="px-1 pb-1 w-full truncate">{{ $file->name }}</div>
    <a
        href="{{ asset('uploads/'.$file->link) }}"
        target="_blank"
        class="absolute block h-full w-full"
    >
    </a>
    @can('admin', cusr())
        <div class="mt-2">
            <x-ui.awiretag
                wireclick="openPhotoForm"
                icon="photo"
                tag="Add Photos"
            />
        </div>
    @endcan
</div>
