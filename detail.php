<?php
	include 'dbcon.php';
	session_start();
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
		<div style="padding:2px 2px;margin-bottom:30px;height:180px;box-shadow: 2px 3px 2px #888888;">
			<div style="height:180px;float:left;width:600px;background:red;">a</div>
			<div id="map" style="width: 300px; height: 170px;float:right"></div>
		</div>
		<div style="padding:2px 2px;margin-bottom:30px;height:180px;box-shadow: 2px 3px 2px #888888;">
			sdsdsds
		</div>
		<div style="padding:2px 2px;margin-bottom:30px;height:auto;box-shadow: 2px 3px 2px #888888;">
			<form id='comment' method='post'>
				<div style="margin-bottom:30px;margin-top:20px;width:900px;height:50px;padding:7px 0px;">
					<input style="height:35px;margin-bottom:10px;width:700px;float:left;" name="isi" id="isi" type="text" class="form-control" placeholder="Barikan Komentar" required>
					<?php echo "<input name ='iduser' type='hidden' class='form-control'  value='".$_SESSION['id_tab_user']."' readonly='yes'>";?>
					<?php echo "<input name ='ids' type='hidden' class='form-control'  value='".$ids."' readonly='yes'>";?>
					<?php echo "<input name ='pages' type='hidden' class='form-control'  value='".$pages."' readonly='yes'>";?>
					<button id="subsub" style="height:35px;line-height: 10px;float:right;width:150px;margin-right:20px" class="btn btn-lg btn-primary btn-block" type="submit">Tambahkan</button>
				</div>
			</form>
			<div id ='blokComment' style="padding:2px 2px;margin-bottom:30px;height:auto;">
				<!--tempat komen-->
				<?php
					if ($pages==1) {
						$qrLoadComment =" SELECT id_comm_bud, id_budaya, isi, tanggal, id_tab_user
											FROM comment_bud
										";
						$getLoadComment = mysql_query($qrLoadComment);
						while($resultLoadComment=mysql_fetch_assoc($getLoadComment)){
								$qrUser = "SELECT nama_depan, nama_belakang, nama_file_profile
											FROM user
											WHERE id_tab_user = ".$resultLoadComment['id_tab_user']."
											";
								$getUser = mysql_query($qrUser);
								$resultUser=mysql_fetch_array($getUser);
								echo "
										<div style='margin-bottom:20px;'>
											<img title='".$resultUser['nama_depan']." ".$resultUser['nama_belakang']."' style='float:left;margin-right:10px;' src='assets/user/".$resultLoadComment['id_tab_user']."/".$resultUser['nama_file_profile'].".png' width='50px' height='50px'>
											<span style='margin-top:-20px;'>".$resultLoadComment['isi']."</span>
										</div>
										<hr>
										<br/>
									";
						}

					}
					
				?>
			</div>
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


                //comment submit
                var form = $('form');
                var submit = $('#submit');

                form.on('submit', function(e){
                	e.preventDefault();
                	$.ajax({
                		url : 'komen.php',
                		type : 'POST',
                		cache : false,
                		data : form.serialize(),
                		beforeSend: function(){
					        submit.val('Sedang Menambahkan...').attr('disabled', 'disabled');
					    },
					    success: function(data){
					        // Append with fadeIn see http://stackoverflow.com/a/978731
					        var item = $(data).hide().fadeIn(800);
					        $('#blokComment').append(item);

					        // reset form and button
					        form.trigger('reset');
					        submit.val('Tambahkan').removeAttr('disabled');
				      	}

                	});
                });
</script>