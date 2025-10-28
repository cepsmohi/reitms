// Zoom Control
L.control.zoom({
    position: 'topleft'
}).addTo(map);


// geo location
L.geolet({
    position: "topleft",
}).addTo(map);

// box zoom
L.Control.boxzoom({
    position: "topleft",
}).addTo(map);

// polyline measure
L.control.polylineMeasure(options)
    .addTo(map);

// North arrow
var north = L.control({
    position: "topright",
});
north.onAdd = function () {
    var div = L.DomUtil.create("div", "info legend");
    div.innerHTML =
        '<img src="/images/icon/northarrow.svg" style="width: 70px;" alt="north">';
    return div;
};
north.addTo(map);

// scale
L.control.scale({
    maxWidth: 200,
    metric: true,
    imperial: true,
    position: 'bottomleft',
}).addTo(map);
