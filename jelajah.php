<div class="container">
	<div class="isi">
		<div id="map" style="width: 920px; height: 456px">
			<!-- Modal -->
			<div id="myModal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			  <div class="modal-dialog modal-lg">
			    <div style="height:400px;background:grey;margin-left:33px;margin-top:18%;" class="modal-content">
			    	<div style="margin-left:33px;border-radius: 3px 3px 0px 0px; " class="navbar navbar-inverse navbar-fixed-top" role="navigation">
					    <div class="container-fluid">
					    	<div class="navbar-header">
					        	<a id="nameBudaya" class="navbar-brand" href="#"></a>
					        </div>
					    </div>
					</div>
					<div class="container-fluid">
					    <div class="row">
					        <div style="border-bottom-left-radius:5px;border-right: 5px solid red;margin-left:34px;" class="col-sm-3 col-md-2 sidebar">
					        	<ul class="nav nav-sidebar">
						            <li><a id="sejarah" style="margin-right:5px;" href="#">Sejarah</a></li>
						            <li><a id="event" style="margin-right:9px;" href="#">Event</a></li>
						            <li><a id="gal" style="margin-right:9px;" href="#">Galery Foto</a></li>
						            <li><a id="vd" style="margin-right:9px;" href="#">Video</a></li>
					          	</ul>
					        </div>
					        <div style="margin-top:60px;" class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
						        <div class="row placeholders">
						        	<div id="budayaConts" style="margin-left:-70px;" class="col-xs-6 col-sm-3 placeholder">
						            </div>
						        </div>
					        </div>
					    </div>
					</div>
			    </div>
			  </div>
			</div>

		</div>
		<script>

			
L.mapbox.accessToken = 'pk.eyJ1IjoicmlmcWl0aG9taSIsImEiOiJpUjFieHdVIn0.Cz3ME0XeH01-5IRnCJl3SA';
var map = L.mapbox.map('map', 'rifqithomi.jb5ibjeg')
    .setView([-1.527, 118.215], 5);

var myLayer = L.mapbox.featureLayer().addTo(map);

var geoJson1 = [{
    type: 'Feature',
    "geometry": { "type": "Point", "coordinates": [106.846,-6.20876]},
    "properties": {
        "image": "https://upload.wikimedia.org/wikipedia/commons/thumb/e/ef/Cherry_Blossoms_and_Washington_Monument.jpg/320px-Cherry_Blossoms_and_Washington_Monument.jpg",
        "url": "https://en.wikipedia.org/wiki/Washington,_D.C.",
        "marker-symbol": "star",
        "marker-color": "#ff8888",
        "marker-size": "large",
        "jenis":"1",
        "city": "Washington, D.C."
    }
}, {
    type: 'Feature',
    "geometry": { "type": "Point", "coordinates": [107.608,-6.91486]},
    "properties": {
        "image": "https://upload.wikimedia.org/wikipedia/commons/thumb/8/82/Chicago_sunrise_1.jpg/640px-Chicago_sunrise_1.jpg",
        "url": "https://en.wikipedia.org/wiki/Chicago",
        "marker-color": "#ff8888",
         "marker-symbol": "star",
         "marker-size": "large",
         "jenis":"1",
        "city": "Chicago"
    }
}];

var geoJson2 =[{
    type: 'Feature',
    "geometry": { "type": "Point", "coordinates": [107.608,-6.91486]},
    "properties": {
        "image": "https://upload.wikimedia.org/wikipedia/commons/thumb/8/82/Chicago_sunrise_1.jpg/640px-Chicago_sunrise_1.jpg",
        "url": "https://en.wikipedia.org/wiki/Chicago",
        "marker-color": "#ff8888",
         "marker-symbol": "star",
         "marker-size": "large",
         "jenis":"1",
        "city": "Chicago"
    }
},{
    type: 'Feature',
    "geometry": { "type": "Point", "coordinates": [106.895,-6.30245]},
    "properties": {
        "image": "https://upload.wikimedia.org/wikipedia/commons/thumb/3/39/NYC_Top_of_the_Rock_Pano.jpg/640px-NYC_Top_of_the_Rock_Pano.jpg",
        "url": "https://en.wikipedia.org/wiki/New_York_City",
        "marker-color": "#ff8888",
        "sejarah" : "sejarah",
        "event" : "event",
        "galery" : "galery",
        "video" : "aa",
        "jenis":"2",
        "city": "New York City"
    }
}, {
    type: 'Feature',
    "geometry": { "type": "Point", "coordinates":[107.655,-6.89797]},
    "properties": {
        "image": "https://upload.wikimedia.org/wikipedia/commons/thumb/3/39/NYC_Top_of_the_Rock_Pano.jpg/640px-NYC_Top_of_the_Rock_Pano.jpg",
        "url": "https://en.wikipedia.org/wiki/New_York_City",
        "marker-color": "#ff8888",
        "sejarah" : "sejarah",
        "events" : "event</br><button type='submit'>Check In</button>",
        "galery" : "galery",
        "video" : "bb",
        "jenis":"2",
        "city": "New York City"
    }
}];

// Add custom popups to each using our custom feature properties
myLayer.on('layeradd', function(e) {
    var marker = e.layer,
        feature = marker.feature;

    // Create custom popup content
    var popupContent =  e.layer.feature.properties.city;

    // http://leafletjs.com/reference.html#popup
    marker.bindPopup(popupContent,{
        closeButton: false,
        maxWidth: 300
    });
    e.layer.feature.geometry.coordinates.reverse();
});

myLayer.on('mouseover', function(e) {
    e.layer.openPopup();
});
myLayer.on('mouseout', function(e) {
    e.layer.closePopup();
});

myLayer.on('click',function(e){
	if(e.layer.feature.properties.jenis==2)
	{
		$("#sejarah").click(function(){
			$("#budayaConts").html(e.layer.feature.properties.sejarah);
		});
		$("#event").click(function(){
			$("#budayaConts").html(e.layer.feature.properties.events);
		});
		$("#gal").click(function(){
			$("#budayaConts").html(e.layer.feature.properties.galery);
		});
		$("#vd").click(function(){
			$("#budayaConts").html(e.layer.feature.properties.video);
		});

		$('#nameBudaya').append(e.layer.feature.properties.city);
		$('#myModal').modal('show'); 
	}
	
	map.setView( e.layer.feature.geometry.coordinates,12);	
});
myLayer.on('dblclick',function(e){
	map.setView([-1.527, 118.215], 5);
});

// Add features to the map
myLayer.setGeoJSON(geoJson1);
map.on('zoomend', function(e) {
				if (map.getZoom() <= 5) {
					myLayer.setGeoJSON(geoJson1);
			    } 
			    else 
			    {
			    	
			    	myLayer.setGeoJSON(geoJson2);
			    } 
			});
		</script>
		<div class="pemberitahuan">
			aaaaaaaaaaaaa
		</div>
	</div>
</div>