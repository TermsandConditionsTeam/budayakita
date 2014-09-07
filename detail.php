<?php
	include 'dbcon.php';
	$pages=$_GET['pages'];

	$icon;
	$nama;
	$kategori;

	if($pages==1)
	{
		$ids=$_GET['idBud'];
		$qrBudaya = "SELECT nama_budaya, lat_bud, long_bud, id_kategori 
						FROM budaya
						WHERE id_budaya = ".$ids." ";
		$getBudaya = mysql_query($qrBudaya);
		$resultBudaya = mysql_fetch_array($getBudaya);
		$qrKat = "SELECT nama_file_icon, nama_kategori 
						FROM kategori 
						WHERE id_kategori = ".$resultBudaya['id_kategori']."
					";
		$getKat = mysql_query($qrKat);
		$resultKat=mysql_fetch_array($getKat);
		$icon = $resultKat['nama_file_icon'];
		$nama = $resultBudaya['nama_budaya'];
		$kategori = $resultKat['nama_kategori'];
		$lat = $resultBudaya['lat_bud'];
		$lng = $resultBudaya['long_bud'];
	}
	else if($pages = 2)
	{
		$ids=$_GET['idEve'];
	}
?>
<div class="container">
	<div class="isi">
		<div style="padding:2px 2px;margin-bottom:10px;height:70px;">
			<?php 
				echo "<img style='float:left;' src='assets/images/".$icon.".png' alt='' width='50px' height='60px'>&nbsp;";
				echo "<span style='font-size:20px;margin-top:-20px;'>".$nama."</span><br/>";
				echo "&nbsp;<span style='font-size:10px;'>".$kategori."</span>";
			?>
		</div>
		<div style="padding:2px 2px;margin-bottom:10px;height:180px;box-shadow: 2px 3px 2px #888888;">
			<div id="map" style="width: 300px; height: 170px;float:right"></div>
		</div>
	</div>
</div>		
<script type="text/javascript">
				var lat = '<?php echo $lat; ?>';
				var lng = '<?php echo $lng; ?>';
				var iconPath = '<?php echo $icon; ?>';
				var city = '<?php echo $nama; ?>';

				var geojson = { 
								type: 'Feature',
								geometry : {'type' :'Point', 'coordinates' : [lng,lat] },
								properties : {
									'city' : city,
									'icon' : {
										'iconUrl' : 'assets/images/'+iconPath+'.png',
										'iconSize' : [32,43],
										'iconAnchor' : [16,42],
										'popupAnchor' : [0,-40],
										'className' : 'dot'
									}
								}
							};

	 			L.mapbox.accessToken = 'pk.eyJ1IjoicmlmcWl0aG9taSIsImEiOiJpUjFieHdVIn0.Cz3ME0XeH01-5IRnCJl3SA';
                var map = L.mapbox.map('map', 'rifqithomi.jb5ibjeg')
                    .setView([lat, lng], 15);

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
                myLayer.setGeoJSON(geojson);
</script>