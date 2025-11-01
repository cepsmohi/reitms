<div class="py-1">
    <div class="w-full border-b font-bold">Photos</div>
    @php
        $pics = $task->photos;
    @endphp
    @if($pics->count() > 0)
        <div class="my-2 frows flex-wrap gap-2">
            @forelse($pics as $photo)
                <div class="relative group">
                    <a
                        href="{{ asset('uploads/'.$photo->link) }}"
                        target="_blank"
                        class="block w-64 h-48 overflow-hidden rounded-2xl border-2"
                    >
                        <img
                            class="object-cover w-64 h-48"
                            src="{{ asset('uploads/'.$photo->link) }}"
                            alt=""
                        />
                    </a>
                    @if($task->isReporting())
                        <div class="adbr hidden group-hover:flex">
                            <x-ui.awire
                                wireclick="deletePhoto({{ $photo->id }})"
                                icon="trash"
                                color="bg-red-500/50 dark:bg-red-300/50 hover:bg-red-300/50"
                            />
                        </div>
                    @endif
                </div>
            @empty
                @if(!$task->isReporting())
                    <div class="stitle text-red-500">No photo added</div>
                @endif
            @endforelse
        </div>
    @endif
    @if($task->isReporting())
        <div class="my-1">
            <x-ui.awiretag
                wireclick="$toggle('addPhotoForm')"
                icon="photo"
                tag="Add Photos"
            />
        </div>
    @endif
</div>
