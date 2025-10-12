<div class="mt-4">
    <div class="stitle border-b">Photos</div>
    @php
        $pics = $task->photos;
    @endphp
    @if($pics)
        <div class="mt-2 frows flex-wrap gap-4">
            @foreach($pics as $photo)
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
                    @if($task->isReporting())
                        <div class="adbr hidden group-hover:flex">
                            <div
                                class="w-7 h-7 p-1 rounded-full border border-red-800 frow cursor-pointer bg-red-500 hover:bg-red-300 shadow">
                                <x-ui.awire
                                    wireclick="deletePhoto({{ $photo->id }})"
                                    icon="trash"
                                />
                            </div>
                        </div>
                    @endif
                </div>
            @endforeach
        </div>
        @if($task->isReporting())
            <div class="mt-2">
                <x-ui.awiretag
                    wireclick="openPhotoForm"
                    icon="photo"
                    tag="Add Photos"
                />
            </div>
        @endif
    @endif
</div>
@if($addPhotoForm)
    <x-tasks.addphotoform :$photos/>
@endif
@if($deletePhotoForm)
    <x-tasks.deletephotoform/>
@endif
