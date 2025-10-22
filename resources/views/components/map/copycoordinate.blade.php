<div>
    <div
        id="copyCoordinatesFullDiv"
        class="hidden"
    >
        <div class="frows gap-2">
            <div
                @class([
                    'px-2 py-1 text-xs whitespace-nowrap rounded-full bg-gray-50',
                    'frows gap-2',
                    'shadow-inner'
                ])
                id="copiedCoordinates"
            >
                Copied!! Coordinates
            </div>
        </div>
    </div>
    <script>
        map.on("click", function (e) {
            let coordinates = ((e.latlng.lat).toFixed(6) + ", " + (e.latlng.lng).toFixed(6));
            navigator.clipboard.writeText(coordinates);
            document.getElementById('copyCoordinatesFullDiv').style.display = 'block';
            document.getElementById('copiedCoordinates').innerHTML = 'Copied!! ' + coordinates;
            setTimeout(function () {
                document.getElementById('copyCoordinatesFullDiv').style.display = 'none';
            }, 5000);
        });
    </script>
</div>
