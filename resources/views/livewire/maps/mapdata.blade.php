<div>
    <x-map.data.rms_location/>
    <script src="
        {{ asset('js/mapload.js') }}?
        {{ filemtime(public_path('js/mapload.js')) }}
    "></script>
</div>
