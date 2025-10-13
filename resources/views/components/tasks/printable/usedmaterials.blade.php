<div class="mt-4">
    <div class="title border-b">Used Materials</div>
    @php
        $materials = $task->materialstocks;
    @endphp
    @if($materials)
        <div class="frows flex-wrap gap-4">
            @foreach($materials as $materialStock)
                <div class="relative frows flex-wrap gap-2 group">
                    <x-ui.tagvalue
                        :tag="$materialStock->material->name"
                        :value="$materialStock->stock_out"
                        :unit="$materialStock->material->unit"
                    />
                </div>
            @endforeach
        </div>
    @endif
</div>
