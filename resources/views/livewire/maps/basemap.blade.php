<div x-data="{ isOpen:false }">
    @script
    <script>
        $wire.on('updateBaseMapJs', () => {
            L.tileLayer($wire.baseMap, {maxZoom: 22}).addTo(map);
        });
    </script>
    @endscript
    <x-map.basemap :$baseMapTitle/>
</div>
