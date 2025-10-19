<div class="frow gap-1">
    @php
        $tagTexts = ['information', 'order', 'report', 'manual'];
    @endphp
    @foreach($tagTexts as $tagText)
        <div
            @class([
                'px-2 rounded-xl text-xs text-white cursor-pointer',
                'bg-green-200' => $tagText == 'information',
                'bg-green-400' => $filterBy == 'information',
                'bg-red-200' => $tagText == 'order',
                'bg-orange-200' => $tagText == 'report',
                'bg-purple-200' => $tagText == 'manual'
            ])
            wire:click="setFilterBy('{{ $tagText }}')"
        >{{ $tagText }}</div>
    @endforeach
</div>
