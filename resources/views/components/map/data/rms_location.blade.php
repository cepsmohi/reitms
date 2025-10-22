<div>
    @php
        $rms_location = json_decode(file_get_contents('mapdata/rms_location.geojson'), true);
    @endphp
    <script>
        var rms_location = @json($rms_location);
    </script>
    <script src="{{ asset('mapdata/layerFuns/rms_location.js') }}"></script>
</div>
