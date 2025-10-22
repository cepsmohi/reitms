const overlayMaps = {
    'Customers Locations': rms_location_layer,
};

let activeOverlays = JSON.parse(localStorage.getItem('activeOverlays')) || [];

for (const [name, layer] of Object.entries(overlayMaps)) {
    if (activeOverlays.includes(name)) {
        layer.addTo(map);
    }
}

L.control.layers(null, overlayMaps, {
    collapsed: true,
    position: "bottomright",
    hideSingleBase: true
}).addTo(map);

map.on('overlayadd', e => {
    const name = e.name;
    const layer = e.layer;
    if (!activeOverlays.includes(name)) {
        activeOverlays.push(name);
        localStorage.setItem('activeOverlays', JSON.stringify(activeOverlays));
    }
});

map.on('overlayremove', e => {
    activeOverlays = activeOverlays.filter(name => name !== e.name);
    localStorage.setItem('activeOverlays', JSON.stringify(activeOverlays));
});

map.whenReady(() => {
    const overlayLabels = document.querySelectorAll('.leaflet-control-layers-overlays label');
    overlayLabels.forEach(label => {
        const input = label.querySelector('input[type="checkbox"]');
        const layerName = label.textContent.trim();
        if (input && layerName) {
            const id = 'overlay-' + layerName.toLowerCase().replace(/\s+/g, '-').replace(/[^\w-]/g, '');
            input.id = id;
            label.htmlFor = id;
        }
    });
});
