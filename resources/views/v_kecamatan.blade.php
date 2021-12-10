@extends('layouts.apps')

@push('after-style')

    <x-leaflet></x-leaflet>

    <link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.4.1/dist/MarkerCluster.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.4.1/dist/MarkerCluster.Default.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet-easybutton@2/src/easy-button.css">
    <link rel="stylesheet" href= "{{ asset('css/L.Control.Layers.Tree.css') }}" />
    <link rel="stylesheet" href= "{{ asset('css/leaflet.plugin.css') }}" />
    <link rel="stylesheet" href= "{{ asset('css/iconLayers.css') }}" />
    <link rel="stylesheet" href= "{{ asset('css/gridkeen.css') }}" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" />

@endpush

@section('header')
@include('components.mapnav')
@endsection


@section('content')
<div class="grid grid-hero-thirds">
    <div class="grid-hero mx-3 mt-2">
      <div class="hero mb-3">
        <div class="chart-title">
          <img src="{{ asset('img/logopemko.png') }}" class="float-start img-fluid" alt="logo-banjarmasin" />
            <h5 class="text-center">Webmap {{ $kec->name }}</h5>
        </div>
        <div class="chart-stage">
            <div id="map" style="width: 100%; height: 60vh; box-shadow: 0 0 5px rgba(4, 161, 252, 0.5);"></div>
        </div>
      </div>

      <style type="text/css">
        .tg  {border-collapse:collapse;}
        .tg td{background-color:#EBF5FF;color:#444;
          font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;word-break:normal;}
        .tg th{background-color:#ebd614fd;color:rgb(39, 39, 39);
          font-family:Arial, sans-serif;font-size:14px;font-weight:normal;overflow:hidden;padding:10px;word-break:normal;}
        .tg .tg-c3ow{border-color:inherit;text-align:center;vertical-align:top}
        .tg .tg-6lfj{background-color:#343434;border-color:inherit;color:#ffffff;font-size:2.5rem;
          font-weight:bold;text-align:center;vertical-align:top}
        </style>

      <div class="chart-wrapper card text-dark bg-light-panel mb-3 mt-10">
        <div class="chart-title card-header bg-warning text-dark p-2 text-center">
          Data Infrastruktur Air Limbah Domestik (Terinput)
        </div>
        <div class="chart-stage card-text overflow-auto">
          <table class="tg table-dark col-12">
            <thead>
              <tr>
                <th class="tg-c3ow">MCK Plus</th>
                <th class="tg-c3ow">MCK Komunal</th>
                <th class="tg-c3ow">IPALD Komunal</th>
                <th class="tg-c3ow">Tangki septik Komunal</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="tg-6lfj">
                  @php
                  $id = $kec->id;
                  $mckplusCount = DB::table('builds')->where([
                                  ['builds.deleted_at','=', null],
                                  ['builds.categories_id', '=', '1'],
                                  ['builds.kecamatans_id', '=', $id]
                        ])->count();
                  echo '<div>'. $mckplusCount . '</div>';
                  @endphp
                </td>
                <td class="tg-6lfj">
                  @php
                  $mckkomunalCount = DB::table('builds')->where([
                                  ['builds.deleted_at','=', null],
                                  ['builds.categories_id', '=', '2'],
                                  ['builds.kecamatans_id', '=', $id]
                        ])->count();
                  echo '<div>'. $mckkomunalCount . '</div>';
                  @endphp
                </td>
                <td class="tg-6lfj">
                  @php
                  $ipalkomunalCount = DB::table('builds')->where([
                                  ['builds.deleted_at','=', null],
                                  ['builds.categories_id', '=', '4'],
                                  ['builds.kecamatans_id', '=', $id]
                        ])->count();
                  echo '<div>'. $ipalkomunalCount . '</div>';
                  @endphp
                </td>
                <td class="tg-6lfj">
                  <div id="datakotaku">
                    @php
                    $kotakuCount = DB::table('nsups')->where([
                                  ['nsups.deleted_at','=', null],
                                  ['nsups.kecamatans_id', '=', $id]
                          ])->count();
                    echo '<div>'. $kotakuCount . '</div>';
                    @endphp
                  </div>
                </td>
              </tr>
            </tbody>
            </table>
        </div>
        <div id="tablehide" class="text-center mt-3">Klik Marker Untuk Menampilkan Data</div>
        <div class="chart-notes mt-4" id="tableclick">
        </div>
      </div>
    </div>

    <div class="chart-wrapper mx-3 my-2 row-3">
      <div class="chart-title text-center">
        Perhitungan SPM Sanitasi
      </div>
      <div class="chart-stage">
        <canvas id="piespm" width="200" height="200" aria-label="Chart SPM" role="img"></canvas>
        <select id="chartType" onchange="updateChart()">
          <option value="doughnut">Doughnut</option>
          <option value="pie">Pie</option>
          <option value="bar">Bar</option>
      </select>
      </div>
    </div>
    <div class="chart-wrapper mx-3 my-2 row-3">
      <div class="chart-title text-center">
        Data Akses Aman
      </div>
      <div class="chart-stage">
        <canvas id="securechart" width="200" height="200" aria-label="Chart Akses Aman" role="img"></canvas>
        <select id="chartType2" onchange="updateChart2()">
          <option value="pie">Pie</option>
          <option value="doughnut">Doughnut</option>
          <option value="bar">Bar</option>
        </select>
      </div>
    </div>
    <div class="chart-wrapper mx-3 my-2 row-6">
      <div class="chart-title text-center">
        DemoGraphic
      </div>
      <div class="chart-stage">
        <canvas id="densitychart"width="200" height="200" aria-label="Chart Kepadatan Penduduk" role="img"></canvas>
      </div>
    </div>
  </div>


  <!-- Modal -->
  <div class="modal fade" id="featureModal" tabindex="-1" aria-labelledby="feature-title" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="feature-title"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" id="feature-info"></div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-success" data-bs-dismiss="modal">Close</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

@endsection

@push('after-script')
<script src="https://unpkg.com/leaflet.markercluster@1.4.1/dist/leaflet.markercluster.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.1/chart.min.js"></script>
<script src="{{ asset('js/basemap.js') }}"></script> 
<script src="{{ asset('js/iconLayers.js') }}"></script>
<script src="{{ asset('js/L.Control.Fullscreen.min.js') }}"></script>
<script src="{{ asset('js/L.Control.Locate.min.js') }}"></script>
<script src="{{ asset('js/leaflet-measure.js') }}"></script>
<script src="{{ asset('js/L.Control.Layers.Tree.js') }}"></script>
<script src="{{ asset('js/typeahead.bundle.min.js')}}"></script>
<script src="{{ asset('js/handlebars.min.js')}}"></script>
<script src="{{ asset('js/list.min.js')}}"></script>
<script src="{{ asset('js/L.Control.ZoomBar.js')}}"></script>



<script>
    let kecamatan = L.layerGroup();
  
    let kec{{ $kec->id }} = L.layerGroup();
  
      @foreach ($kategori as $data)
      let {{ $data->layer }}Layer = L.geoJson(null);
      let {{ $data->layer }} = L.layerGroup();
      @endforeach
  
  </script>
  
  <script>
    let map = [];

  
  $(window).resize(function () {
    sizeLayerControl();
  });
  
  if (!("ontouchstart" in window)) {
    $(document).on("mouseover", ".feature-row", function (e) {
        highlight.clearLayers().addLayer(L.circleMarker([$(this).attr("lat"), $(this).attr("lng")], highlightStyle));
    });
  }
  
  $(document).on("mouseout", ".feature-row", clearHighlight);
  
  
  
  function sizeLayerControl() {
    $(".leaflet-control-layers").css("max-height", $("#map").height() - 50);
  }
  
  function clearHighlight() {
    highlight.clearLayers();
  }

  function kecFilter(feature) {
    if (feature.properties.KECAMATAN === "{{ $kec->name }}") return true;
  }

  function kelFilter(feature) {
    if (@foreach ($kelbykec as $data) feature.properties.KELURAHAN === "{{ $data }}" || @endforeach feature.properties.KELURAHAN === "Kertak Hanyar" )
    return true;
  }


  
  /* Overlay Layers */
  let highlight = L.geoJson(null);
  let highlightStyle = {
    stroke: false,
    fillColor: "#00FFFF",
    fillOpacity: 0.7,
    radius: 10
  };
  
  
  /*Kerawanan*/
  
  let kerawananColors = {
    "Risiko Sangat Tinggi": "#fc0314",
    "Risiko Tinggi": "#fcf912",
    "Risiko Sedang": "#89fc3d",
    "Risiko Rendah": "#319df5"
  };
  
  // specify popup options 
  let customOptions = {
    'className': 'custom'
  }
  
  
  function kerawananFeature(feature, layer) {
    let contentPopup = layer.feature.properties.KELURAHAN;
    let dataKerawanan = layer.feature.properties.KERAWANAN;
    layer.on({
        click: function (value) {
            layer.bindPopup('<div style=text-align:center;>' + '<h6>' + 'Kel. ' + contentPopup + '</h6>' +
                '<p>' + 'Area ' + dataKerawanan + ' Air Limbah' + '</p>' + '</div>', customOptions);
            layer.openPopup();
        },
  
        mouseover: function (value) {
            let layerKerawanan = value.target;
            layerKerawanan.setStyle({
                weight: 3,
                color: "#00FFFF",
                fillOpacity: 0.05,
                opacity: 1
            });
  
            if (!L.Browser.ie && !L.Browser.opera) {
                layerKerawanan.bringToFront();
            }
        },
  
        mouseout: function (value) {
            Kerawanan.resetStyle(value.target);
        }
    });
  }
  
  
  let Kerawanan = L.geoJson(null, {
    filter: kelFilter,
    style: function (feature) {
        return {
            name: Kerawanan,
            weight: 2,
            color: "white",
            fillColor: kerawananColors[feature.properties.KERAWANAN],
            fillOpacity: 0.7,
            opacity: 1,
            width: 0.01,
            dashArray: '3',
            interactive: false
        };
    },
    onEachFeature: kerawananFeature
  });
  
  
  $.getJSON("{{ asset('data/kerawanan.geojson') }}", function (data) {
    Kerawanan.addData(data);
  });
  
  
  // get color depending on population density value
  function getColor(jiwa) {
    return jiwa > 40000 ? '#800026' :
        jiwa > 20000 ? '#BD0026' :
        jiwa > 15000 ? '#FEB24C' :
        jiwa > 0 ? '#FED976' :
        '#FFEDA0';
  }
  
  function style(feature) {
    return {
        weight: 2,
        opacity: 1,
        color: 'white',
        dashArray: '3',
        fillOpacity: 0.7,
        fillColor: getColor(feature.properties.KEPADATAN)
    };
  }
  
  function highlightFeature(e) {
    let layer = e.target;
  
    layer.setStyle({
        weight: 5,
        color: '#666',
        dashArray: '',
        fillOpacity: 0.7
    });
  
    if (!L.Browser.ie && !L.Browser.opera && !L.Browser.edge) {
        layer.bringToFront();
    }
  
  //   info.update(layer.feature.properties);
  
  }
  
  let dataKepadatan;
  
  function resetHighlight(e) {
    dataKepadatan.resetStyle(e.target);
  //   info.update();
  //   infoChart.update();
  }
  
  function zoomToFeature(e) {
    map.fitBounds(e.target.getBounds());
  }
  
  function onEachFeature(feature, layer) {
    layer.on({
        mouseover: highlightFeature,
        mouseout: resetHighlight,
        click: zoomToFeature
    });
  }
  
  dataKepadatan = L.geoJson(null, {
    filter: kecFilter,
    name: dataKepadatan,
    style: style,
    onEachFeature: onEachFeature
  });
  
  $.getJSON("{{ asset('data/kepadatan.geojson') }}", function (data) {
    dataKepadatan.addData(data);
  });
  
  
  /*DELINIASI KUMUH*/
  let kumuh = L.geoJson(null, {
    filter: kecFilter,
    style: function (feature) {
        return {
            color: "grey",
            fillColor: "magenta",
            fillOpacity: 0.5,
            opacity: 0.5,
            width: 0.001,
            clickable: true,
            title: feature.properties.KATEGORI,
            riseOnHover: true
        };
    },
    onEachFeature: function (feature, layer) {
        if (feature.properties) {
            let content = "<table class='table table-striped table-bordered table-condensed'>" + "<tr><th>KRITERIA KUMUH</th><td>" + feature.properties.KRITERIA_KUMUH + "<tr><th>LUASAN KUMUH (M<SUP>2</SUP>)</th><td>" + feature.properties.LUAS + "</td></tr>" + "<tr><th>KELURAHAN</th><td>" + feature.properties.KELURAHAN + "</td></tr>" + "<tr><th>RT</th><td>" + feature.properties.RT + "</td></tr>" + "</td></tr>" + "<table>";
            layer.on({
                click: function (e) {
                    $("#feature-title").html(feature.properties.KATEGORI);
                    $("#feature-info").html(content);
                    $("#featureModal").modal("show");
  
                }
            });
        }
        layer.on({
            mouseover: function (e) {
                let layer = e.target;
                layer.setStyle({
                    weight: 3,
                    color: "#00FFFF",
                    opacity: 1
                });
                if (!L.Browser.ie && !L.Browser.opera) {
                    layer.bringToFront();
                }
            },
            mouseout: function (e) {
                kumuh.resetStyle(e.target);
            }
        });
    }
  });
  $.getJSON("{{ asset('data/kumuh.geojson') }}", function (data) {
    kumuh.addData(data);
  });
  
  let normal = L.geoJson(null);
  $.getJSON("", function (data) {
    normal.addData(data);
  });
  
  
  let Kelurahan = L.geoJson(null, {
    filter: kecFilter,
    style: function (feature) {
        return {
            color: "#42a7f5",
            weight: 2,
            fill: true,
            fillOpacity: 0,
            dashArray: '1.5',
            width: 0.1,
            clickable: false,
            riseOnHover: false
        };
    },
  
    onEachFeature: function (feature, layer) {
        layer.on({
            mouseover: function (e) {
                let layer = e.target;
                layer.setStyle({
                    weight: 3,
                    color: "#00FFFF",
                    fillOpacity: 0.05,
                    opacity: 1
                });
            },
            mouseout: function (e) {
                Kelurahan.resetStyle(e.target);
            }
        });
    }
  });
  $.getJSON("{{ asset('data/Kelurahan.geojson') }}", function (data) {
    Kelurahan.addData(data);
  });
  
  
  /*Septiktank Individual*/
  let septiktank = L.geoJson(null, {
    filter: kecFilter,
    style: function (feature) {
        return {
            color: "white",
            fillColor: "#03a82a",
            fillOpacity: 0.7,
            opacity: 0.5,
            width: 0.001,
            clickable: true,
            title: feature.properties.JENIS_SARANA,
            riseOnHover: true
        };
    },
    onEachFeature: function (feature, layer) {
        if (feature.properties) {
            let content = "<table class='table table-striped table-bordered table-condensed'>" + "<tr><th>JENIS SARANA</th><td>" + feature.properties.JENIS_SARANA + "<tr><th>KECAMATAN</th><td>" + feature.properties.KECAMATAN + "</td></tr>" + "<tr><th>KELURAHAN</th><td>" + feature.properties.KELURAHAN + "</td></tr>" + "<tr><th>ALAMAT</th><td>" + feature.properties.ALAMAT + "</td></tr>" + "</td></tr>" + "<table>";
            layer.on({
                click: function (e) {
                    $("#feature-title").html(feature.properties.JENIS_SARANA);
                    $("#feature-info").html(content);
                    $("#featureModal").modal("show");
  
                }
            });
        }
        layer.on({
            mouseover: function (e) {
                let layer = e.target;
                layer.setStyle({
                    weight: 3,
                    color: "#00FFFF",
                    opacity: 1
                });
                if (!L.Browser.ie && !L.Browser.opera) {
                    layer.bringToFront();
                }
            },
            mouseout: function (e) {
                septiktank.resetStyle(e.target);
            }
        });
    }
  });
  $.getJSON("{{ asset('data/septiktank.geojson') }}", function (data) {
    septiktank.addData(data);
  });
 
  
  
  /*Jaringan Air Limbah */
  let jaringanAirlimbah = L.geoJson(null, {
    filter: kecFilter,
    style: function (feature) {
        return {
            //color: jalColors[feature.properties.KONDISI],
            color: "grey",
            weight: 1,
            opacity: 1
        };
    },
    onEachFeature: function (feature, layer) {
        if (feature.properties) {
            let content = "<table class='table table-striped table-bordered table-condensed'>" + "<tr><th>SUMBER DANA</th><td>" + feature.properties.SUMBER_DANA + "</td></tr>" + "<tr><th>JENIS</th><td>" + feature.properties.JENIS + "</td></tr>" + "<tr><th>Diameter (mm)</th><td>" + feature.properties.Diameter + "</td></tr>" + "<table>";
            layer.on({
                click: function (e) {
                    $("#feature-title").html(feature.properties.GID);
                    $("#feature-info").html(content);
                    $("#featureModal").modal("show");
  
                }
            });
        }
        layer.on({
            mouseover: function (e) {
                let layer = e.target;
                layer.setStyle({
                    weight: 3,
                    color: "#00FFFF",
                    opacity: 1
                });
                if (!L.Browser.ie && !L.Browser.opera) {
                    layer.bringToFront();
                }
            },
            mouseout: function (e) {
                jaringanAirlimbah.resetStyle(e.target);
            }
        });
    }
  });
  $.getJSON("{{ asset('data/jaringan_limbah.geojson') }}", function (data) {
    jaringanAirlimbah.addData(data);
  });
  
  /* Single marker cluster layer to hold all clusters */
  let markerClusters = new L.MarkerClusterGroup({
    spiderfyOnMaxZoom: true,
    showCoverageOnHover: false,
    zoomToBoundsOnClick: true,
    disableClusteringAtZoom: 17
  });
  
  
  map = L.map(document.getElementById('map'), {
    layers: [mapboxDark, kec{{ $kec->id }},
    markerClusters, highlight],
    zoomControl: false,
    fullscreenControl: false
  });
  
  let iconLayersControl = new L.Control.IconLayers(
          [{
              title: 'Greyscale',
              layer: cartoLight,
              icon: '{{ asset('img/basemap/greyscale.png') }}'
          },
          {
              title: 'Hybrid',
              layer: mapboxImagery,
              icon: '{{ asset('img/basemap/imagery.png') }}'
          },
          {
              title: 'Outdoor',
              layer: mapboxOutdoor,
              icon: '{{ asset('img/basemap/outdoor.png') }}'
          },
          {
              title: 'Google Maps',
              layer: googleMaps,
              icon: '{{ asset('img/basemap/googleMaps.png') }}'
          },
          {
              title: 'Google Imagery',
              layer: googleSatellite,
              icon: '{{ asset('img/basemap/googleSatellite.png') }}'
          },
          {
              title: 'Street Maps',
              layer: mapboxStreet,
              icon: '{{ asset('img/basemap/streetmap.png') }}'
          },
          {
              title: 'Topo Map',
              layer: otopomap,
              icon: '{{ asset('img/basemap/topomap.png') }}'
          },
          {
              title: 'Dark',
              layer: mapboxDark,
              icon: '{{ asset('img/basemap/dark.png') }}'
          },
          ],
          {
              position: 'bottomright',
              maxLayersInRow: 4
          });
  
  iconLayersControl.addTo(map);
  iconLayersControl.on('activelayerchange', function(e) {
          console.log('layer switched', e.layer);
    });
  
  
  /* Layer control listeners that allow for a single markerClusters layer */
  map.on("overlayadd", function (e) {
      if (e.layer === mckplusLayer) {
          markerClusters.addLayer(mckplus);
          // syncSidebar();
      }
      if (e.layer === mckkomunalLayer) {
          markerClusters.addLayer(mckkomunal);
          // syncSidebar();
      }
      if (e.layer === ipalkomunalLayer) {
          markerClusters.addLayer(ipalkomunal);
          // syncSidebar();
      }
      if (e.layer === mckumumLayer) {
          markerClusters.addLayer(mckumum);
          // syncSidebar();
      }
      if (e.layer === septikkomunalLayer) {
          markerClusters.addLayer(septikkomunal);
          // syncSidebar();
      }
      if (e.layer === ipalLayer) {
          map.addLayer(ipal);
  
      }
  });
  
  map.on("overlayremove", function (e) {
      if (e.layer === mckplusLayer) {
          markerClusters.removeLayer(mckplus);
          // syncSidebar();
      }
      if (e.layer === mckkomunalLayer) {
          markerClusters.removeLayer(mckkomunal);
          // syncSidebar();
      }
      if (e.layer === ipalkomunalLayer) {
          markerClusters.removeLayer(ipalkomunal);
          // syncSidebar();
      }
      if (e.layer === mckumumLayer) {
          markerClusters.removeLayer(mckumum);
          // syncSidebar();
      }
      if (e.layer === septikkomunalLayer) {
          markerClusters.removeLayer(septikkomunal);
          // syncSidebar();
      }
      if (e.layer === ipalLayer) {
          map.removeLayer(ipal);
  
      }
  });
  
  /* Clear feature highlight when map is clicked */
  map.on("click", function (e) {
    highlight.clearLayers();
    $("#tableclick").hide();
    $("#tablehide").show();
  });
  
  
  let onClicked = function (e) {
    map.off('contextmenu', onClicked); //turn off listener for map click
    currentMarker = L.marker(e.latlng, {
        icon: L.icon({
            iconUrl: "{{ asset('img/favicon/favicon.ico') }}",
            iconAnchor: [12, 28],
            popupAnchor: [0, -25]
        })
    }).addTo(map).bindPopup('Koordinat titik ini di ' + '<br>Lattitude : ' + e.latlng.lat.toString() +
        '<br>' + 'Longitude : ' + e.latlng.lng.toString());
  };
  map.on('contextmenu', onClicked);
  map.on('contextmenu', function () {
    map.removeLayer(currentMarker);
    map.on('contextmenu', onClicked);
  });
  
  /*KECAMATAN*/
  
  let kec = L.geoJson(<?= $kec->geojson ?>, {
    style : function (feature) {
      return {
        color : 'white',
        fillColor : '{{ $kec->color}}',
        fillOpacity : 1.0,
        dashArray: '3',
      };
  },
  }).addTo(kec{{$kec->id }});

  map.fitBounds(kec.getBounds());
  
 
  
  /*MCK Plus*/
  
  @foreach ($mckplus as $index => $data)
  
  L.marker([<?= $data->lat . ',' . $data->lng ?>], {
          icon: L.icon({
                  iconUrl: '{{ asset('') }}{{ $data->icon }}',
                  iconSize: [24, 28],
                  iconAnchor: [12, 28],
                  popupAnchor: [0, -25]
              }),
              riseOnHover: true
          }).addTo({{ $data->layer }}).on('click', function(e){
            $("#tablehide").hide();
            let content = "<table class='table table-dark table-striped table-bordered'><tr><th>KELURAHAN</th><td>" + "{{ $data->name  }}" + "<tr><th>JENIS SARANA</th><td>" + "{{ $data->type }}" + "<tr><th>ALAMAT</th><td>" + "{{ $data->address }}" + "<tr><th>STATUS</th><td>" + "{{ $data->status }}" + "<tr></table>";
            $("#tableclick").show();
            $("#tableclick").html(content);
            highlight.clearLayers().addLayer(L.circleMarker(this.getLatLng(), highlightStyle));
          });
  
  @endforeach
  
  /*MCK Komunal*/
  
  @foreach ($mckkomunal as $data)
  L.marker([<?= $data->lat . ',' . $data->lng ?>], {
          icon: L.icon({
                  iconUrl: '{{ asset('') }}{{ $data->icon }}',
                  iconSize: [24, 28],
                  iconAnchor: [12, 28],
                  popupAnchor: [0, -25]
              }),
              riseOnHover: true
            }).addTo({{ $data->layer }}).on('click', function(e){
            $("#tablehide").hide();
            let content = "<table class='table table-dark table-striped table-bordered'><tr><th>KELURAHAN</th><td>" + "{{ $data->name  }}" + "<tr><th>JENIS SARANA</th><td>" + "{{ $data->type }}" + "<tr><th>ALAMAT</th><td>" + "{{ $data->address }}" + "<tr><th>STATUS</th><td>" + "{{ $data->status }}" + "<tr></table>";
            $("#tableclick").show();
            $("#tableclick").html(content);
            highlight.clearLayers().addLayer(L.circleMarker(this.getLatLng(), highlightStyle));
          });
  
  @endforeach
  
  /*MCK Umum*/
  
  @foreach ($mckumum as $data)
  L.marker([<?= $data->lat . ',' . $data->lng ?>], {
        filter: kecFilter,
          icon: L.icon({
                  iconUrl: '{{ asset('') }}{{ $data->icon }}',
                  iconSize: [24, 28],
                  iconAnchor: [12, 28],
                  popupAnchor: [0, -25]
              }),
              riseOnHover: true
            }).addTo({{ $data->layer }}).on('click', function(e){
            $("#tablehide").hide();
            let content = "<table class='table table-dark table-striped table-bordered'><tr><th>KELURAHAN</th><td>" + "{{ $data->name  }}" + "<tr><th>JENIS SARANA</th><td>" + "{{ $data->type }}" + "<tr><th>ALAMAT</th><td>" + "{{ $data->address }}" + "<tr><th>STATUS</th><td>" + "{{ $data->status }}" + "<tr></table>";
            $("#tableclick").show();
            $("#tableclick").html(content);
            highlight.clearLayers().addLayer(L.circleMarker(this.getLatLng(), highlightStyle));
            });
  
  @endforeach
  
  /*IPAL Komunal*/
  
  @foreach ($ipalkomunal as $data)
  L.marker([<?= $data->lat . ',' . $data->lng ?>], {
          icon: L.icon({
                  iconUrl: '{{ asset('') }}{{ $data->icon }}',
                  iconSize: [24, 28],
                  iconAnchor: [12, 28],
                  popupAnchor: [0, -25]
              }),
              riseOnHover: true
            }).addTo({{ $data->layer }}).on('click', function(e){
            $("#tablehide").hide();
            let content = "<table class='table table-dark table-striped table-bordered'><tr><th>KELURAHAN</th><td>" + "{{ $data->name  }}" + "<tr><th>JENIS SARANA</th><td>" + "{{ $data->type }}" + "<tr><th>ALAMAT</th><td>" + "{{ $data->address }}" + "<tr><th>STATUS</th><td>" + "{{ $data->status }}" + "<tr></table>";
            $("#tableclick").show();
            $("#tableclick").html(content);
            highlight.clearLayers().addLayer(L.circleMarker(this.getLatLng(), highlightStyle));
          });
  
  @endforeach
  
  /*IPAL PERUMDAPALD*/
  
  @foreach ($ipal as $data)
  L.marker([<?= $data->lat . ',' . $data->lng ?>], {
          icon: L.icon({
                  iconUrl: '{{ asset('') }}{{ $data->icon }}',
                  iconSize: [32, 37],
                  iconAnchor: [12, 28],
                  popupAnchor: [0, -25]
              }),
              riseOnHover: true
            }).addTo({{ $data->layer }}).on('click', function(e){
            $("#tablehide").hide();
            let content = "<table class='table table-dark table-striped table-bordered'><tr><th>KELURAHAN</th><td>" + "{{ $data->kelName  }}" + "<tr><th>ALAMAT</th><td>" + "{{ $data->address }}" + "<tr><th>TAHUN OPERASI</th><td>" + "{{ $data->year }}" + "<tr><th>KAPASITAS</th><td>" + "{{ $data->capacity }} m<sup>3</sup>" + "/hari" + "<tr><th colspan='2'><a href='#' class='tooltip-test' title='Detail'>Lihat Selengkapnya</a></th></tr>" + "</table>";
              $("#tableclick").show();
              $("#tableclick").html(content);
              highlight.clearLayers().addLayer(L.circleMarker(this.getLatLng(), highlightStyle));
            });
  
  @endforeach
  
  
  // /* Empty layer placeholder to add to layer control for listening when to add/remove KOTAKU to markerClusters layer */
  septikkomunal = L.geoJson(null, {
      filter: kecFilter,
      pointToLayer: function (feature, latlng) {
          return L.marker(latlng, {
              icon: L.icon({
                  iconUrl: "{{ asset('img/septictank.png') }}",
                  iconSize: [24, 28],
                  iconAnchor: [12, 28],
                  popupAnchor: [0, -25]
              }),
              title: feature.properties.JENIS_SARANA,
              riseOnHover: true
          });
      },
      onEachFeature: function (feature, layer) {
          if (feature.properties) {
              let content = "<table class='table table-dark table-striped table-bordered'>" + "<tr><th>NAMA KSM</th><td>" + feature.properties.NAMA_KSM + "<tr><th>KELURAHAN</th><td>" + feature.properties.KELURAHAN + "</td></tr>" + "<tr><th>TAHUN</th><td>" + feature.properties.Tahun + "</td></tr>" + "<tr><th>SUMBER DATA</th><td>" + feature.properties.SUMBER + "</td></tr>" + "</td></tr>" + "<table>";
              layer.on({
                  click: function (e) {
                    $("#tablehide").hide();
                    $("#tableclick").show();
                    $("#tableclick").html(content);
                    highlight.clearLayers().addLayer(L.circleMarker([feature.geometry.coordinates[1], feature.geometry.coordinates[0]], highlightStyle));
                  }
              });
         }
      }
  });
 $.getJSON("{{ asset('data/kotaku.geojson') }}", function (data) {
      septikkomunal.addData(data);
  });
  
    let baseTree = {
        label: '<b>{{ trans('cruds.maps.thematic') }}</b>',
        children: [
            {label: '&nbsp;Normal', layer: normal},
            {label: '&nbsp;{{ trans('cruds.maps.slum') }}', layer: kumuh},
            {label: '&nbsp;{{ trans('cruds.maps.risk') }}', layer: Kerawanan},
            {label: '&nbsp;{{ trans('cruds.maps.density') }}', layer: dataKepadatan},
        ]
    };  
  
        var hasAllUnSelected = function() {
            return function(ev, domNode, treeNode, map) {
                var anySelected = false;
                function iterate(node)
                {
                    if (node.layer && !node.radioGroup) {
                        anySelected = anySelected || map.hasLayer(node.layer);
                    }
                    if (node.children && !anySelected) {
                        node.children.forEach(function(element) { iterate(element); });
                    }
                }
                iterate(treeNode);
                return !anySelected;
            };
        };
  
        let overlayTree = {
            label: '<b>LAYER</b>',
            children : [
                {label: '<b>{{ trans('cruds.maps.utility') }}</b>',
                selectAllCheckbox: true,
                children: [
                    {label: '{{ $kec->name }}'.toUpperCase() , layer: kec{{$kec->id }}},
                    {label: '&nbsp;KELURAHAN', layer: Kelurahan},
                    {label: '&nbsp;{{ trans('cruds.maps.pipe') }}', layer: jaringanAirlimbah},
                ]},
                {label: '<b>{{ trans('cruds.maps.asset') }}</b>',
                    selectAllCheckbox: true,
                    children: [
                      {label: "<img src='{{ asset('img/green.png') }}' width='24' height='24'>&nbsp;Tangki Septik Individual", layer: septiktank},
                      @foreach ($kategori as $data)
                      {label: "<img src='{{ asset('') }}{{ $data->icon }}' width='24' height='24'>&nbsp;{{ $data->type }}", layer: {{ $data->layer }}Layer},
                      @endforeach
                    ]
                }]
            };
  
        /* ends*/
  
        let ctl = L.control.layers.tree(baseTree,
                {
                    // namedToggle: true,
                    collapseAll: 'Collapse all',
                    // expandAll: 'Expand all',
                    collapsed: true,
                });
  
        ctl.addTo(map).collapseTree(true).expandSelected(false);
  
        ctl.setOverlayTree(overlayTree,).collapseTree(true).expandSelected(false);

  
  /*Zoom Icon*/
  let zoom_bar = new L.Control.ZoomBar({
            position: 'topleft'
        }).addTo(map);
 
  
    /*Scale Map*/
    let scaleControl = L.control.scale({imperial: false}).addTo(map);
  
  
    /*Fullscreen Control*/
    let fullscreenControl = L.control.fullscreen({
        position: "topleft"
    }).addTo(map);
  
  
    /*Leaflet Measure*/
    function writeResults(results) {
    document.getElementById('eventoutput').innerHTML = JSON.stringify(
      {
        area: results.area,
        areaDisplay: results.areaDisplay,
        lastCoord: results.lastCoord,
        length: results.length,
        lengthDisplay: results.lengthDisplay,
        pointCount: results.pointCount,
        points: results.points
      },
        null,
        2
      );
    }
  
      let measureControl = new L.Control.Measure({
          position: 'topleft',
          primaryLengthUnit: 'kilometers',
          secondaryLengthUnit: 'meters',
          primaryAreaUnit: 'hectares',
          secondaryAreaUnit: 'sqmeters',
          activeColor:"#4fd65a",
          completedColor:"#5cf79a",
          decPoint: ',',
          thousandsSep: '.'});
      measureControl.addTo(map);
  
  /* Leaflet patch to make layer control scrollable on touch browsers*/
  let container = $(".leaflet-control-layers")[0];
  if (!L.Browser.touch) {
    L.DomEvent
    .disableClickPropagation(container)
    .disableScrollPropagation(container);
  } else {
    L.DomEvent.disableClickPropagation(container);
  }
  
  </script>

<script>
let ctx = document.getElementById('piespm').getContext('2d');

chartdata = {
        labels: ['Akses Aman', 'Akses Dasar / Cubluk', 'Tanpa Akses'],
        datasets: [{
            label: 'SPM Sanitasi (KK)',
            data: [
              {{ $datasanitasi->secure }},
              {{ $datasanitasi->basic }},
              {{ $datasanitasi->poor }}
            ],
            backgroundColor: [
                'rgba(255, 99, 132, 0.8)',
                'rgba(54, 162, 235, 0.8)',
                'rgba(255, 206, 86, 0.8)',
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
            ],
            borderWidth: 1,
            hoverOffset: 4,
        }],
     
    };

    var piespm = new Chart(ctx, {
    type: 'doughnut',
    data: chartdata,
});


function updateChart() {
    piespm.destroy();

    piespm = new Chart(ctx, {
    type: document.getElementById("chartType").value,
    data: chartdata,
 });
};

 $('#chartType').on('change', updateChart)
 updateChart();

let cty = document.getElementById('securechart').getContext('2d');

chartdata2 = {
        labels: ['Pengguna MCK', 'Tangkiseptik Komunal', 'Tangki Septik Individu', 'Jumlah SR IPALD'],
        datasets: [{
            label: 'Akses Aman (KK)',
            data: [  {{ $secure->mck_user }},{{ $secure->communal }},{{ $secure->individual }},{{ $secure->qty_sr_pdpal }}
            ],
            backgroundColor: ['rgba(255, 117, 160, 0.8)', 'rgba(252, 227, 138, 0.8)', 'rgba(234, 255, 208, 0.8)', 'rgba(149, 225, 211, 0.8)'],
            borderColor: ['rgba(255, 117, 160, 0.8)', 'rgba(252, 227, 138, 0.8)', 'rgba(234, 255, 208, 0.8)', 'rgba(149, 225, 211, 0.8)'],
            borderWidth: 1,
            hoverOffset: 4,
        }]
    };

    var securechart = new Chart(cty, {
    type: 'pie',
    data: chartdata2,
});


function updateChart2() {
    securechart.destroy();

    securechart = new Chart(cty, {
    type: document.getElementById("chartType2").value,
    data: chartdata2,
 });
};

 $('#chartType2').on('change', updateChart2)
 updateChart2();

 let ctz = document.getElementById('densitychart').getContext('2d');


chartdata3 = {
        labels: [@foreach ($kepadatan as $data) "{{ $data->name }}", @endforeach],
        datasets: [{
          label: 'Kepadatan',
          type:'bar',
          data: [ @foreach ($kepadatan as $data) {{ $data->density }}, @endforeach
            ],
            backgroundColor: 'rgba(148, 218, 255, 0.8)',
        },
        {
          label: 'Populasi',
          type:'bar',
          data: [ @foreach ($kepadatan as $data) {{ $data->population }}, @endforeach
            ],
            backgroundColor: 'rgba(255, 135, 202, 0.8)',
        }],
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            },
            responsive: true,
            maintainAspectRatio: false,
        }
    };

    var densitychart = new Chart(ctz, {
    data: chartdata3,
});



</script>

@endpush