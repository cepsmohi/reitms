<div
    id="map"
    class="w-full h-[calc(100dvh-81px)] relative z-40"
>
</div>
<script src="{{ asset('js/mapinit.js') }}?{{ filemtime(public_path('js/mapinit.js')) }}"></script>
<livewire:maps.basemap/>
<livewire:maps.mapdata/>
<x-map.plugins/>
