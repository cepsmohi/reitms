<div class="py-1 print:hidden">
    <div class="w-full border-b font-bold">Gatepass</div>
    @php
        $gatepass = $task->gatepass;
    @endphp
    @if($gatepass)
        <div class="mt-2 frows flex-wrap gap-4">
            <div class="relative group">
                <div
                    class="block w-64 overflow-hidden rounded-2xl border-2"
                >
                    <iframe
                        src="{{ asset('uploads/'.$gatepass->link) }}#toolbar=1"
                        allow="fullscreen"
                        class="w-full"
                    ></iframe>
                </div>
                @if($task->isReporting())
                    <div class="adbr hidden group-hover:flex">
                        <x-ui.awire
                            wireclick="deleteGatepass({{ $gatepass->id }})"
                            icon="trash"
                            color="bg-red-500/50 dark:bg-red-300/50 hover:bg-red-300/50"
                        />
                    </div>
                @endif
            </div>
        </div>
        <div class="my-2 frows">
            <a
                href="{{ asset('uploads/'.$gatepass->link) }}"
                target="_blank"
                class="alink text-green-500"
            >
                View Gatepass
            </a>
        </div>
    @else
        @if($task->isReporting())
            <div class="mt-2">
                <x-ui.awiretag
                    wireclick="openGatepassForm"
                    icon="clip"
                    tag="Add Gatepass"
                />
            </div>
        @else
            <div class="stitle text-red-500">Gatepass not included</div>
        @endif
    @endif
</div>

