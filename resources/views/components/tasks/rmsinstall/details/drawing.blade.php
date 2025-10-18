<div class="mt-4">
    <div class="stitle border-b">Drawings</div>
    @php
        $drawing = $task->drawing;
    @endphp
    @if($drawing)
        <div class="mt-2 frows flex-wrap gap-4">
            <div class="relative group">
                <div
                    class="block w-64 overflow-hidden rounded-2xl border-2"
                >
                    <iframe
                        src="{{ asset('uploads/'.$drawing->link) }}#toolbar=1"
                        allow="fullscreen"
                        class="w-full"
                    ></iframe>
                </div>
                @if($task->isReporting())
                    <div class="adbr hidden group-hover:flex">
                        <div
                            class="w-7 h-7 p-1 rounded-full border border-red-800 frow cursor-pointer bg-red-500 hover:bg-red-300 shadow">
                            <x-ui.awire
                                wireclick="deleteDrawing({{ $drawing->id }})"
                                icon="trash"
                            />
                        </div>
                    </div>
                @endif
            </div>
        </div>
        <div class="my-2 frows">
            <a
                href="{{ asset('uploads/'.$drawing->link) }}"
                target="_blank"
                class="alink text-green-500"
            >
                View Drawing
            </a>
        </div>
    @else
        @if($task->isReporting())
            <div class="mt-2">
                <x-ui.awiretag
                    wireclick="openDrawingForm"
                    icon="clip"
                    tag="Add Drawing"
                />
            </div>
        @endif
    @endif
</div>
@if($addDrawingForm)
    <x-tasks.adddrawingform :$drawings/>
@endif
@if($deleteDrawingForm)
    <x-tasks.deletedrawingform/>
@endif
