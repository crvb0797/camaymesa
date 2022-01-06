const tilesProvider = 'https://cartodb-basemaps-{s}.global.ssl.fastly.net/dark_all/{z}/{x}/{y}.png';

/* 'https://cartodb-basemaps-{s}.global.ssl.fastly.net/dark_all/{z}/{x}/{y}.png'; */

let myMap = L.map('myMap', {
    center: [14.606584, -90.522003],
    zoom: 800,
    scrollWheelZoom: false,
}).setView([14.606584, -90.522003], 13)

let map = L.tileLayer(tilesProvider, {
    maxZoom: 18,
}).addTo(myMap)

let iconMarker = L.icon({
    iconUrl: "https://image.flaticon.com/icons/png/512/4634/4634790.png",
    iconSize: [60, 60],
    iconAnchor: [30, 60]
})

let marker2 = L.marker([14.606584, -90.522003], {icon: iconMarker}).addTo(myMap)

