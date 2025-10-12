<div class="mt-4">
    <div class="stitle border-b">Used Materials</div>
    @php
        $materials = $task->materialstocks;
    @endphp
    @if($materials)
        <div class="mt-2 frows flex-wrap gap-4">
            @foreach($materials as $materialStock)
                <div class="relative frows flex-wrap gap-2 group">
                    <x-ui.tagvalue
                        :tag="$materialStock->material->name"
                        :value="$materialStock->stock_out"
                        :unit="$materialStock->material->unit"
                    />
                    @if($task->isReporting())
                        <div class="hidden group-hover:inline-block">
                            <div
                                class="w-7 h-7 p-1 rounded-full border border-red-800 frow cursor-pointer bg-red-500 hover:bg-red-300 shadow">
                                <x-ui.awire
                                    wireclick="deleteMaterial({{ $materialStock->id }})"
                                    icon="trash"
                                />
                            </div>
                        </div>
                    @endif
                </div>
            @endforeach
        </div>
    @endif
    @if($task->isReporting())
        <div class="mt-2">
            <x-ui.awiretag
                wireclick="openMaterialForm"
                icon="name"
                tag="Add Material"
            />
        </div>
    @endif
</div>
@if($addMaterialForm)
    <x-tasks.addmaterialform :$materialCode :$quantity/>
@endif
@if($deleteMaterialForm)
    <x-tasks.deletematerialform/>
@endif
