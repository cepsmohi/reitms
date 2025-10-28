function shortLatLng(x) {
    return x.lat.toFixed(6) + ', ' + x.lng.toFixed(6);
}

function searchLocation(lat, lng, tooltip = 'Location') {
    localStorage.setItem('mapCenterLat', lat);
    localStorage.setItem('mapCenterLng', lng);

    let zoom = Number(localStorage.getItem("zoomLevel")) || map.getZoom() || 10;

    map.flyTo([lat, lng], zoom);

    if (window.searchMarker) {
        map.removeLayer(window.searchMarker);
    }

    let marker = L.marker([lat, lng]).bindTooltip(tooltip);

    window.searchMarker = marker;

    marker.addTo(map);
}

function searchDistrict(name) {
    if (window.highlightedDistrict) {
        map.removeLayer(window.highlightedDistrict);
    }
    let feature = districts.features.find(f => f.properties.DISTNAME === name);
    if (!feature) return;
    let districtLayer = L.geoJSON(feature, {
        style: {
            color: '#87CEEB',
            weight: 2,
            fillOpacity: 0.2
        }
    }).addTo(map);
    map.fitBounds(districtLayer.getBounds());
    window.highlightedDistrict = districtLayer;
}

function searchUpazila(name) {
    if (window.highlightedUpazila) {
        map.removeLayer(window.highlightedUpazila);
    }
    let feature = upazilas.features.find(f => f.properties.THANAME === name);
    if (!feature) return;
    let upazilaLayer = L.geoJSON(feature, {
        style: {
            color: '#87CEEB',
            weight: 2,
            fillOpacity: 0.2
        }
    }).addTo(map);
    map.fitBounds(upazilaLayer.getBounds());
    window.highlightedUpazila = upazilaLayer;
}

function buildTitle(value, suffix = "") {
    if (!value) return "";
    return `<div class="w-full stitle border-b">${value} ${suffix}</div>`;
}

function buildRow(label = "", value, suffix = "", isLink = false, url = "", icon = "", aurl = "", target) {
    if (!value) return "";

    const href = aurl || (url ? url + value : null);

    if (isLink && href) {
        const content = icon
            ? `<img title="${icon}" src="images/icon/${icon}.svg" alt="${label}" class="w-10" />`
            : suffix || value;

        const targetAttr = target ? "" : ` target="${target}"`;

        return `
        <div class="frows gap-2 items-center">
            <span class="font-bold">${label}</span>
            <a href="${href}" ${targetAttr}>${content}</a>
        </div>`;
    }

    return `
    <div class="frows gap-2">
        <span class="font-bold whitespace-nowrap">${label}</span>
        ${value} ${suffix}
    </div>`;
}


function getColorByDia(x) {
    let num = parseFloat(x);
    if (isNaN(num) || num === 0) {
        return "#000000";
    }
    return "#" + linecolors[num.toFixed(2)];
}

function getWeightByDia(x) {
    let num = parseFloat(x);
    return num > 20 ? 4 : num > 8 ? 3 : 2;
}

function getDashByDiaStatus(x, y) {
    let num = parseFloat(x);
    let status;
    if (y != null) {
        status = y.toLowerCase();
    }
    if (status === 'proposed') {
        return "10 10";
    } else if (num <= 0.75 && num > 0) {
        return "6 6";
    } else {
        return "";
    }
}

let colorPalette = [
    '#1f77b4', '#ff7f0e', '#2ca02c', '#d62728', '#9467bd',
    '#8c564b', '#e377c2', '#7f7f7f', '#bcbd22', '#17becf',
    '#393b79', '#637939', '#8c6d31', '#843c39', '#7b4173',
    '#6b6ecf', '#b5cf6b', '#cedb9c', '#9c9ede', '#e7cb94',
    '#ffbb78', '#98df8a', '#ff9896', '#c5b0d5', '#c49c94',
    '#f7b6d2', '#c7c7c7', '#dbdb8d', '#9edae5', '#5254a3',
    '#8ca252', '#bd9e39', '#ad494a', '#a55194', '#6b6ecf',
    '#bca9d4', '#cedb9c', '#e7969c', '#e7cb94', '#7f7f7f',
    '#aec7e8', '#ffbb78', '#98df8a', '#ff9896', '#c5b0d5',
    '#c49c94', '#f7b6d2', '#dbdb8d', '#9edae5', '#17becf'
];

let selectedLayer = null;

