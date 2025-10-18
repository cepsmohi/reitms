<div class="fcols relative border hover:border-green-400 rounded-2xl overflow-hidden">
    <div
        class="block w-64 overflow-hidden"
    >
        <iframe
            src="{{ asset('uploads/'.$file->link) }}#toolbar=1"
            allow="fullscreen"
            class="w-full"
        ></iframe>
    </div>
    <div class="adtr">
        <div class="px-2 bg-gray-400 rounded-xl text-xs text-white">{{ $file->tags }}</div>
    </div>
    <div class="pt-1 px-1 w-full frowb gap-1 text-gray-500">
        <div class="w-3/4 text-[10px] truncate"></div>
        <div class="w-1/4 text-[10px]">{{ $file->published_at->format('Y-m-d') }}</div>
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
