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
            var geoJson1 = reqData('1');
            var geoJson2 = geoJson1.concat(reqData('2'));

                L.mapbox.accessToken = 'pk.eyJ1IjoicmlmcWl0aG9taSIsImEiOiJpUjFieHdVIn0.Cz3ME0XeH01-5IRnCJl3SA';
                var map = L.mapbox.map('map', 'rifqithomi.jb5ibjeg')
                    .setView([-1.527, 118.215], 5);

                var myLayer = L.mapbox.featureLayer().addTo(map);

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
                            $("#budayaConts").html(e.layer.feature.properties.galery[0].nama_gallery);
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


           function reqData(reqNumber){
                var data;
                var qurl = "getData.php";
                var dtkirim = {"req":reqNumber};
                $.ajax({
                            url: qurl,
                            data: dtkirim,
                            async: false,
                            type: "POST",
                            crossDomain: true,
                            dataType: "text",
                            success: function (resp)
                              {
                                  data = JSON.parse(resp);
                              }
                        });
                return data;
                
            }

		</script>
        <div class="pemberitahuan">
            aaaaaaaaaaaaa
        </div>
	</div>
</div>