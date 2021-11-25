@extends('layouts.admin')


@section('content')
<div class="card">
    <div class="card-body m-1" id="mapid"></div>
</div>
@endsection

@section('styles')
<x-leaflet></x-leaflet>
<link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.4.1/dist/MarkerCluster.css" />
<link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.4.1/dist/MarkerCluster.Default.css" />

<style>
    #mapid { height: 85vh; }
</style>

@endsection

@section('scripts')

<script src="https://unpkg.com/leaflet.markercluster@1.4.1/dist/leaflet.markercluster.js"></script>

<script>
    var map = L.map('mapid').setView([{{ config('leaflet.map_center_latitude') }}, {{ config('leaflet.map_center_longitude') }}], {{ config('leaflet.zoom_level') }});
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);
    var markers = L.markerClusterGroup(
        {
        disableClusteringAtZoom: 12,
        maxClusterRadius: 100,
        animateAddingMarkers: true
    }); //cluster layer is set and waiting to be used

    axios.get('{{ route('api.ipals.index') }}')
    .then(function (response) {
        var marker = L.geoJSON(response.data, {
            pointToLayer: function(geoJsonPoint, latlng) {
                return L.marker(latlng).bindPopup(function (layer) {
                    return layer.feature.properties.map_popup_content;
                });
            }
        });
        markers.addLayer(marker);
    })
    .catch(function (error) {
        console.log(error);
    });
    map.addLayer(markers);
    @can('create', new App\Models\Ipal)
    var theMarker;
    map.on('click', function(e) {
        let latitude = e.latlng.lat.toString().substring(0, 6);
        let longitude = e.latlng.lng.toString().substring(0, 6);
        if (theMarker != undefined) {
            map.removeLayer(theMarker);
        };
        var popupContent = "Your location : " + latitude + ", " + longitude + ".";
        popupContent += '<br><a href="{{ route('admin.ipals.create') }}?lat=' + latitude + '&lng=' + longitude + '">Add new Ipal here</a>';
        theMarker = L.marker([latitude, longitude]).addTo(map);
        theMarker.bindPopup(popupContent)
        .openPopup();
    });
    @endcan

    /* GPS enabled geolocation control set to follow the user's location */
    let locateControl = L.control.locate({
    position: "bottomright",
    drawCircle: true,
    follow: true,
    setView: true,
    keepCurrentZoomLevel: true,
    markerStyle: {
        weight: 1,
        opacity: 0.8,
        fillOpacity: 0.8
    },
    circleStyle: {
        weight: 1,
        clickable: false
    },
    icon: "fa fa-location-arrow",
    metric: true,
    strings: {
        title: "Lokasiku",
        popup: "Lokasimu {distance} {unit} dari titik ini",
        outsideMapBoundsMsg: "Kamu tampaknya berada di luar jangkauan peta"
    },
    locateOptions: {
        maxZoom: 18,
        watch: true,
        enableHighAccuracy: true,
        maximumAge: 10000,
        timeout: 10000
    }
    }).addTo(map);
</script>
@endsection