<div class="py-1">
    <div class="w-full border-b font-bold">অপসারিত মালামালের বিবরণ</div>
    @php
        $materials = $task->materialstocksin;
    @endphp
    @if($materials->count() > 0)
        <div class="my-1 fcols">
            @foreach($materials as $materialStock)
                <div class="relative frows flex-wrap gap-2 group">
                    <div>{{ $loop->iteration }}</div>
                    <x-ui.tagvalue
                        :tag="$materialStock->material->name"
                        :value="$materialStock->stock_in"
                        :unit="$materialStock->material->unit"
                    />
                    @if($task->isReporting())
                        <div class="hidden absolute right-0 group-hover:inline-block">
                            <x-ui.awire
                                wireclick="deleteMaterial({{ $materialStock->id }})"
                                icon="trash"
                                color="bg-red-500/50 dark:bg-red-300/50 hover:bg-red-300/50"
                                width="w-5"
                            />
                        </div>
                    @endif
                </div>
            @endforeach
        </div>
    @endif
    @if($task->isReporting())
        <div class="my-1">
            <x-ui.awiretag
                wireclick="$toggle('addMaterialOutForm')"
                icon="name"
                tag="Remove Material"
            />
        </div>
    @endif
    @if($materials->count() == 0 && !$task->isReporting())
        <div>অপসারিত মালামালের তালিকা পূরণ করা হয়নি</div>
    @endif
</div>

