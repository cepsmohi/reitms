<div class="py-1 print:hidden">
    <div class="w-full border-b font-bold">Drawing</div>
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
                        <x-ui.awire
                            wireclick="deleteDrawing({{ $drawing->id }})"
                            icon="trash"
                            color="bg-red-500/50 dark:bg-red-300/50 hover:bg-red-300/50"
                        />
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
        @else
            <div class="stitle text-red-500">Drawing not included</div>
        @endif
    @endif
</div>

