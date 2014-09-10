<?php
	include 'dbcon.php';
	session_start();
	
	if($_POST['pages'] == 1){
		$qrCheckin = "INSERT INTO chekin (id_tab_user,id_budaya,tanggal)
						values (".$_POST['iduser'].",".$_POST['ids'].",NOW()) 
						";
		$resultCheckin = mysql_query($qrCheckin);

	}
	else if ($_POST['pages'] == 2) {
		
	}
?>