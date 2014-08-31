<div class="container">
	<div class="isi">
		<div id="map" style="width: 920px; height: 456px">
			<!-- Modal -->
			<div id="myModal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			  <div class="modal-dialog modal-lg">
			    <div style="height:400px;background:grey;margin-left:33px;margin-top:10%;" class="modal-content">
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

            var qurl = "getData.php";
            var dtkirim = {"req":"1"};
            var request =  $.ajax({
                            url: qurl,
                            data: dtkirim,
                            type: "POST",
                            crossDomain: true,
                            dataType: "text",
                        });
            request.success(function(resp){
                $("#wuhu").html(resp);
                L.mapbox.accessToken = 'pk.eyJ1IjoicmlmcWl0aG9taSIsImEiOiJpUjFieHdVIn0.Cz3ME0XeH01-5IRnCJl3SA';
                var map = L.mapbox.map('map', 'rifqithomi.jb5ibjeg')
                    .setView([-1.527, 118.215], 5);

                var myLayer = L.mapbox.featureLayer().addTo(map);
                var aa = document.getElementById('wuhu');
                var geoJson1 =[{"type":"Feature","geometry":{"type":"Point","coordinates":[95.3167,5.55]},"id":1,"properties":{"jenis":1,"icon":{"iconUrl":"assets\/images\/map-marker-kota(32xx).png","iconSize":[32,43],"iconAnchor":[16,42],"popupAnchor":[0,-40],"className":"dot"},"city":"Aceh"}},{"type":"Feature","geometry":{"type":"Point","coordinates":[98.6693,3.59154]},"id":2,"properties":{"jenis":1,"icon":{"iconUrl":"assets\/images\/map-marker-kota(32xx).png","iconSize":[32,43],"iconAnchor":[16,42],"popupAnchor":[0,-40],"className":"dot"},"city":"Sumatera Utara"}},{"type":"Feature","geometry":{"type":"Point","coordinates":[100.353,-0.95]},"id":3,"properties":{"jenis":1,"icon":{"iconUrl":"assets\/images\/map-marker-kota(32xx).png","iconSize":[32,43],"iconAnchor":[16,42],"popupAnchor":[0,-40],"className":"dot"},"city":"Sumatera Barat"}},{"type":"Feature","geometry":{"type":"Point","coordinates":[101.447,-0.5335]},"id":4,"properties":{"jenis":1,"icon":{"iconUrl":"assets\/images\/map-marker-kota(32xx).png","iconSize":[32,43],"iconAnchor":[16,42],"popupAnchor":[0,-40],"className":"dot"},"city":"Riau"}},{"type":"Feature","geometry":{"type":"Point","coordinates":[103.61,-1.59]},"id":5,"properties":{"jenis":1,"icon":{"iconUrl":"assets\/images\/map-marker-kota(32xx).png","iconSize":[32,43],"iconAnchor":[16,42],"popupAnchor":[0,-40],"className":"dot"},"city":"Jambi"}},{"type":"Feature","geometry":{"type":"Point","coordinates":[104.757,-2.99093]},"id":6,"properties":{"jenis":1,"icon":{"iconUrl":"assets\/images\/map-marker-kota(32xx).png","iconSize":[32,43],"iconAnchor":[16,42],"popupAnchor":[0,-40],"className":"dot"},"city":"Sumatera Selatan"}},{"type":"Feature","geometry":{"type":"Point","coordinates":[102.262,-3.79207]},"id":7,"properties":{"jenis":1,"icon":{"iconUrl":"assets\/images\/map-marker-kota(32xx).png","iconSize":[32,43],"iconAnchor":[16,42],"popupAnchor":[0,-40],"className":"dot"},"city":"Bengkulu"}},{"type":"Feature","geometry":{"type":"Point","coordinates":[105.407,-4.55858]},"id":8,"properties":{"jenis":1,"icon":{"iconUrl":"assets\/images\/map-marker-kota(32xx).png","iconSize":[32,43],"iconAnchor":[16,42],"popupAnchor":[0,-40],"className":"dot"},"city":"Lampung"}},{"type":"Feature","geometry":{"type":"Point","coordinates":[105.265,-5.44789]},"id":9,"properties":{"jenis":1,"icon":{"iconUrl":"assets\/images\/map-marker-kota(32xx).png","iconSize":[32,43],"iconAnchor":[16,42],"popupAnchor":[0,-40],"className":"dot"},"city":"Kepulauan Bangka Belitung"}},{"type":"Feature","geometry":{"type":"Point","coordinates":[104.446,0.91792]},"id":10,"properties":{"jenis":1,"icon":{"iconUrl":"assets\/images\/map-marker-kota(32xx).png","iconSize":[32,43],"iconAnchor":[16,42],"popupAnchor":[0,-40],"className":"dot"},"city":"Kepulauan Riau"}},{"type":"Feature","geometry":{"type":"Point","coordinates":[106.846,-6.20876]},"id":11,"properties":{"jenis":1,"icon":{"iconUrl":"assets\/images\/map-marker-kota(32xx).png","iconSize":[32,43],"iconAnchor":[16,42],"popupAnchor":[0,-40],"className":"dot"},"city":"DKI Jakarta"}},{"type":"Feature","geometry":{"type":"Point","coordinates":[107.608,-6.91486]},"id":12,"properties":{"jenis":1,"icon":{"iconUrl":"assets\/images\/map-marker-kota(32xx).png","iconSize":[32,43],"iconAnchor":[16,42],"popupAnchor":[0,-40],"className":"dot"},"city":"Jawa Barat"}},{"type":"Feature","geometry":{"type":"Point","coordinates":[110.417,-6.96667]},"id":13,"properties":{"jenis":1,"icon":{"iconUrl":"assets\/images\/map-marker-kota(32xx).png","iconSize":[32,43],"iconAnchor":[16,42],"popupAnchor":[0,-40],"className":"dot"},"city":"Jawa Tengah"}},{"type":"Feature","geometry":{"type":"Point","coordinates":[110.371,-7.79707]},"id":14,"properties":{"jenis":1,"icon":{"iconUrl":"assets\/images\/map-marker-kota(32xx).png","iconSize":[32,43],"iconAnchor":[16,42],"popupAnchor":[0,-40],"className":"dot"},"city":"D I Yogyakarta"}},{"type":"Feature","geometry":{"type":"Point","coordinates":[112.746,-7.26424]},"id":15,"properties":{"jenis":1,"icon":{"iconUrl":"assets\/images\/map-marker-kota(32xx).png","iconSize":[32,43],"iconAnchor":[16,42],"popupAnchor":[0,-40],"className":"dot"},"city":"Jawa Timur"}},{"type":"Feature","geometry":{"type":"Point","coordinates":[106.15,-6.12]},"id":16,"properties":{"jenis":1,"icon":{"iconUrl":"assets\/images\/map-marker-kota(32xx).png","iconSize":[32,43],"iconAnchor":[16,42],"popupAnchor":[0,-40],"className":"dot"},"city":"Banten"}},{"type":"Feature","geometry":{"type":"Point","coordinates":[115.217,-8.65]},"id":17,"properties":{"jenis":1,"icon":{"iconUrl":"assets\/images\/map-marker-kota(32xx).png","iconSize":[32,43],"iconAnchor":[16,42],"popupAnchor":[0,-40],"className":"dot"},"city":"Bali"}},{"type":"Feature","geometry":{"type":"Point","coordinates":[116.117,-8.58195]},"id":18,"properties":{"jenis":1,"icon":{"iconUrl":"assets\/images\/map-marker-kota(32xx).png","iconSize":[32,43],"iconAnchor":[16,42],"popupAnchor":[0,-40],"className":"dot"},"city":"Nusa Tenggara Barat"}},{"type":"Feature","geometry":{"type":"Point","coordinates":[123.598,-10.1788]},"id":19,"properties":{"jenis":1,"icon":{"iconUrl":"assets\/images\/map-marker-kota(32xx).png","iconSize":[32,43],"iconAnchor":[16,42],"popupAnchor":[0,-40],"className":"dot"},"city":"Nusa Tenggara Timur"}}];



                var geoJson2 =[{
                    type: 'Feature',
                    "geometry": { "type": "Point", "coordinates": [106.846,-6.20876]},
                    "properties": {
                        "jenis":"1",
                        "icon": {
                            "iconUrl": "assets/images/map-marker-kota(32xx).png",
                            "iconSize": [32, 43], // size of the icon
                            "iconAnchor": [16, 42], // point of the icon which will correspond to marker's location
                            "popupAnchor": [0, -40], // point from which the popup should open relative to the iconAnchor
                            "className": "dot"
                        },
                        "city": "DKI Jakarta"
                    }
                }, {
                    type: 'Feature',
                    "geometry": { "type": "Point", "coordinates": [107.608,-6.91486]},
                    "properties": {
                        "jenis":"1",
                        "icon": {
                            "iconUrl": "assets/images/map-marker-kota(32xx).png",
                            "iconSize": [32, 43], // size of the icon
                            "iconAnchor": [16, 42], // point of the icon which will correspond to marker's location
                            "popupAnchor": [0, -40], // point from which the popup should open relative to the iconAnchor
                            "className": "dot"
                        },
                        "city": "Jawa Barat"
                    }
                }, {
                    type: 'Feature',
                    "geometry": { "type": "Point", "coordinates": [106.895,-6.30245]},
                    "properties": {
                        "sejarah" : "sejarah",
                        "event" : "event",
                        "galery" : "galery",
                        "video" : "aa",
                        "jenis":"2",
                        "icon": {
                            "iconUrl": "assets/images/map-marker-busana(32xx).png",
                            "iconSize": [32, 43], // size of the icon
                            "iconAnchor": [16, 42], // point of the icon which will correspond to marker's location
                            "popupAnchor": [0, -40], // point from which the popup should open relative to the iconAnchor
                            "className": "dot"
                        },
                        "city": "TMII"
                    }
                }, {
                    type: 'Feature',
                    "geometry": { "type": "Point", "coordinates":[107.655,-6.89797]},
                    "properties": {
                        "sejarah" : "sejarah",
                        "events" : "event</br><button type='submit'>Check In</button>",
                        "galery" : "galery",
                        "video" : "bb",
                        "jenis":"2",
                        "icon": {
                            "iconUrl": "assets/images/map-marker-musik(32xx).png",
                            "iconSize": [32, 43], // size of the icon
                            "iconAnchor": [16, 42], // point of the icon which will correspond to marker's location
                            "popupAnchor": [0, -40], // point from which the popup should open relative to the iconAnchor
                            "className": "dot"
                        },
                        "city": "Saung Ujo"
                    }
                }];

                // Add custom popups to each using our custom feature properties
                myLayer.on('layeradd', function(e) {
                    var marker = e.layer,
                        feature = marker.feature;

                    // Create custom popup content
                    var popupContent =  e.layer.feature.properties.city;

                    // http://leafletjs.com/reference.html#popup
                    marker.setIcon(L.icon(feature.properties.icon));
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

                myLayer.on('dblclick',function(e){
                    map.setView([-1.527, 118.215], 5);
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

                        $('#nameBudaya').html(e.layer.feature.properties.city);
                        $('#myModal').modal('show'); 
                    }
                    
                    map.setView( e.layer.feature.geometry.coordinates,12);  
                });

                // Add features to the map
                myLayer.setGeoJSON(geoJson1);
                map.on('zoomend', function(e) {
                                if (map.getZoom() <= 5) {
                                    myLayer.setGeoJSON(geoJson1);
                                } 
                                else if(map.getZoom() > 5)
                                {
                                    myLayer.setGeoJSON(geoJson2);
                                }
                                
                            });
                            });
			

		</script>
        <div class="pemberitahuan">
            aaaaaaaaaaaaa
        </div>
		<div id="wuhu" style="display:none;" class="pemberitahuan"></div>
	</div>
</div>