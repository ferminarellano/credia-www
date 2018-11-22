<div @include('crud::inc.field_wrapper_attributes') >
    
	<div class="evento_map_container_crear">
		<div id="evento_map_crear"></div>
	</div>

    {{-- HINT --}}
    @if (isset($field['hint']))
        <p class="help-block">{!! $field['hint'] !!}</p>
    @endif
</div>

@if ($crud->checkIfFieldIsFirstOfItsType($field, $fields))
  {{-- FIELD EXTRA CSS  --}}
  {{-- push things in the after_styles section --}}	
    @push('crud_fields_styles')
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css" integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA==" crossorigin=""/>
		<link rel="stylesheet" href="{{ asset('vendor/leaflet.markercluster/dist/MarkerCluster.css') }}" />
		<link rel="stylesheet" href="{{ asset('vendor/leaflet.markercluster/dist/MarkerCluster.Default.css') }}" />
    @endpush


  {{-- FIELD EXTRA JS --}}
  {{-- push things in the after_scripts section --}}

    @push('crud_fields_scripts')
        <script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js" integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA==" crossorigin=""></script>
		<script src="{{ asset('vendor/leaflet.markercluster/dist/leaflet.markercluster.js')}}"></script>
		<script>
		
			$(document).ready(function($){
				
				var map = false;
				
				var markers = L.markerClusterGroup();
				
				if(map===false)
				{
					setTimeout(function() {
						init_map();
					}, 250);
				}
				
				function init_map()
				{
					map = new L.map('evento_map_crear',{
						minZoom: 10,
						maxZoom: 18,
					});
					L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
						attribution: '',
						id: 'mapbox.satellite',
						accessToken: 'pk.eyJ1IjoiZmVybWluYXJlbGxhbm9obiIsImEiOiJjamRmZzlyMDcwN2Y0MndwZ2Q5YzNtcWx0In0.4WtMrYUp1DcrPjtj1hglww',
					}).addTo(map);
					function onMapClick(e) {
						$('input[name="latitud"]').val(e.latlng.lat.toFixed(6).toString());
						$('input[name="longitud"]').val(e.latlng.lng.toFixed(6).toString());
						move_inmueble(e);
					}
					
					map.on('click', onMapClick);
					
					map.setView([15.780923, -86.789743], 15);
				}
				
				function move_inmueble(e)
				{	
					//clear_marker();
					if(map !== false)
					{
						clear_marker();
						var marcador = L.icon({
							iconUrl: '/img/marker9.png',
							iconSize:     [25, 40],
							iconAnchor:   [12, 40],
							popupAnchor:  [50, 50]
						});
						
						var lat = (e.latlng.lat);
						var lng = (e.latlng.lng);
						var marker = L.marker([lat, lng],{draggable: true, icon:marcador});
						markers.addLayer(marker);
						
						map.addLayer(markers);
							
						focus_map();
						
						marker.on('mousemove', function(e){
							$('input[name="latitud"]').val(e.latlng.lat.toFixed(6).toString());
							$('input[name="longitud"]').val(e.latlng.lng.toFixed(6).toString());
						});
					}
					
					
				}
				function clear_marker()
				{
					markers.clearLayers();
				}
				
				function focus_map()
				{
					var bounds = markers.getBounds();
					if(bounds._southWest)
					{
						map.fitBounds(bounds);
					}
				}	
			});	
		</script>
    @endpush
@endif

{{-- Note: most of the times you'll want to use @if ($crud->checkIfFieldIsFirstOfItsType($field, $fields)) to only load CSS/JS once, even though there are multiple instances of it. --}}