let rmsLocationIcon = {
    radius: 4,
    fillColor: "#f00",
    color: "#f00",
    weight: 2,
    opacity: 0.7,
    fillOpacity: 0.7,
};

function onEachRmsLocationPointFeature(feature, layer) {
    let props = feature.properties;
    if (!props) return;

    let cusCode = props.cus_cd_if || props.cus_code;
    let gmapUrl = `https://www.google.com/maps?saddr=My+Location&daddr=${props.latitude},${props.longitude}`;

    let content = `
        <div class="min-w-[200px]">
            ${buildTitle(props.cus_name)}
            ${buildRow('', cusCode)}
            <br>
            <div class="text-xs">
                ${buildRow('Zone', props.zone)}
                ${buildRow('Fac Address', props.fac_addr)}
                ${buildRow('Bill Address', props.bill_add)}
                ${buildRow('RMS Image', props.Photograph)}
            </div>
            <br>
            ${buildRow('Survey By', props.enu_name)}
            ${buildRow('Date', props.date)}
            ${buildRow('Precision', props.precision)}
            <br>
            <div class="min-w-[200px] frows gap-2">
                ${buildRow('', props.longitude, '', true, '', 'direction', gmapUrl)}
            </div>
        </div>
    `;

    if (content.trim()) {
        layer.bindPopup(`<div>${content}</div>`, {
            closeButton: false,
            padding: 0,
        });
        layer.bindTooltip(props.cus_name);
    }

    layer.on('click', function (e) {
        let latlng = e.latlng;
        let precision = feature.properties.precision || 20; // in meters

        if (window.activePrecisionCircle) {
            map.removeLayer(window.activePrecisionCircle);
        }

        window.activePrecisionCircle = L.circle(latlng, {
            radius: precision, // in meters
            color: 'blue',
            fillColor: '#30f',
            fillOpacity: 0.3,
            weight: 1
        }).addTo(map);
    });
}

let rms_location_layer = new L.geoJSON(rms_location, {
    pointToLayer: function (feature, latlng) {
        return L.circleMarker(latlng, rmsLocationIcon);
    },
    onEachFeature: onEachRmsLocationPointFeature,
});
