<div class="container">
	<div class="isi">
		<div id="map" style="width: 920px; height: 456px">
			<!-- Modal -->
			<div id="myModal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			  <div class="modal-dialog modal-lg">
			    <div style="height:400px;background:grey;margin-left:33px;margin-top:20%;" class="modal-content">
			    	<div style="margin-left:33px;" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
				      <div class="container-fluid">
				        <div class="navbar-header">
				          <a class="navbar-brand" href="#">Project name</a>
				        </div>
				      </div>
				    </div>
			    	<div style="height:385px;margin-top:10px;margin-left:6px;border-right: thick double #373737;" class="col-sm-3 col-md-2 sidebar">
					    <ul style="margin-top:40px;" class="nav nav-sidebar">
					        <li><a style="color:white;margin-right:7px;" href="#">Sejarah</a></li>
					        <li><a style="color:white;margin-right:7px;" href="#">Events</a></li>
					        <li><a style="color:white;margin-right:7px;" href="#">Galeri Foto</a></li>
					        <li><a style="color:white;margin-right:7px;" href="#">Video</a></li>
					    </ul>
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
    /*var popupContent =  '<iframe width="200" height="120"src="http://www.youtube.com/embed/SRN3bv9nB5U?autoplay=1&showinfo=0&controls=0" frameborder="0" ></iframe>';

    // http://leafletjs.com/reference.html#popup
    marker.bindPopup(popupContent,{
        closeButton: true,
        minWidth: 900
    });*/
    e.layer.feature.geometry.coordinates.reverse();
});

myLayer.on('click',function(e){
	if(e.layer.feature.properties.jenis==2)
	{
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