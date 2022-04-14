<div>
    <h1>Ini Map Area Universitas Tanjungpura</h1>
    <div id="map"></div>
    
</div>

@push('scripts')
    <style>
        #map {width: 400px; height: 400px;}
    </style>
    </head>
    <body>
  <div id="map"></div>
  <script>
    var map = new mapboxgl.Map({
      container: 'map',
      style: 'https://api.maptiler.com/maps/streets/style.json?key=ERkOykhUXkkCO5DYTQ14',
      center: [109.34832, -0.05645],
      zoom: 13.29
    });

    map.on('load', function() {
      map.addSource('geojson-overlay', {
        'type': 'geojson',
        'data': 'https://api.maptiler.com/data/e51d0777-34e3-4148-8f2c-f678a9526291/features.json?key=ERkOykhUXkkCO5DYTQ14'
      });
      map.addLayer({
        'id': 'geojson-overlay-fill',
        'type': 'fill',
        'source': 'geojson-overlay',
        'filter': ['==', '$type', 'Polygon'],
        'layout': {},
        'paint': {
          'fill-color': '#fff',
          'fill-opacity': 0.4
        }
      });
      map.addLayer({
        'id': 'geojson-overlay-line',
        'type': 'line',
        'source': 'geojson-overlay',
        'layout': {},
        'paint': {
          'line-color': 'rgb(68, 138, 255)',
          'line-width': 3
        }
      });
      map.addLayer({
        'id': 'geojson-overlay-point',
        'type': 'circle',
        'source': 'geojson-overlay',
        'filter': ['==', '$type', 'Point'],
        'layout': {},
        'paint': {
          'circle-color': 'rgb(68, 138, 255)',
          'circle-stroke-color': '#fff',
          'circle-stroke-width': 6,
          'circle-radius': 7
        }
      });
    });
  </script>
</body>
    </html>

@endpush