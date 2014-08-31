<?php
	require_once 'dbcon.php';
	$req = $_POST['req'];

	if($req =="1")
	{
		$qrProv="SELECT * FROM provinsi";
		$getProv = mysql_query($qrProv);
		$type = "Feature";
		$hasilss = array();
		$hasil = array(
				   'type'      => 'Feature'
				);
		while($resultProv=mysql_fetch_assoc($getProv)){
			$geometry = array(
							'type' => 'Point',
							'coordinates' => array($resultProv['long'],$resultProv['lat'])
						);
			$icon = array(
						'iconUrl' => 'assets/images/map-marker-kota(32xx).png',
						'iconSize' => array(32,43),
						'iconAnchor' => array(16,42),
						'popupAnchor' => array(0,-40),
						'className' => 'dot'
					);
			$propertiess = array(
							'jenis' => '1',
							'icon' => $icon,
							'city' => $resultProv['nama_provinsi']
						);

			$hasil['geometry'] =  $geometry;
			$hasil['id'] = $resultProv['id_provinsi'];
			$hasil['properties'] = $propertiess;
			$hasilss[] = $hasil;
		}

		echo json_encode($hasilss);//, JSON_NUMERIC_CHECK);
	}
	

?>