let browserWarning = localStorage.getItem("browserWarning") || false;
if (!(L.Browser.chrome) && !browserWarning) {
    Swal.fire({
        icon: 'error',
        title: 'Warning!',
        text: 'For better performance please use chrome browser.',
        timer: 3000,
        showConfirmButton: false
    });
    localStorage.setItem("browserWarning", true);
}

let latitude,
    longitude,
    zoom,
    marker;

latitude = Number(localStorage.getItem("mapCenterLat")) || 23.759267;
longitude = Number(localStorage.getItem("mapCenterLng")) || 90.390358;
zoom = Number(localStorage.getItem("zoomLevel")) || 10;
marker = localStorage.getItem("mapMarker") || null;

let map = L.map("map", {
    zoomControl: false,
    attributionControl: false
}).setView([latitude, longitude], zoom);

if (marker) {
    let tooltip = localStorage.getItem("toolTip") || latitude + '. ' + longitude;
    if (window.searchMarker) {
        map.removeLayer(window.searchMarker);
    }
    let marker = L.marker([latitude, longitude]).bindTooltip(tooltip);
    window.searchMarker = marker;
    marker.addTo(map);
    localStorage.removeItem("mapMarker");
}


let tempHighlightLayers = [];
let totalLength = 0;
map.on("click", function () {
    tempHighlightLayers.forEach(l => map.removeLayer(l));
    tempHighlightLayers = [];
});
