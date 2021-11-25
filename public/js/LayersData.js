(function () {
    /* Basemap Layers */
    let basemaps = {
        cartoLight: L.tileLayer("https://cartodb-basemaps-{s}.global.ssl.fastly.net/light_all/{z}/{x}/{y}.png", {
            maxZoom: 21,
            alt: "light basemap",
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, &copy; <a href="https://cartodb.com/attributions">CartoDB</a>'
        }),

        mapboxStreet: L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
            maxZoom: 21,
            maxNativeZoom: 19,
            alt: "Street basemap",
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
                'Imagery Â© <a href="https://www.mapbox.com/">Mapbox</a>',
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1
        }),

        mapboxDark: L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
            maxZoom: 21,
            alt: "dark basemap",
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
                'Imagery Â© <a href="https://www.mapbox.com/">Mapbox</a>',
            id: 'mapbox/dark-v10'
        }),

        mapboxOutdoor: L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
            maxZoom: 21,
            alt: "outdoor basemap",
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
                'Imagery Â© <a href="https://www.mapbox.com/">Mapbox</a>',
            id: 'mapbox/outdoors-v11'
        }),


        mapboxImagery: L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
            maxZoom: 21,
            alt: "satellite basemap",
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
                'Imagery Â© <a href="https://www.mapbox.com/">Mapbox</a>',
            id: 'mapbox/satellite-streets-v11'
        }),

        googleSatellite: L.tileLayer('https://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}', {
            maxZoom: 20,
            subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
            attribution: 'Maps Data: Google, Citra 2021 TerraMetrics, Data peta &copy; 2021',
        }),

        googleMaps: L.tileLayer('https://{s}.google.com/vt/lyrs=p&x={x}&y={y}&z={z}', {
            maxZoom: 20,
            subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
            attribution: 'Powered by Google , Data Peta: &copy; 2021',
        }),

        rbi: L.esri.tiledMapLayer({
            url: "https://portal.ina-sdi.or.id/arcgis/rest/services/RBI/Basemap/MapServer"
        }),

    };

    var groups = {
        kumuh: new L.LayerGroup(),
        dataKepadatan: new L.LayerGroup(),
        Kerawanan: new L.LayerGroup(),
        Kecamatan: new L.LayerGroup(),
        Kelurahan: new L.LayerGroup(),
        jaringanAirlimbah: new L.LayerGroup()
    };


    window.LayersData = {
        LayerGroups: groups,
        Basemaps: basemaps
    };

}());
