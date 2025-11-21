<div
    wire:loading.remove
    wire:target="{{ $wireclick }}"
>
    <x-ui.icon :icon="$icon"/>
</div>
<x-ui.loading :$wireclick/>
